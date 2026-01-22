<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuoteRequestMail extends Mailable
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
        \Log::info('Envoi email demande de devis', ['files_count' => count($this->files)]);
        
        $mail = $this->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
            ->replyTo($this->data['email'])
            ->to('contact@sconnectplus.cd')
            ->subject('Nouvelle demande de devis')
            ->view('emails.quote-request')
            ->with(['data' => $this->data]);
       
        // Attacher les fichiers
        foreach ($this->files as $file) {
            \Log::info('Attachement fichier', [
                'name' => $file['name'],
                'size' => strlen($file['content'])
            ]);
            
            $mail->attach(
                $file['path'],
                ['as' => $file['name'], 'mime' => $this->getMimeType($file['name'])]
            );
            \Storage::delete(str_replace(storage_path('app/'), '', $file['path']));
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
            'png' => 'image/png',
            'ppt' => 'application/vnd.ms-powerpoint',
            'pptx' => 'application/vnd.openxmlformats-officedocument.presentationml.presentation'
        ];
        
        return $mimeTypes[$extension] ?? 'application/octet-stream';
    }
}
