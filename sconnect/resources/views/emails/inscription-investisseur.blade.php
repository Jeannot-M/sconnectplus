@component('mail::message')
# Nouvelle inscription investisseur

@php
    $nomComplet = $data['nom_complet'] ?? 'Non spécifié';
    $email = $data['email'] ?? 'Non spécifié';
    $telephone = $data['telephone'] ?? 'Non spécifié';
    $pays = $data['pays'] ?? 'Non spécifié';
    $secteurActivite = $data['secteur_activite'] ?? 'Non spécifié';
    $montantInvestissement = $data['montant_investissement'] ?? 'Non spécifié';
    $message = $data['message'] ?? 'Aucun message';
@endphp

**Nom complet:** {{ $nomComplet }}
**Email:** {{ $email }}
**Téléphone:** {{ $telephone }}
**Pays:** {{ $pays }}
**Secteur d'activité:** {{ $secteurActivite }}
**Montant d'investissement:** {{ $montantInvestissement }}
**Message:** {{ $message }}



Merci,<br>
{{ config('app.name') }}
@endcomponent
