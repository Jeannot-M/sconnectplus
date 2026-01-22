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
            'email' => 'required|email|unique:newsletters,email'
        ]);
        Newsletter::create([
            'email' => $this->email
        ]);

        $this->reset();
        session()->flash('success', 'Génial! votre adresse électronique a été enregistrée avec succès!');
    }

    public function render()
    {
        return view('livewire.newsletter-component');
    }
}
