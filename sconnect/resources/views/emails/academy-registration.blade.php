@php
    // Liste complète de tous les champs du formulaire
    $fields = [
        // Personal Information
        'Civilité' => $data['civilite'] ?? 'Non spécifié',
        'Nom' => $data['nom'] ?? 'Non spécifié',
        'Prénom' => $data['prenom'] ?? 'Non spécifié',
        'Email' => $data['email'] ?? 'Non spécifié',
        'Téléphone' => $data['telephone'] ?? 'Non spécifié',
        'Date de naissance' => $data['date_naissance'] ?? 'Non spécifié',
        'Lieu de naissance' => $data['lieu_naissance'] ?? 'Non spécifié',
        'Nationalité' => $data['nationalite'] ?? 'Non spécifié',
        'Adresse' => $data['adresse'] ?? 'Non spécifié',
        'Niveau d\'études' => $data['niveau_etude'] ?? 'Non spécifié',
        'Profession' => $data['profession'] ?? 'Non spécifié',
        
        // Training Information
        'Spécialité' => $data['specialite'] ?? 'Non spécifié',
        'Session' => $data['session'] ?? 'Non spécifié',
        'Format' => $data['format'] ?? 'Non spécifié',
        'Motivation' => $data['motivation'] ?? 'Non spécifié',
        'Attentes' => $data['attentes'] ?? 'Non spécifié',
        
        // Documents
        'CV' => isset($fileData['cv']) ? 'Joint' : 'Non joint',
        'Lettre de motivation' => isset($fileData['lettre_motivation']) ? 'Jointe' : 'Non jointe',
        'Diplôme' => isset($fileData['diplome']) ? 'Joint' : 'Non joint'
    ];
@endphp

<h3>Nouvelle inscription SConnect Academy</h3>
<table style="width:100%; border-collapse: collapse;">
    @foreach($fields as $label => $value)
    <tr style="border-bottom: 1px solid #ddd;">
        <td style="padding: 8px; font-weight: bold; width: 30%;">{{ $label }}</td>
        <td style="padding: 8px;">{{ $value }}</td>
    </tr>
    @endforeach
</table>
