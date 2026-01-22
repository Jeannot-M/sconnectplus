@php
    // Safely access all form fields with fallbacks
    $fields = [
        // Personal Information
        'Nom complet' => ($data['first_name'] ?? '') . ' ' . ($data['last_name'] ?? '') ?: 'Non spécifié',
        'Date de naissance' => $data['birthdate'] ?? 'Non spécifié',
        'Sexe' => $data['gender'] ?? 'Non spécifié',
        'Téléphone' => $data['phone'] ?? 'Non spécifié',
        'WhatsApp' => $data['whatsapp'] ?? 'Non spécifié',
        'Email' => $data['email'] ?? 'Non spécifié',
        
        // Education
        'Niveau d\'études' => $data['education_level'] ?? 'Non spécifié',
        'Autre niveau' => $data['other_education'] ?? 'Non applicable',
        
        // Job Information
        'Poste visé' => $data['job_title'] ?? 'Non spécifié',
        'Type de contrat' => $data['contract_type'] ?? 'Non spécifié',
        'Disponibilité' => $data['availability'] ?? 'Non spécifié',
        
        // Documents
        'CV' => isset($fileData['cv']) ? 'Joint' : 'Non joint',
        'Lettre de motivation' => isset($fileData['motivation_letter']) ? 'Jointe' : 'Non jointe',
        'Pièce d\'identité' => isset($fileData['id_card']) ? 'Jointe' : 'Non jointe'
    ];
@endphp

<h3>Nouvelle candidature SConnect Carrière</h3>
<table style="width:100%; border-collapse: collapse;">
    @foreach($fields as $label => $value)
    <tr style="border-bottom: 1px solid #ddd;">
        <td style="padding: 8px; font-weight: bold; width: 30%;">{{ $label }}</td>
        <td style="padding: 8px;">{{ $value }}</td>
    </tr>
    @endforeach
</table>
