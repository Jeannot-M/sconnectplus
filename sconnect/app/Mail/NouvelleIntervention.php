<?php

namespace App\Mail;

use App\Models\Intervention;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NouvelleIntervention extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * L'intervention.
     *
     * @var \App\Models\Intervention
     */
    public $intervention;

    /**
     * Create a new message instance.
     */
    public function __construct(Intervention $intervention)
    {
        $this->intervention = $intervention;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nouvelle proposition d\'intervention à l\'émission Jeune & Entrepreneur',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.nouvelle-intervention',
        );
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
