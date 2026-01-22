<?php

namespace App\Http\Controllers;

use App\Models\QuoteRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log; 
use App\Mail\QuoteRequestMail;

class QuoteRequestController extends Controller
{
    public function index()
    {
        return view('quote-request');
    }

    public function store(Request $request)
    {
        try {
            // dd('Quote request data:', $request->all());
            
            $validated = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'company' => 'nullable|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:20',
                'service' => 'required|string',
                'details' => 'required|string',
                'attachment' => 'nullable|max:5120',
                'contact_method' => 'required|string'
            ], [
                'attachment.max' => 'La taille maximale est de 5MB'
            ]);

            // Préparer les données du fichier
            $fileData = [];
            if ($request->hasFile('attachment')) {
                $fileData[] = [
                    'name' => $request->file('attachment')->getClientOriginalName(),
                    'content' => $request->file('attachment')->get()
                ];
            }

            Mail::to('contact@sconnectplus.cd')
                ->send(new QuoteRequestMail($validated, $fileData));

            return redirect()->back()->with('success', 'Votre demande a été envoyée!');

        } catch (\Exception $e) {
            \Log::error('Quote request error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Une erreur est survenue. Veuillez réessayer.');
        }
    }

    public function show(QuoteRequest $quoteRequest)
    {
        return view('quote-request.show', compact('quoteRequest'));
    }
}
