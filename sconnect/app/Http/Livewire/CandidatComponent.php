<?php

namespace App\Http\Livewire;

use App\Models\Formation;
use Livewire\Component;

class CandidatComponent extends Component
{

    public $state = [];

    public function submitCandi() 
    {
        $this->validate([
            'state.options' => 'required|string',
            'state.noms' => 'required|string',
            'state.postnom' => 'required|string',
            'state.prenom' => 'required|string',
            'state.naissance' => 'required|string',
            'state.sexe' => 'required|string',
            'state.nationalite' => 'required|string',
            'state.payes' => 'required|string',
            'state.etude' => 'required|string',
            'state.profession' => 'required|string',
            'state.adresse' => 'required|string',
            'state.phone' => 'required|string',
            'state.email' => 'required|string',
        ]);
        Formation::create($this->state);
        session()->flash('success', 'Votre demande a été envoyée avec succès');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.candidat-component');
    }
}
