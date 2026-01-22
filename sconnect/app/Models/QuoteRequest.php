<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuoteRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'company',
        'email',
        'phone',
        'service',
        'details',
        'attachment_path',
        'contact_method',
        'status'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getServiceLabelAttribute()
    {
        $services = [
            'solutions_informatiques' => 'Solutions informatiques',
            'telephonie_ip_reseaux' => 'Téléphonie IP & réseaux',
            'applications_logiciels' => 'Applications & logiciels sur mesure',
            'formation_tic_entrepreneuriat' => 'Formation TIC / entrepreneuriat',
            'securisation_donnees' => 'Sécurisation des données'
        ];

        return $services[$this->service] ?? $this->service;
    }

    public function getContactMethodLabelAttribute()
    {
        $methods = [
            'email' => 'Email',
            'telephone' => 'Téléphone',
            'whatsapp' => 'WhatsApp'
        ];

        return $methods[$this->contact_method] ?? $this->contact_method;
    }
}
