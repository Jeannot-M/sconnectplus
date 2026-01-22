<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\CareerApplicationMail;
use Illuminate\Support\Facades\Mail;

class JobApplicationController extends Controller
{
    /**
     * Affiche le formulaire de candidature.
     *
     * @return \Illuminate\View\View
     */
    public function showForm()
    {
        return view('carriere');
    }

    /**
     * Traite la soumission du formulaire de candidature.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation des données du formulaire
        $validated = $request->validate([
            // Personal Information
            'first_name' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'gender' => 'required|in:male,female',
            'phone' => 'required|string|max:20',
            'whatsapp' => 'nullable|string|max:20',
            'email' => 'required|email|max:255',
            
            // Education
            'education_level' => 'required|in:bac,graduat,licence,master,other',
            'other_education' => 'nullable|string|max:100',
            'highest_degree' => 'required|string|max:255',
            'certifications' => 'nullable|string',
            
            // Job Information
            'job_title' => 'required|string|max:255',
            'contract_type' => 'required|in:cdi,cdd,stage,young_talent',
            'availability' => 'required|date',
            'last_position' => 'nullable|string|max:255',
            'main_missions' => 'nullable|string',
            
            // Skills
            'languages' => 'nullable|array',
            'computer_level' => 'required|in:beginner,intermediate,advanced',
            'technical_skills' => 'nullable|string',
            
            // Documents
            'cv' => 'required|file|mimes:pdf,doc,docx|max:5120',
            'motivation_letter' => 'required|file|mimes:pdf,doc,docx|max:5120',
            'id_card' => 'required|file|mimes:pdf,jpg,jpeg,png|max:5120',
            
            // Confirmation
            'confirmation' => 'required|accepted'
        ]);

        // Traitement des fichiers uploadés
        $data = $validated;
        
        // Traitement du CV
        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('job_applications/cv', 'public');
            $data['cv_path'] = $cvPath;
        }
        
        // Traitement de la lettre de motivation
        if ($request->hasFile('motivation_letter')) {
            $motivationLetterPath = $request->file('motivation_letter')->store('job_applications/motivation_letters', 'public');
            $data['motivation_letter_path'] = $motivationLetterPath;
        }
        
        // Traitement de la carte d'identité
        if ($request->hasFile('id_card')) {
            $idCardPath = $request->file('id_card')->store('job_applications/id_cards', 'public');
            $data['id_card_path'] = $idCardPath;
        }
        
        // Conversion des tableaux en JSON
        if (isset($data['languages'])) {
            $data['languages'] = json_encode($data['languages']);
        }
        
        // Création de la candidature en base de données
        // $application = \App\Models\JobApplication::create($data);
        
        // Préparer les données des fichiers
        $fileData = [];

        if ($request->hasFile('cv')) {
            $fileData['cv'] = [
                'name' => $request->file('cv')->getClientOriginalName(),
                'content' => $request->file('cv')->get()
            ];
        }

        if ($request->hasFile('motivation_letter')) {
            $fileData['motivation_letter'] = [
                'name' => $request->file('motivation_letter')->getClientOriginalName(),
                'content' => $request->file('motivation_letter')->get()
            ];
        }

        if ($request->hasFile('id_card')) {
            $fileData['id_card'] = [
                'name' => $request->file('id_card')->getClientOriginalName(),
                'content' => $request->file('id_card')->get()
            ];
        }

         // Envoyer l'email avec les pièces jointes
        Mail::to('carriere@sconnectplus.cd')
            ->send(new CareerApplicationMail($data, $fileData));
        
        // Return redirect to confirmation page
        return redirect()->route('career.confirm')->with('success', 'Votre candidature a été soumise avec succès!');
    }
}
