<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CampaignMail extends Mailable
{
    use Queueable, SerializesModels;

    public $content; // Define the $content property

    /**
     * Create a new message instance.
     */
    public function __construct($content)
    {
        $this->content = $content; // Initialize the $content property
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Campaign Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.campaign', // Use the correct view name
        );
    }

    /**
     * Build the message (optional, if you want to use the build() method).
     */
    public function build()
    {
        return $this->subject('Campaign Email')
                    ->view('emails.campaign') // Use the correct view name
                    ->with(['content' => $this->content]);
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}