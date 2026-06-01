<?php

namespace App\Http\Controllers;

use App\Mail\GseEntrepreneurMail;
use App\Mail\GseInvestisseurMail;
use App\Mail\InscriptionConfirmation;
use App\Mail\InterventionConfirmation;
use App\Mail\NouvelleInscription;
use App\Mail\NouvelleIntervention;
use App\Mail\InterventionEmissionMail;
use App\Models\Inscription;
use App\Models\Intervention;
use App\Mail\ProgrammeInscriptionMail;
use App\Models\GSEInvestisseur;
use App\Models\GSEEntrepreneur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ProgrammeController extends Controller
{
    /**
     * Affiche la page de confirmation après soumission d'un formulaire
     */
    public function confirmation()
    {
        return view('formulaires.confirmation');
    }
    
    /**
     * Affiche le formulaire d'inscription pour les investisseurs au GSE
     */
    public function showInvestisseurForm()
    {
        return view('formulaires.gse-inscription-investisseur');
    }
    
    /**
     * Traite la soumission du formulaire d'inscription des investisseurs au GSE
     */
    public function submitInvestisseurForm(Request $request)
    {
        // Validation des données
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'organisation' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'required|string|max:20',
            'secteurs' => 'required|array',
            'secteurs.*' => 'string|max:255',
            'autre_secteur' => 'nullable|string|max:255',
            'contact_porteurs' => 'required|string|in:Oui,Non',
            'intervention' => 'required|string|in:Oui,Non,À discuter',
            'piece_identite' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Prepare file data for email
        $fileData = [];
        
        if ($request->hasFile('piece_identite')) {
            $fileData['piece_identite'] = [
                'name' => $request->file('piece_identite')->getClientOriginalName(),
                'content' => $request->file('piece_identite')->get()
            ];
        }

        try {
            // Send all data to specified email
            Mail::to('grandsalonentrepreneurial@sconnectplus.cd')
                ->send(new GseInvestisseurMail(
                    $request->all(), 
                    $fileData
                ));

          
        } catch (\Exception $e) {
            \Log::error('Email sending failed: ' . $e->getMessage());
            return redirect()->route('programme.confirmation')
                ->with('error', 'Une erreur est survenue lors de l\'envoi de votre demande. Veuillez réessayer.');
        }

        return redirect()->route('programme.confirmation')
        ->with('success', 'Votre inscription en tant qu\'investisseur a été envoyée avec succès !');
        
    }
    
    /**
     * Affiche le formulaire d'inscription pour les entrepreneurs au GSE
     */
    public function showEntrepreneurForm()
    {
        return view('formulaires.gse-inscription-entrepreneur');
    }
    
    /**
     * Traite la soumission du formulaire d'inscription des entrepreneurs au GSE
     */
    public function submitEntrepreneurForm(Request $request)
    {
        // Validation des données
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'entreprise' => 'nullable|string|max:255',
            'secteur' => 'required|string|max:255',
            'fonction' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'required|string|max:20',
            'ville' => 'required|string|max:255',
            'participation' => 'required|array',
            'participation.*' => 'string|max:255',
            'autre_participation' => 'nullable|string|max:255',
            'besoin_stand' => 'required|string|in:Oui,Non,À discuter',
            'visibilite' => 'required|string|in:Oui,Non,À discuter',
            'produits_vente' => 'nullable|string|max:255',
            'marque' => 'required|string|in:Oui,Non',
            'nom_marque' => 'nullable|string|max:255',
            'description' => 'required|string|max:500',
            'reseaux_sociaux' => 'nullable|string|max:255',
            'source' => 'required|string|max:255',
            'piece_identite' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Prepare file data for email
        $fileData = [];
        
        if ($request->hasFile('piece_identite')) {
            $fileData['piece_identite'] = [
                'name' => $request->file('piece_identite')->getClientOriginalName(),
                'content' => $request->file('piece_identite')->get()
            ];
        }

        try {
            // Send all data to specified email
            Mail::to('grandsalonentrepreneurial@sconnectplus.cd')
                ->send(new GseEntrepreneurMail(
                    $request->all(), 
                    $fileData
                ));

            return redirect()->route('programme.confirmation')
                ->with('success', 'Votre inscription en tant qu\'entrepreneur a été envoyée avec succès !');
                
        } catch (\Exception $e) {
            \Log::error('Email sending failed: ' . $e->getMessage());
            return redirect()->route('programme.confirmation')
                ->with('error', 'Une erreur est survenue lors de l\'envoi de votre demande. Veuillez réessayer.');
        }
    }

    /**
     * Affiche la page principale du programme Jeune & Entrepreneur
     */
    public function index()
    {
        return view('programme-jeune-entrepreneur');
    }

    /**
     * Affiche le formulaire d'inscription au programme
     */
    public function showInscriptionForm()
    {
        return view('formulaires.inscription-programme');
    }

    /**
     * Traite la soumission du formulaire d'inscription
     */
    public function submitInscriptionForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // ... keep existing validation rules ...
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Prepare file data for email
        $fileData = [];
        
        if ($request->hasFile('cv')) {
            $fileData['cv'] = [
                'name' => $request->file('cv')->getClientOriginalName(),
                'content' => $request->file('cv')->get()
            ];
        }

        if ($request->hasFile('business_plan')) {
            $fileData['business_plan'] = [
                'name' => $request->file('business_plan')->getClientOriginalName(),
                'content' => $request->file('business_plan')->get()
            ];
        }

        try {
            // Send all data to specified email
            Mail::to('jeuneentrepreneur@sconnectplus.cd')
                ->send(new ProgrammeInscriptionMail(
                    $request->all(), 
                    $fileData
                ));

            // // Also send confirmation to applicant
            // Mail::to($request->email)
            //     ->send(new InscriptionConfirmation($request->all()));

            return redirect()->back()
                ->with('success', 'Votre inscription a été envoyée avec succès !');
                
        } catch (\Exception $e) {
            \Log::error('Email sending failed: ' . $e->getMessage());
            return redirect()->route('programme.confirmation')
                ->with('error', 'Une erreur est survenue lors de l\'envoi de votre demande. Veuillez réessayer.');
        }
    }

    /**
     * Affiche le formulaire d'intervention à l'émission
     */
    public function showInterventionForm()
    {
        return view('formulaires.intervention-emission');
    }

    /**
     * Traite la soumission du formulaire d'intervention
     */
    public function submitInterventionForm(Request $request)
    {
        // Validation des données
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'required|string|max:20',
            'profession' => 'required|string|max:255',
            'entreprise' => 'required|string|max:255',
            'site_web' => 'nullable|url|max:255',
            'secteur_activite' => 'required|string|max:255',
            'experience' => 'required|string|max:255',
            'bio' => 'required|string|max:1200',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'titre_intervention' => 'required|string|max:255',
            'thematiques' => 'required|string|max:255',
            'description_intervention' => 'required|string',
            'format_prefere' => 'required|string|max:255',
            'disponibilite' => 'required|string',
            'realisations' => 'required|string',
            'defis' => 'required|string',
            'impact' => 'required|string',
            'interventions_precedentes' => 'nullable|string',
            'supports' => 'required|string|max:255',
            'precisions_supports' => 'nullable|string',
            'materiel_supplementaire' => 'nullable|file|mimes:pdf,ppt,pptx|max:5120',
            'conditions' => 'required|accepted',
            'droit_image' => 'required|accepted',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Prepare file data for email
        $fileData = [];
        
        if ($request->hasFile('photo')) {
            $fileData['photo'] = [
                'name' => $request->file('photo')->getClientOriginalName(),
                'content' => $request->file('photo')->get()
            ];
        }

        if ($request->hasFile('materiel_supplementaire')) {
            $fileData['materiel'] = [
                'name' => $request->file('materiel_supplementaire')->getClientOriginalName(),
                'content' => $request->file('materiel_supplementaire')->get()
            ];
        }


        // try {
            // Send all data to specified email
            Mail::to('jeuneetentrepreneur@sconnectplus.cd')
                ->send(new InterventionEmissionMail(
                    $request->all(), 
                    $fileData
                ));

            return redirect()->back()
                ->with('success', 'Votre proposition d\'intervention a été envoyée avec succès !');
                
        // } catch (\Exception $e) {
        //     \Log::error('Email sending failed: ' . $e->getMessage());
        //     return redirect()->back()
        //         ->with('error', 'Une erreur est survenue lors de l\'envoi de votre demande. Veuillez réessayer.');
        // }
    }
}
