<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InfoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $content;

    public function __construct($content)
    {
        $this->content = $content;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('info@hybrisgym.it', 'Pasquale Palmisano'),
            subject: 'Info HybrisGym',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.email',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
