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

        NewsletterSubscriber::create($validated);
        
        return back()->with('success', 'Inscription à la newsletter confirmée !');
    }
}
