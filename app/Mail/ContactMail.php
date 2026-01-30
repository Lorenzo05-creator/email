<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $userData; 

    public function __construct($_userData)
    {
        $this->userData = $_userData;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->userData['email'], $this->userData['name']),
            subject: 'Nuovo Contatto dal Sito',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail.contact', 
        );
    }
}