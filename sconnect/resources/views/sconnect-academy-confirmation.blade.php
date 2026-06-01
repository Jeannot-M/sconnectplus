@extends('pages.layout')

@section('title', 'Candidature soumise - Sconnect Academy')

@section('styles')
<style>
    .confirmation-section {
        padding: 80px 0;
        background-color: #f8f9fa;
        min-height: 60vh;
        display: flex;
        align-items: center;
    }
    
    .confirmation-container {
        max-width: 800px;
        margin: 0 auto;
        padding: 40px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        text-align: center;
    }
    
    .confirmation-icon {
        width: 80px;
        height: 80px;
        background-color: #00AAE4;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 30px;
    }
    
    .confirmation-icon svg {
        width: 40px;
        height: 40px;
        fill: #fff;
    }
    
    .confirmation-title {
        color: #00AAE4;
        font-size: 28px;
        margin-bottom: 20px;
    }
    
    .confirmation-message {
        font-size: 18px;
        color: #555;
        margin-bottom: 30px;
        line-height: 1.6;
    }
    
    .next-steps {
        background-color: #f0f9ff;
        border-radius: 8px;
        padding: 20px;
        margin-bottom: 30px;
    }
    
    .next-steps h3 {
        color: #00AAE4;
        margin-bottom: 15px;
        font-size: 20px;
    }
    
    .next-steps ul {
        text-align: left;
        padding-left: 20px;
    }
    
    .next-steps li {
        margin-bottom: 10px;
    }
    
    .action-buttons {
        margin-top: 30px;
    }
    
    .btn-primary {
        background-color: #00AAE4;
        border-color: #00AAE4;
        padding: 10px 25px;
        font-weight: 600;
        margin: 0 10px;
    }
    
    .btn-outline {
        background-color: transparent;
        border: 2px solid #00AAE4;
        color: #00AAE4;
        padding: 10px 25px;
        font-weight: 600;
        margin: 0 10px;
    }
    
    @media (max-width: 768px) {
        .confirmation-section {
            padding: 40px 20px;
        }
        
        .confirmation-container {
            padding: 30px 20px;
        }
        
        .action-buttons .btn {
            display: block;
            width: 100%;
            margin: 10px 0;
        }
    }
</style>
@endsection

@section('pages')
    <section class="confirmation-section">
        <div class="confirmation-container">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            
            <div class="confirmation-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
                </svg>
            </div>
            
            <h1 class="confirmation-title">Candidature soumise avec succès !</h1>
            
            <div class="confirmation-message">
                @if(session('success'))
                    {{ session('success') }}
                @else
                    Nous avons bien reçu votre candidature pour la Sconnect Academy. Notre équipe pédagogique va l'examiner et vous contactera prochainement.
                @endif
            </div>
            
            <div class="next-steps">
                <h3>Prochaines étapes</h3>
                <ul>
                    <li>Vous recevrez un email de confirmation à l'adresse fournie</li>
                    <li>Notre équipe examinera votre dossier dans un délai de 5 à 7 jours ouvrables</li>
                    <li>Vous serez contacté(e) pour un entretien si votre profil correspond à nos critères</li>
                    <li>La décision finale vous sera communiquée par email</li>
                </ul>
            </div>
            
            <p>Si vous avez des questions, n'hésitez pas à nous contacter à <strong>training@sconnectplus.cd</strong></p>
            
            <div class="action-buttons">
                <a href="{{ route('sconnect-academy') }}" class="btn btn-outline">Retour à Sconnect Academy</a>
                <a href="/" class="btn btn-primary">Accueil</a>
            </div>
        </div>
    </section>
@endsection
