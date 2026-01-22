<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;

    /**
     * La table associée au modèle.
     *
     * @var string
     */
    protected $table = 'inscriptions';

    /**
     * Les attributs qui sont assignables en masse.
     *
     * @var array
     */
    protected $fillable = [
        'nom',
        'email',
        'telephone',
        'date_naissance',
        'genre',
        'adresse',
        'niveau_etudes',
        'domaine_etudes',
        'situation_actuelle',
        'competences',
        'nom_projet',
        'secteur_activite',
        'stade_projet',
        'projet_description',
        'besoins',
        'motivation',
        'attentes',
        'source',
        'cv_path',
        'business_plan_path',
        'statut',
        'commentaire_admin',
        'newsletter',
    ];

    /**
     * Les attributs qui doivent être convertis en types natifs.
     *
     * @var array
     */
    protected $casts = [
        'date_naissance' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
