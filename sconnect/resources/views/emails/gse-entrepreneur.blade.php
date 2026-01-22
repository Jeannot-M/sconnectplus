@php
    // Safely access all form fields with fallbacks
    $fields = [
        'Nom complet' => $data['nom'] ?? 'Non spécifié',
        'Entreprise/Projet' => $data['entreprise'] ?? 'Non spécifié',
        'Secteur d\'activité' => $data['secteur'] ?? 'Non spécifié',
        'Fonction' => $data['fonction'] ?? 'Non spécifié',
        'Email' => $data['email'] ?? 'Non spécifié',
        'Téléphone' => $data['telephone'] ?? 'Non spécifié',
        'Ville' => $data['ville'] ?? 'Non spécifié',
        'Participation' => implode(', ', $data['participation'] ?? ['Non spécifié']),
        'Autre participation' => $data['autre_participation'] ?? 'Non applicable',
        'Besoin stand' => $data['besoin_stand'] ?? 'Non spécifié',
        'Visibilité supplémentaire' => $data['visibilite'] ?? 'Non spécifié',
        'Produits à vendre' => $data['produits_vente'] ?? 'Aucun',
        'Marque déposée' => $data['marque'] ?? 'Non spécifié',
        'Nom marque' => $data['nom_marque'] ?? 'Non applicable',
        'Description' => $data['description'] ?? 'Non spécifié',
        'Réseaux sociaux' => $data['reseaux_sociaux'] ?? 'Aucun',
        'Source d\'information' => $data['source'] ?? 'Non spécifié',
        'Pièce d\'identité' => isset($fileData['piece_identite']) ? 'Jointe' : 'Manquante'
    ];
@endphp

<h3>Nouvelle inscription Entrepreneur GSE</h3>
<table style="width:100%; border-collapse: collapse;">
    @foreach($fields as $label => $value)
    <tr style="border-bottom: 1px solid #ddd;">
        <td style="padding: 8px; font-weight: bold; width: 30%;">{{ $label }}</td>
        <td style="padding: 8px;">{{ $value }}</td>
    </tr>
    @endforeach
</table>
