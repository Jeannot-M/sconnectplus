@component('mail::message')
# Nouvelle inscription Sconnect Academy

@component('mail::panel')
## Informations personnelles
**Nom:** {{ $data['nom'] ?? 'Non renseigné' }}
**Email:** {{ $data['email'] ?? 'Non renseigné' }}
**Téléphone:** {{ $data['telephone'] ?? 'Non renseigné' }}

## Formation
**Niveau d'études:** {{ $data['niveau_etudes'] ?? 'Non renseigné' }}
**Domaine d'intérêt:** {{ $data['domaine_interet'] ?? 'Non renseigné' }}

## Motivation
{{ $data['motivation'] ?? 'Non renseigné' }}
@endcomponent

@component('mail::button', ['url' => url('/admin/academy')])
Voir dans l'admin
@endcomponent

Merci,
{{ config('app.name') }}
@endcomponent
