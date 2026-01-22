<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\SconnectAcademyMail;

class MailTestCommand extends Command
{
    protected $signature = 'mail:test {email} {--queue}';
    protected $description = 'Send a test email to specified address';

    public function handle()
    {
        $email = $this->argument('email');

        try {
            $mail = new SconnectAcademyMail([
                'nom' => 'Test Name',
                'email' => 'test@test.com'
            ]);

            if ($this->option('queue')) {
                Mail::to($email)->queue($mail);
                $this->info('Test email queued for sending to: '.$email);
            } else {
                Mail::to($email)->send($mail);
                $this->info('Test email sent to: '.$email);
            }

            return 0;
        } catch (\Exception $e) {
            $this->error('Error: '.$e->getMessage());
            return 1;
        }
    }
}
