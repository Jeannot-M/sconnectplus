<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Tech4SchoolRegistrationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        $fromAddress = env('MAIL_FROM_ADDRESS', 'contact@sconnectplus.cd');
        $fromName = env('MAIL_FROM_NAME', 'Sconnect Plus');

        return $this->from($fromAddress, $fromName)
            ->to('tech4school@sconnectplus.cd')
            ->subject('Nouvelle Inscription Tech4School - ' . ($this->data['child_name'] ?? ''))
            ->view('emails.tech4school-registration')
            ->with(['data' => $this->data]);
    }
}
