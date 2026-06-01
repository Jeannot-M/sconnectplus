<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\NewsletterSubscriber;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:255'
        ]);

        try {
            \Illuminate\Support\Facades\Mail::raw(
                "Bonjour,\n\nUne nouvelle inscription à la newsletter a été enregistrée avec l'adresse e-mail suivante : " . $validated['email'] . "\n\nCordialement,\nL'équipe Sconnect Plus",
                function ($message) use ($validated) {
                    $message->to('contact@sconnectplus.cd')
                            ->subject('Nouvelle inscription à la Newsletter - Sconnect Plus');
                }
            );
        } catch (\Exception $e) {
            \Log::error('Newsletter email failed: ' . $e->getMessage());
        }
        
        return back()->with('success', 'Inscription à la newsletter confirmée !');
    }
}
