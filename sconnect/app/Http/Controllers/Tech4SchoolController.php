<?php

namespace App\Http\Controllers;

use App\Mail\Tech4SchoolRegistrationMail;
use App\Models\Tech4SchoolInscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class Tech4SchoolController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'child_name' => 'required|string|max:255',
            'child_age' => 'required|integer|min:3|max:18',
            'child_gender' => 'required|string',
            'child_school' => 'required|string|max:255',
            'parent_name' => 'required|string|max:255',
            'parent_phone' => 'required|string|max:30',
            'parent_whatsapp' => 'nullable|string|max:30',
            'session' => 'required|string',
            'language' => 'required|string',
            'comment' => 'nullable|string|max:1000',
            'confirmed' => 'required|accepted',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Veuillez corriger les erreurs dans le formulaire. / Please fix the errors in the form.');
        }

        // 1. Enregistrement en base de données (avec try-catch au cas où MySQL local soit déconnecté)
        try {
            Tech4SchoolInscription::create([
                'child_name' => $request->child_name,
                'child_age' => $request->child_age,
                'child_gender' => $request->child_gender,
                'child_school' => $request->child_school,
                'parent_name' => $request->parent_name,
                'parent_phone' => $request->parent_phone,
                'parent_whatsapp' => $request->parent_whatsapp,
                'session' => $request->input('session'),
                'language' => $request->language,
                'comment' => $request->comment,
                'confirmed' => $request->has('confirmed'),
            ]);
        } catch (\Exception $e) {
            \Log::warning('Tech4School Inscription DB Save failed: ' . $e->getMessage());
        }

        // 2. Envoi de l'email
        try {
            Mail::to('tech4school@sconnectplus.cd')->send(new Tech4SchoolRegistrationMail($request->all()));
        } catch (\Exception $e) {
            \Log::error('Tech4School Email sending failed: ' . $e->getMessage());
        }

        return redirect()->back()->with('tech4school_success', true);
    }
}
