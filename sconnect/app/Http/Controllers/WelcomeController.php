<?php

namespace App\Http\Controllers;

use App\Models\Signale;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function signaler(Request $request) 
    {
       $all = $request->validate([
            'email' => 'nullable|email',
            'url' => 'nullable|url',
            'resume' => 'required',
            'nature' => 'required',
            'type' => 'required',
        ]);

       Signale::create($all);
       return  back()->with('signale', 'Message envoyé avec succès');
        
    }
}
