<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\View;

class PkgInvoiceEmailTemplate extends Mailable
{
    use Queueable, SerializesModels;

    public $invoiceData;
    public $receiptData;
    public $subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($invoiceData = null, $receiptData = null, $subject = null,$emailContent = null)
    {
        $this->invoiceData = $invoiceData;
        $this->receiptData = $receiptData;
        $this->subject = $subject ?? 'Invoice'; // Default subject if not provided
        $this->emailContent = $emailContent;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // Render the HTML template for invoice

        $invoiceHtml = View::make('emails.invoice_custom_template')
            ->with([
                'subject'     => $this->subject,
                'invoiceData' => $this->invoiceData
            ])->render();

        $receiptHtml = View::make('emails.receipt_custom_template')
            ->with([
                'subject'     => $this->subject,
                'invoiceData' => $this->invoiceData
            ])->render();

        // Generate PDF for invoice
        $invoiceOptions = new Options();
        $invoiceOptions->set('isHtml5ParserEnabled', true);
        $invoiceDompdf = new Dompdf($invoiceOptions);
        $invoiceDompdf->loadHtml($invoiceHtml);
        $invoiceDompdf->setPaper('A4', 'portrait');
        $invoiceDompdf->render();
        $invoicePdfContent = $invoiceDompdf->output();

        // Generate PDF for receipt
        $receiptOptions = new Options();
        $receiptOptions->set('isHtml5ParserEnabled', true);
        $receiptDompdf = new Dompdf($receiptOptions);
        $receiptDompdf->loadHtml($receiptHtml);
        $receiptDompdf->setPaper('A4', 'portrait');
        $receiptDompdf->render();
        $receiptPdfContent = $receiptDompdf->output();

        // Define file names and paths
        $invoiceFilename = 'invoice_' . time() . '.pdf';
        $receiptFilename = 'receipt_' . time() . '.pdf';
        $invoiceDir = storage_path('app/public/invoices');
        $receiptDir = storage_path('app/public/receipts');
        $receiptPath = storage_path('app/public/receipts/' . $receiptFilename);
        $invoicePath = $invoiceDir . '/' . $invoiceFilename;
        $receiptPath = $receiptDir . '/' . $receiptFilename;


        // Save PDFs to the server
        file_put_contents($invoicePath, $invoicePdfContent);
        file_put_contents($receiptPath, $receiptPdfContent);

        return $this->subject($this->subject)
                    ->view('emails.invoicec_text_pkg_template')
                    ->with([
                        'welcomeContent' => $this->emailContent,
                        'invoiceData'    => $this->invoiceData
                    ])
                    ->attachData($invoicePdfContent, 'invoice.pdf', [
                        'mime' => 'application/pdf',
                    ])
                    ->attachData($receiptPdfContent, 'receipt.pdf', [
                        'mime' => 'application/pdf',
                    ]);
    }
}
