<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Help;

class HelpComponent extends Component
{

    public $state = [];

    public function helpSend() 
    {

        $this->validate([ 

            'state.name' => 'required', 
            'state.email' => 'required|email', 
            'state.phone' => 'required', 
            'state.body' => 'required', 
        ]); 

       $help = Help::create($this->state);
       session()->flash('sending','Votre message a été envoyé avec succès!');

    }

    public function render()
    {
        return view('livewire.help-component');
    }
}
