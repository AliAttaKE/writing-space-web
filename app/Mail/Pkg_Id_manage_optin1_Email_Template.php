<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Pkg_Id_manage_optin1_Email_Template extends Mailable
{
    use Queueable, SerializesModels;

    public $invoiceData;
    public $subject;

    /**
     * Create a new message instance.
     *
     * @param array|null $invoiceData
     * @param string|null $subject
     * @return void
     */
    public function __construct($invoiceData = null, $subject = null)
    {
        $this->invoiceData = $invoiceData;
        $this->subject = $subject ?? 'Confirmation of Additional Pages Purchase – Order ' . ($invoiceData['orderid'] ?? '');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       return $this->subject($this->subject)
                ->view('emails.invoicec_text_pkg_add_mange_option1_template')
                ->with([
                    'subject' => $this->subject,
                    'invoiceData' => $this->invoiceData
                ]);
    }
}
