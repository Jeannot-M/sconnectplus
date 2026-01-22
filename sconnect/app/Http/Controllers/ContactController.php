<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Affiche le formulaire de contact
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Traite la soumission du formulaire de contact
     */
    public function submit(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|min:10'
        ], [
            'name.required' => 'Le nom est obligatoire',
            'email.required' => 'L\'email est obligatoire',
            'email.email' => 'Email invalide',
            'message.required' => 'Message obligatoire',
            'message.min' => '10 caractères minimum'
        ]);

        if ($validator->fails()) {
            
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {

           
            Mail::to('contact@sconnectplus.cd')
                ->send(new ContactFormMail($request->all()));
            
                
            return redirect()->back()
                ->with('success', 'Message envoyé!');
                
        } catch (\Exception $e) {
            // dd("Exp");
            return redirect()->back()
                ->with('error', 'Erreur d\'envoi: '.$e->getMessage())
                ->withInput();
        }
    }
}
