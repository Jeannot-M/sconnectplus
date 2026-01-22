<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intervention extends Model
{
    use HasFactory;

    /**
     * La table associée au modèle.
     *
     * @var string
     */
    protected $table = 'interventions';

    /**
     * Les attributs qui sont assignables en masse.
     *
     * @var array
     */
    protected $fillable = [
        'nom',
        'email',
        'telephone',
        'profession',
        'entreprise',
        'site_web',
        'secteur_activite',
        'experience',
        'bio',
        'photo_path',
        'titre_intervention',
        'thematiques',
        'description_intervention',
        'format_prefere',
        'disponibilite',
        'realisations',
        'defis',
        'impact',
        'interventions_precedentes',
        'supports',
        'precisions_supports',
        'materiel_supplementaire_path',
        'statut',
        'commentaire_admin',
        'droit_image',
        'newsletter',
    ];

    /**
     * Les attributs qui doivent être convertis en types natifs.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
