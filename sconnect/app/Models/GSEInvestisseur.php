<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GSEInvestisseur extends Model
{
    use HasFactory;
    
    /**
     * Nom de la table associée au modèle.
     *
     * @var string
     */
    protected $table = 'gse_investisseurs';
    
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
        'fonction',
        'pays',
        'ville',
        'secteurs_interet',
        'montant_investissement',
        'type_participation',
        'attentes',
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
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
