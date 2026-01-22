<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProgrammeInscriptionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $inscriptionData;
    public $files;

    public function __construct($inscriptionData, $files = [])
    {
        $this->inscriptionData = $inscriptionData;
        $this->files = $files;
    }

    public function build()
    {
        $email = $this->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
            ->subject('Nouvelle inscription au programme Jeune & Entrepreneur')
            ->replyTo($this->inscriptionData['email'])
            ->to('jeuneetentrepreneur@sconnectplus.cd')
            ->markdown('emails.programme-inscription')
            ->with(['data' => $this->inscriptionData]);
        
        
        // Attach all files
        foreach ($this->files as $file) {
            $email->attachData(
                $file['content'],
                $file['name'],
                ['mime' => $this->getMimeType($file['name'])]
            );
        }

        return $email;
    }

    private function getMimeType($filename)
    {
        $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        
        $mimeTypes = [
            'pdf' => 'application/pdf',
            'doc' => 'application/msword',
            'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'ppt' => 'application/vnd.ms-powerpoint',
            'pptx' => 'application/vnd.openxmlformats-officedocument.presentationml.presentation',
        ];
        
        return $mimeTypes[$extension] ?? 'application/octet-stream';
    }
}
