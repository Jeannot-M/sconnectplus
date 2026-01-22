<?php

namespace App\Http\Livewire\Control;

use App\Models\Formation;
use Livewire\Component;

class CandidatComponent extends Component
{
    public $query;

    public function render()
    {
        $candidats = Formation::where("noms", 'like', '%' . $this->query . '%')->orwhere("email", 'like', '%' . $this->query . '%')->latest()->paginate(25);
        
        return view('livewire.control.candidat-component' , [
            'candidats' => $candidats
        ])->extends('control.layouts.main')->section('content_text');
    }
}
