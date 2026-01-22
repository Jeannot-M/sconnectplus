@extends('pages.layout')

@section('pages')
<div class="_container">
    <div class="titre_haut">
         <h4>Accessibilité Sconnect Plus</h4>
         <p></p>
    </div>
</div>

   <div class="__content_body">
    
    <div class="_container">
        
    <div style="text-align: center;" class="mbottom">
        Améliorer l’accessibilité de nos services <br>
        Voici nos solutions pour rendre accessibles nos services au plus grand nombre.
    </div>
    
   <h4 class="mpy"> TÉLÉPHONIE ACCESSIBLE - HANDICAP AUDITIF</h4>

    <p>Nous faisons Confiance à nos partenaires Experts en Télécommunications. 
        Passez vos appels traduits en direct par un intermédiaire de manière adaptée à vos besoins :</p>

   <ul class="mpy inside">
        <li>Langue des Signes Française</li>
        <li>Langue française Parlée Complétée</li>
        <li>Transcription Instantanée de la Parole</li>
   </ul>

    <div class="mbottom mpy">
        Un crédit d’une heure de communication, renouvelé chaque mois, est offert par Sconnect Plus.
        Du Lundi au Vendredi de 6h00 à 00h <br>
        Accéder au service <br>   <a href="{{ route("register") }}">en créant votre compte</a>
    </div>
     <h4 class="mpy">RELATION CLIENT ADAPTÉE - HANDICAP AUDITIF</h4>
    Echangez avec un conseiller de clientèle Sconnect Plus via un relais dédié en utilisant les moyens de communication de votre choix:
    <ul class="mpy inside">
        <li>Langue des Signes Française</li>
        <li>Langue française Parlée Complétée</li>
        <li>Transcription Instantanée de la Parole</li>
    </ul>
    <div class="mpy">Du Lundi au Vendredi de 9h à 12h30 et de 13h30 à 17h30</div>
     
    <h4 class="mpy">ACCESSIBILITÉ SITE INTERNET - HANDICAP VISUEL ET COGNITIF</h4>
    <div class="mbottom">Adaptez l’affichage du site internet de Sconnect Plus en fonction de vos besoins de visualisation :</div>
    <ul class="inside mpy">
        <li>Dyslexie</li>
        <li>Daltonisme</li>
        <li>Malvoyance</li>
        <li>Parkinson</li>
    </ul>
   <div class="mbottom"> Accéder au service      <a href="{{ route("register") }}">en créant  votre compte</a></div>
     
     
     
    <h4 class="mpy">SUPPORTS D’INFORMATION ET APPLICATIONS - HANDICAP VISUEL</h4>
    International HandiCaPZéro <br>
    Retrouvez en caractère agrandi ou en braille : <br>
    <ul class="inside mpy">
        <li>Les informations sur les offres de service Bouygues Telecom fixe ou mobile</li>
        <li>Les guides d’installation</li>
        <li>Demandez à recevoir votre facture mobile ou fixe en braille ou caractère agrandi</li>
    </ul>
   <p class="mpy">
    Faites installer gratuitement sur votre mobile compatible Mobile Speak et Mobile Magnifier, applications d’agrandissement et de lecture d’écran.
    Accéder au service <a href="{{ route("register") }}">en créant  votre compte</a>
   </p>
    Découvrir plus de solutions d’accessibilité <br>
    Trouver un mobile adapté<br><br>
    Pour vous aider à identifier les terminaux mobiles les mieux adaptés à vos besoins, <br> vous pouvez visiter la base GARI (Global Accessibility Reporting Initiative). <br><br>
    
    Nos solutions d’assistance vocale <br>
    Notre système de Messagerie Vocale Visuelle <br>
    Notre application Espace Client Mobile <br>
     
    <div class="mpy">
        <img src="{{ asset('images/access.jpg') }}" alt="">
    </div>
    
    <div style="text-align: center;">
        <a href="/"  class="btn_register mpy">Retour à l'accueil</a>
    </div>
    
    
    </div>
    
   </div>
@endsection