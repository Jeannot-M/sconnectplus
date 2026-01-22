<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\ProgrammeInscriptionMail;

class SendTestEmail extends Command
{
    protected $signature = 'email:test {recipient : Email address to send test to}';
    protected $description = 'Send a test email to specified recipient';

    public function handle()
    {
        $recipient = $this->argument('recipient');

        try {
            $mail = new ProgrammeInscriptionMail([
                'nom' => 'Test Email',
                'email' => 'test@test.com'
            ]);

            if ($this->option('queue')) {
                Mail::to($recipient)->queue($mail);
                $this->info('Test email queued for sending to '.$recipient);
            } else {
                Mail::to($recipient)->send($mail);
                $this->info('Test email sent immediately to '.$recipient);
            }

            return 0;
            
        } catch (\Exception $e) {
            $this->error('Failed to send email: '.$e->getMessage());
            $this->line('Check your .env MAIL_* settings and error logs');
            return 1;
        }
    }
}
