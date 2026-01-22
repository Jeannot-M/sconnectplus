<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\InvestisseurInscriptionMail;

class TestEmailCommand extends Command
{
    protected $signature = 'email:test';
    protected $description = 'Test email configuration';

    public function handle()
    {
        $testData = [
            'nom_complet' => 'Test User',
            'email' => 'test@example.com',
            'telephone' => '123456789',
            'pays' => 'Test Country',
            'secteur_activite' => 'Test Sector',
            'montant_investissement' => '1000',
            'message' => 'This is a test email'
        ];

        Mail::to('admin@sconnectplus.cd')
            ->send(new InvestisseurInscriptionMail($testData));

        $this->info('Test email sent successfully!');
        return 0;
    }
}
