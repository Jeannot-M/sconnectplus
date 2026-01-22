<?php

namespace App\Http\Livewire\Control;

use App\Models\Setting;
use Livewire\Component;

class SettingComponent extends Component
{

    public $state = [];

    public function mount() {
        

        if (!empty(Setting::first())) {
            $this->state = Setting::first()->toArray();

        }
    }

    public function SettingUpdated() 
    {
        $setting = Setting::first();

        if ($setting) {
            # update
            $setting->update($this->state);
            session()->flash('success', 'Le Paramètre du Site a été mise à jour!');

        } else {
            # create
            Setting::create($this->state);
            session()->flash('success', 'Creation du paramètrage du site éffectuer avec succès !');
        }

        
    }
    public function render()
    {
        return view('livewire.control.setting-component')->extends('control.layouts.main')->section('content_text');
    }
}
