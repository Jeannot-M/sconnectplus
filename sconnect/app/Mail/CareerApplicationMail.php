<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CareerApplicationMail extends Mailable
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
        if (!isset($this->data['email'])) {
            throw new \InvalidArgumentException('Email applicant requis');
        }
        
        $mail = $this->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
            ->replyTo($this->data['email'])
            ->to('carriere@sconnectplus.cd')
            ->view('emails.career-application')
            ->with(['data' => $this->data]);

        // Ajout des pièces jointes
        foreach (['cv', 'motivation_letter', 'id_card'] as $fileType) {
            if (!empty($this->fileData[$fileType])) {
                $mail->attachData(
                    $this->fileData[$fileType]['content'],
                    $this->fileData[$fileType]['name'],
                    ['mime' => $this->getMimeType($this->fileData[$fileType]['name'])]
                );
            }
        }

        return $mail;
    }

    private function getMimeType($filename)
    {
        $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        
        $mimeTypes = [
            'pdf' => 'application/pdf',
            'doc' => 'application/msword',
            'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'jpg' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'png' => 'image/png'
        ];
        
        return $mimeTypes[$extension] ?? 'application/octet-stream';
    }
}
