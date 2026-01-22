@php
    // Safely access all form fields with fallbacks
    $fields = [
        'Nom complet' => $data['nom'] ?? 'Non spécifié',
        'Organisation' => $data['organisation'] ?? 'Non spécifié',
        'Email' => $data['email'] ?? 'Non spécifié',
        'Téléphone' => $data['telephone'] ?? 'Non spécifié',
        'Secteurs d\'intérêt' => implode(', ', $data['secteurs'] ?? ['Non spécifié']),
        'Autre secteur' => $data['autre_secteur'] ?? 'Non applicable',
        'Contact porteurs' => $data['contact_porteurs'] ?? 'Non spécifié',
        'Intervention' => $data['intervention'] ?? 'Non spécifié',
        'Pièce d\'identité' => isset($fileData['piece_identite']) ? 'Jointe' : 'Manquante'
    ];
@endphp

<h3>Nouvelle inscription Investisseur GSE</h3>
<table style="width:100%; border-collapse: collapse;">
    @foreach($fields as $label => $value)
    <tr style="border-bottom: 1px solid #ddd;">
        <td style="padding: 8px; font-weight: bold; width: 30%;">{{ $label }}</td>
        <td style="padding: 8px;">{{ $value }}</td>
    </tr>
    @endforeach
</table>
