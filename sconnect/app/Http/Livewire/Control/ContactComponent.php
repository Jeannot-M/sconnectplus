<?php

namespace App\Http\Livewire\Control;

use App\Models\Help;
use App\Models\Message;
use App\Models\Signale;
use Livewire\Component;

class ContactComponent extends Component
{
    public function render()
    {
        $contacts = Help::latest()->get();
        $signales = Signale::latest()->get();
        return view('livewire.control.contact-component', [
            'contacts' => $contacts,
            'signales' => $signales,
        ])->extends('control.layouts.main')->section('content_text');
    }
}
