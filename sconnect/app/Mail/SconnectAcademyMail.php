<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SconnectAcademyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;

    public function __construct($formData)
    {
        $this->formData = $formData;
    }

    public function build()
    {
        print('testMail');
        return $this->subject('Nouvelle inscription Sconnect Academy')
                    ->markdown('emails.sconnect-academy')
                    ->with(['data' => $this->formData]);
    }
}
