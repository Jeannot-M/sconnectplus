<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AcademyRegistrationMail extends Mailable
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
        $mail = $this->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
            ->to('training@sconnectplus.cd')
            ->view('emails.academy-registration')
            ->with(['data' => $this->data, 'fileData' => $this->fileData]);

        // Attach files if they exist
        foreach (['cv', 'lettre_motivation', 'diplome'] as $fileType) {
            if (!empty($this->fileData[$fileType])) {
                $mail->attachData(
                    $this->fileData[$fileType]['content'],
                    $this->fileData[$fileType]['name'],
                    ['mime' => 'application/pdf']
                );
            }
        }

        return $mail;
    }
}
