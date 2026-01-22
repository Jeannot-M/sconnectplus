@php
    $fields = [
        // Informations personnelles
        'Nom complet' => ($data['nom'] ?? '') . ' ' . ($data['prenom'] ?? ''),
        'Email' => $data['email'] ?? 'Non renseigné',
        'Téléphone' => $data['telephone'] ?? 'Non renseigné',
        'Fonction' => $data['fonction'] ?? 'Non renseigné',
        'Entreprise' => $data['entreprise'] ?? 'Non renseigné',
        
        // Intervention
        'Sujet proposé' => $data['sujet'] ?? 'Non renseigné',
        'Format' => $data['format'] ?? 'Non renseigné',
        'Durée' => ($data['duree'] ?? '') . ' minutes',
        
        // Disponibilités
        'Disponibilités' => $data['disponibilite'] ?? 'Non renseigné'
    ];
@endphp


# Nouvelle demande d'intervention

<table style="width:100%; border-collapse:collapse; margin-bottom:20px;">
    @foreach($fields as $label => $value)
    <tr style="border-bottom:1px solid #eee;">
        <td style="padding:10px; font-weight:bold; width:30%;">{{ $label }}</td>
        <td style="padding:10px;">{{ $value }}</td>
    </tr>
    @endforeach
</table>



Merci,<br>
{{ config('app.name') }}

