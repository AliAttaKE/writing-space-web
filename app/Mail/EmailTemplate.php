<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EmailTemplate extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email = null, $data = null)
    {
        $this->email= $email;
        $this->data = $data;
    }

    public function build()
    {
        $email_subject = '';
        $arr = explode("\n", $this->email->title);
        foreach ($arr as $ar) {
            if (strpos($ar, '[Order ID]') !== false) {
                $email_subject = str_replace('[Order ID]', $this->data['order_id'], $ar);
            }
        }
        if($email_subject != null)
        {
            return $this->subject($email_subject)
                    ->view('emails.custom_template')
                    ->with(['data' => $this->data]);
        }else{
            return $this->subject($this->email->title)
                    ->view('emails.custom_template')
                    ->with(['data' => $this->data]);
        }
        

    }
}
