<?php

namespace App\Http\Livewire\Control;

use App\Models\User;
use Livewire\Component;

class UserComponent extends Component
{

    public $query;

    public function deleteUser($user) 
    {
      
    }

    public function render()
    {
        $users = User::where("name", 'like', '%' . $this->query . '%')->orwhere("email", 'like', '%' . $this->query . '%')->latest()->paginate(25);
        
        return view('livewire.control.user-component', [
            'users' => $users
        ])->extends('control.layouts.main')->section('content_text');
    }
}
