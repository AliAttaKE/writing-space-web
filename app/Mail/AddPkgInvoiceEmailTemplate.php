<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class AddPkgInvoiceEmailTemplate extends Mailable
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
          $orderID = $this->invoiceData['orderid'] ?? 'unknown';
            $timestamp = Carbon::now()->format('Ymd_His');

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

      

     // Set file names
        $invoiceFilename = 'invoice_' . $orderID . '_' . $timestamp . '.pdf';
        $receiptFilename = 'receipt_' . $orderID . '_' . $timestamp . '.pdf';

        // Define storage paths
        $invoiceDir = storage_path('app/public/invoices');
        $receiptDir = storage_path('app/public/receipts');

        // Create directories if needed
        if (!file_exists($invoiceDir)) {
            mkdir($invoiceDir, 0755, true);
        }

        if (!file_exists($receiptDir)) {
            mkdir($receiptDir, 0755, true);
        }

        // Save PDFs to disk
        file_put_contents($invoiceDir . '/' . $invoiceFilename, $invoicePdfContent);
        file_put_contents($receiptDir . '/' . $receiptFilename, $receiptPdfContent);


        if (file_put_contents($invoiceDir . '/' . $invoiceFilename, $invoicePdfContent) === false) {
    Log::error("Failed to save invoice PDF for order: " . $orderID);
}
if (file_put_contents($receiptDir . '/' . $receiptFilename, $receiptPdfContent) === false) {
    Log::error("Failed to save receipt PDF for order: " . $orderID);
}

        return $this->subject($this->subject)
                    ->view('emails.add_invoicec_text_pkg_template')
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
