<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GSEEntrepreneur extends Model
{
    use HasFactory;
    
    /**
     * Nom de la table associée au modèle.
     *
     * @var string
     */
    protected $table = 'gse_entrepreneurs';
    
    /**
     * Les attributs qui sont assignables en masse.
     *
     * @var array
     */
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone',
        'entreprise',
        'poste',
        'pays',
        'ville',
        'site_web',
        'secteur_activite',
        'stade_projet',
        'description_projet',
        'besoin_financement',
        'montant_recherche',
        'objectifs_participation',
        'piece_identite',
        'accepte_conditions',
    ];
    
    /**
     * Les attributs qui doivent être convertis en types natifs.
     *
     * @var array
     */
    protected $casts = [
        'accepte_conditions' => 'boolean',
        'besoin_financement' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
