<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InterventionEmissionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $files;

    public function __construct($data, $files = [])
    {
        $this->data = $data;
        $this->files = $files;
    }

    public function build()
    {
        // dd("ok");
        $mail = $this->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
            ->subject('Nouvelle demande d\'intervention')
            ->replyTo($this->data['email'])
            ->view('emails.intervention-emission')
            ->with(['data' => $this->data]);

        // Attacher les fichiers
        foreach ($this->files as $file) {
            $mail->attachData(
                $file['content'],
                $file['name'],
                ['mime' => $this->getMimeType($file['name'])]
            );
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
