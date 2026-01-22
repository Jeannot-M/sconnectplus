<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    /**
     * Les attributs qui sont assignables en masse.
     *
     * @var array
     */
    protected $fillable = [
        'civilite',
        'nom',
        'prenom',
        'email',
        'telephone',
        'date_naissance',
        'lieu_naissance',
        'nationalite',
        'adresse',
        'niveau_etude',
        'profession',
        'specialite',
        'programme',
        'session',
        'format',
        'motivation',
        'attentes',
        'cv_path',
        'lettre_motivation_path',
        'diplome_path',
        'piece_identite_path',
        'autres_documents_paths',
        'date_debut',
        'horaires',
        'stage_dispo',
        'stage_debut',
        'stage_duree',
        'commentaires',
        'consent_data',
        'consent_conditions',
        'consent_newsletter',
        'statut'
    ];

    /**
     * Les attributs qui doivent être convertis.
     *
     * @var array
     */
    protected $casts = [
        'date_naissance' => 'date',
        'date_debut' => 'date',
        'stage_debut' => 'date',
        'stage_dispo' => 'boolean',
        'consent_data' => 'boolean',
        'consent_conditions' => 'boolean',
        'consent_newsletter' => 'boolean',
        'autres_documents_paths' => 'array',
    ];
}
