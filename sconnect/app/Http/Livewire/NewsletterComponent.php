<?php

namespace App\Http\Livewire;

use App\Models\Newsletter;
use Livewire\Component;

class NewsletterComponent extends Component
{
    public $email;

    public function Souscrire()
    {
        $this->validate([
            'email' => 'required|email'
        ]);

        try {
            $emailAddress = $this->email;
            \Illuminate\Support\Facades\Mail::raw(
                "Bonjour,\n\nUne nouvelle inscription à la newsletter a été enregistrée avec l'adresse e-mail suivante : " . $emailAddress . "\n\nCordialement,\nL'équipe Sconnect Plus",
                function ($message) use ($emailAddress) {
                    $message->to('contact@sconnectplus.cd')
                            ->subject('Nouvelle inscription à la Newsletter - Sconnect Plus');
                }
            );
        } catch (\Exception $e) {
            \Log::error('Newsletter email failed: ' . $e->getMessage());
        }

        $this->reset();
        session()->flash('success', 'Génial! votre adresse électronique a été enregistrée avec succès!');
    }

    public function render()
    {
        return view('livewire.newsletter-component');
    }
}
