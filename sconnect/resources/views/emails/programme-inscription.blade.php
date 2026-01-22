@component('mail::message')
# Nouvelle inscription au programme

@php
    $fields = [
        // Informations personnelles
        'Nom complet' => $data['nom'] ?? 'Non renseigné',
        'Email' => $data['email'] ?? 'Non renseigné',
        'Téléphone' => $data['telephone'] ?? 'Non renseigné',
        'Date de naissance' => $data['date_naissance'] ?? 'Non renseigné',
        'Adresse' => $data['adresse'] ?? 'Non renseigné',
        
        // Formation
        'Niveau d\'études' => $data['niveau_etudes'] ?? 'Non renseigné',
        'Domaine d\'études' => $data['domaine_etudes'] ?? 'Non renseigné',
        
        // Expérience
        'Expérience professionnelle' => $data['experience'] ?? 'Non renseigné',
        
        // Motivation
        'Motivation' => $data['motivation'] ?? 'Non renseigné'
    ];
@endphp

<h3>Détails de l'inscription</h3>
<table style="width:100%; border-collapse: collapse; margin-bottom:20px;">
    @foreach($fields as $label => $value)
    <tr style="border-bottom:1px solid #eee;">
        <td style="padding:10px; font-weight:bold; width:30%; vertical-align:top;">{{ $label }}</td>
        <td style="padding:10px;">{{ $value }}</td>
    </tr>
    @endforeach
</table>


Merci,
{{ config('app.name') }}
@endcomponent
