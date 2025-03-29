<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\View;

class InvoiceEmailTemplate extends Mailable
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
   public function __construct($invoiceData = null, $receiptData = null, $subject = null)
    {
        $this->invoiceData = $invoiceData;
        $this->receiptData = $receiptData;
    
        // Ensure Order ID is included in subject
        $orderID = $invoiceData['orderid'] ?? 'N/A';
        $this->subject = $subject ?? "Your Writing Space Purchase Confirmation – Order ID {$orderID}";
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // Render the HTML template for invoice


        $receiptHtml = View::make('emails.receipt_custom_template')
        ->with([
            'subject' => $this->subject,
            'invoiceData' => $this->invoiceData
        ])->render();
        $invoiceHtml = View::make('emails.invoice_custom_template')
            ->with([
                'subject' => $this->subject,
                'invoiceData' => $this->invoiceData
            ])->render();

        // Render the HTML template for receipt
      
      
        // Generate PDF for invoice
        $invoiceOptions = new Options();
        $invoiceOptions->set('isHtml5ParserEnabled', true);
        $invoiceDompdf = new Dompdf($invoiceOptions);
        $invoiceDompdf->loadHtml($invoiceHtml);
        $invoiceDompdf->setPaper('A4', 'portrait');
        $invoiceDompdf->render();

        // Generate PDF for receipt
        $receiptOptions = new Options();
        $receiptOptions->set('isHtml5ParserEnabled', true);
        $receiptDompdf = new Dompdf($receiptOptions);
        $receiptDompdf->loadHtml($receiptHtml);
        $receiptDompdf->setPaper('A4', 'portrait');
        $receiptDompdf->render();

        // Attach PDFs to the email
        $invoicePdfContent = $invoiceDompdf->output();
        $receiptPdfContent = $receiptDompdf->output();
        
        return $this->subject($this->subject)
                    ->view('emails.invoicec_text_custom_template', [
                'invoiceData' => $this->invoiceData,
                'subject' => $this->subject
            ])
                    ->attachData($invoicePdfContent, 'invoice.pdf', [
                        'mime' => 'application/pdf',
                    ])
                    ->attachData($receiptPdfContent, 'receipt.pdf', [
                        'mime' => 'application/pdf',
                    ]);
    }
}
