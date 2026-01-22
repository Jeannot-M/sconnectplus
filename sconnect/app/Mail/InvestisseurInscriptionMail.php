<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InvestisseurInscriptionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;

    public function __construct($formData)
    {
        $this->formData = $formData;
    }

    public function build()
    {
        return $this->subject('Nouvelle inscription investisseur')
                    ->markdown('emails.inscription-investisseur')
                    ->with(['data' => $this->formData]);
    }
}
