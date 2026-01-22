<?php

namespace App\Http\Livewire\Control;

use App\Models\Foire;
use Livewire\Component;

class FaqComponent extends Component
{

    public $quiz;
    public $answer;

    public function submitFAQ()
    {
        $this->validate([
            'quiz' => 'required',
            'answer' => 'required|min:30|max:300',
        ]);

        Foire::create([
            'quiz' => $this->quiz,
            'answer' => $this->answer,
        ]);

        $this->reset();
        session()->flash('success','Question & Reponse ajoutées avec succès !');
    }

    public function render()
    {
        return view('livewire.control.faq-component')->extends('control.layouts.main')->section('content_text');
    }
}
