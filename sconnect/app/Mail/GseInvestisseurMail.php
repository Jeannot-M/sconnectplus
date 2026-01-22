<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GseInvestisseurMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $fileData;

    public function __construct($data, $fileData = [])
    {
        $this->data = $data;
        $this->fileData = $fileData;
    }

    public function build()
    {
        $mail = $this->from(env('MAIL_FROM_ADDRESS'), 'Grand Salon Entrepreneurial')
            ->view('emails.gse-investisseur')
            ->with(['data' => $this->data]);

        if (!empty($this->fileData['piece_identite'])) {
            $mail->attachData(
                $this->fileData['piece_identite']['content'],
                $this->fileData['piece_identite']['name']
            );
        }

        return $mail;
    }
}
