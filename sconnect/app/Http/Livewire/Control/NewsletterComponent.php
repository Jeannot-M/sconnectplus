<?php

namespace App\Http\Livewire\Control;

use App\Models\Newsletter;
use Livewire\Component;

class NewsletterComponent extends Component
{

    public function deleteNews($id)
    {
        Newsletter::find($id)->delete();
        session()->flash('success', 'Vous avez supprimer cet email de la liste de contact');
    }

    public function render()
    {
        $newsletters = Newsletter::latest()->get();
        return view('livewire.control.newsletter-component', [
            'newsletters' => $newsletters
        ])->extends('control.layouts.main')->section('content_text');
    }
}
