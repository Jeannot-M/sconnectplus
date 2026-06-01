<?php

namespace App\Http\Controllers;

use App\Mail\AcademyRegistrationMail;
use App\Mail\SconnectAcademyMail;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ApplicationController extends Controller
{
    /**
     * Affiche le formulaire d'inscription.
     *
     * @return \Illuminate\View\View
     */
    public function showForm()
    {
        return view('sconnect-academy-registration');
    }

    /**
     * Traite la soumission du formulaire d'inscription.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    
    public function register(Request $request)
    {
        // Validation des données du formulaire
        $validated = $request->validate([
            // Informations personnelles
            'civilite' => 'required|in:m,mme,mlle',
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'required|string|max:20',
            'date_naissance' => 'required|date',
            'lieu_naissance' => 'required|string|max:255',
            'nationalite' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'niveau_etude' => 'required|string|max:255',
            'profession' => 'nullable|string|max:255',
            
            // Choix de formation
            'specialite' => 'required|string|max:255',
            'session' => 'required|string|max:255',
            'format' => 'required|string|max:255',
            'motivation' => 'required|string',
            'attentes' => 'nullable|string',
            
            // Documents
            'cv' => 'required|file|mimes:pdf|max:5120', // 5MB max
            'lettre_motivation' => 'nullable|file|mimes:pdf|max:5120',
            'diplome' => 'required|file|mimes:pdf|max:5120',
            'piece_identite' => 'required|file|mimes:pdf|max:5120',
            'autres_documents.*' => 'nullable|file|mimes:pdf|max:5120',
            
            // Finalisation
            'date_debut' => 'required|date',
            'horaires' => 'required|string|max:255',
            'stage_dispo' => 'nullable|boolean',
            'stage_debut' => 'nullable|date',
            'stage_duree' => 'nullable|string',
            'commentaires' => 'nullable|string',
            
            // Consentements
            'consent_data' => 'nullable',
            'consent_conditions' => 'nullable',
            'consent_newsletter' => 'nullable',
        ]);
        // dd("ici"):
        // Traitement des fichiers uploadés
        $cvPath = $request->file('cv')->store('applications/cv', 'public');
        $diplomePath = $request->file('diplome')->store('applications/diplomes', 'public');
        $pieceIdentitePath = $request->file('piece_identite')->store('applications/pieces_identite', 'public');
        
        $lettrePath = null;
        if ($request->hasFile('lettre_motivation')) {
            $lettrePath = $request->file('lettre_motivation')->store('applications/lettres_motivation', 'public');
        }
        
        $autresDocumentsPaths = [];
        if ($request->hasFile('autres_documents')) {
            foreach ($request->file('autres_documents') as $file) {
                $autresDocumentsPaths[] = $file->store('applications/autres_documents', 'public');
            }
        }

        // Prepare file data for email
        $fileData = [];

        $fileData['cv'] = [
            'name' => $request->file('cv')->getClientOriginalName(),
            'content' => $request->file('cv')->get()
        ];

        $fileData['diplome'] = [
            'name' => $request->file('diplome')->getClientOriginalName(),
            'content' => $request->file('diplome')->get()
        ];

        if ($request->hasFile('lettre_motivation')) {
            $fileData['lettre_motivation'] = [
                'name' => $request->file('lettre_motivation')->getClientOriginalName(),
                'content' => $request->file('lettre_motivation')->get()
            ];
        }

        if ($request->hasFile('autres_documents')) {
            $fileData['autres_documents'] = [];
            foreach ($request->file('autres_documents') as $file) {
                $fileData['autres_documents'][] = [
                    'name' => $file->getClientOriginalName(),
                    'content' => $file->get()
                ];
            }
        }

        // Création de la candidature
        // $application = Application::create([
        //     // Informations personnelles
        //     'civilite' => $validated['civilite'],
        //     'nom' => $validated['nom'],
        //     'prenom' => $validated['prenom'],
        //     'email' => $validated['email'],
        //     'telephone' => $validated['telephone'],
        //     'date_naissance' => $validated['date_naissance'],
        //     'lieu_naissance' => $validated['lieu_naissance'],
        //     'nationalite' => $validated['nationalite'],
        //     'adresse' => $validated['adresse'],
        //     'niveau_etude' => $validated['niveau_etude'],
        //     'profession' => $validated['profession'],
            
        //     // Choix de formation
        //     'specialite' => $validated['specialite'],
        //     'programme' => $validated['programme'],
        //     'session' => $validated['session'],
        //     'format' => $validated['format'],
        //     'motivation' => $validated['motivation'],
        //     'attentes' => $validated['attentes'],
            
        //     // Documents
        //     'cv_path' => $cvPath,
        //     'lettre_motivation_path' => $lettrePath,
        //     'diplome_path' => $diplomePath,
        //     'piece_identite_path' => $pieceIdentitePath,
        //     'autres_documents_paths' => $autresDocumentsPaths,
            
        //     // Finalisation
        //     'date_debut' => $validated['date_debut'],
        //     'horaires' => $validated['horaires'],
        //     'stage_dispo' => $request->has('stage_dispo'),
        //     'stage_debut' => $validated['stage_debut'],
        //     'stage_duree' => $validated['stage_duree'],
        //     'commentaires' => $validated['commentaires'],
            
        //     // Consentements
        //     'consent_data' => $request->has('consent_data'),
        //     'consent_conditions' => $request->has('consent_conditions'),
        //     'consent_newsletter' => $request->has('consent_newsletter'),
            
        //     // Statut par défaut
        //     'statut' => 'en_attente',
        // ]);

        try {
            \Log::info('Tentative d\'envoi d\'email à training@sconnectplus.cd', ['data' => $validated]);
            \Log::info('Fichiers préparés pour email: ', array_keys($fileData));
            if (isset($fileData['autres_documents'])) {
                \Log::info('Nombre de autres_documents: ' . count($fileData['autres_documents']));
            }
            
            Mail::to('training@sconnectplus.cd')
                ->send(new AcademyRegistrationMail($request->all(), $fileData));
            
            \Log::info('Email envoyé avec succès');
            
            return redirect()->route('sconnect-academy.confirmation')
                ->with('success', 'Candidature envoyée avec succès!');
                
        } catch (\Exception $e) {
            \Log::error('Erreur d\'envoi d\'email: ' . $e->getMessage(), ['exception' => $e]);
            
            return redirect()->back()
                ->with('error', 'Erreur: '.$e->getMessage())
                ->withInput();
        }
    }

    /**
     * Affiche la page de confirmation après soumission du formulaire.
     *
     * @return \Illuminate\View\View
     */
    public function confirmation()
    {
        return view('sconnect-academy-confirmation');
    }
}
