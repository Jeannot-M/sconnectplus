@extends('pages.layout')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/programme-formulaires.css') }}">
<link rel="stylesheet" href="{{ asset('css/gse-formulaires.css') }}">
<style>
    .confirmation-container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 70vh;
        padding: 2rem;
    }
    
    .confirmation-card {
        background: white;
        border-radius: 8px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        padding: 3rem;
        max-width: 800px;
        width: 100%;
        text-align: center;
    }
    
    .icon-container {
        margin-bottom: 2rem;
    }
    
    .confirmation-message {
        font-size: 1.2rem;
        color: #555;
        margin-bottom: 2rem;
    }
    
    .next-steps {
        background-color: #f8f9fa;
        border-radius: 6px;
        padding: 1.5rem;
        margin: 2rem 0;
        text-align: left;
    }
    
    .next-steps h2 {
        color: #00AAE4;
        font-size: 1.3rem;
        margin-bottom: 1rem;
    }
    
    .next-steps ul {
        padding-left: 1.5rem;
    }
    
    .next-steps li {
        margin-bottom: 0.5rem;
    }
    
    .confirmation-buttons {
        display: flex;
        justify-content: center;
        gap: 1rem;
        margin-top: 2rem;
    }
    
    .btn-primary {
        background-color: #00AAE4;
        color: white;
        padding: 0.8rem 1.5rem;
        border-radius: 4px;
        text-decoration: none;
        font-weight: bold;
        transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
        background-color: #0088c7;
        transform: translateY(-2px);
    }
    
    .btn-secondary {
        background-color: #f8f9fa;
        color: #495057;
        border: 1px solid #ddd;
        padding: 0.8rem 1.5rem;
        border-radius: 4px;
        text-decoration: none;
        font-weight: bold;
        transition: all 0.3s ease;
    }
    
    .btn-secondary:hover {
        background-color: #e9ecef;
        transform: translateY(-2px);
    }
    
    @media (max-width: 768px) {
        .confirmation-card {
            padding: 2rem;
        }
        
        .confirmation-buttons {
            flex-direction: column;
            gap: 0.8rem;
        }
    }
</style>
@endsection

@section('scripts')
<script>
    // Script pour fermer les notifications flash avec animation
    document.addEventListener('DOMContentLoaded', function() {
        const closeButtons = document.querySelectorAll('.close-notification');
        closeButtons.forEach(button => {
            button.addEventListener('click', function() {
                const notification = this.closest('.flash-notification');
                notification.classList.add('fade-out');
                setTimeout(() => {
                    notification.style.display = 'none';
                }, 300);
            });
        });
    });
</script>
@endsection

@section('pages')
<!-- Notifications flash -->
@if(session('success'))
<div class="flash-notification success">
    <div class="notification-content">
        <i class="fas fa-check-circle"></i>
        <p>{{ session('success') }}</p>
    </div>
    <button class="close-notification">
        <i class="fas fa-times"></i>
    </button>
</div>
@endif
<div class="confirmation-container">
    <div class="confirmation-card">
        <div class="icon-container">
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#00AAE4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                <polyline points="22 4 12 14.01 9 11.01"></polyline>
            </svg>
        </div>
        
        <h1>Merci pour votre inscription au GSE 2025 !</h1>
        
        @if(session('success'))
            <p class="confirmation-message">{{ session('success') }}</p>
        @else
            <p class="confirmation-message">Votre formulaire d'inscription au Grand Salon Entrepreneurial 2025 a été soumis avec succès. Nous vous contacterons prochainement avec les détails de votre participation.</p>
        @endif
        
        <div class="next-steps">
            <h2>Prochaines étapes</h2>
            <ul>
                <li>Votre inscription a été enregistrée dans notre système</li>
                <li>Vous recevrez un email de confirmation avec votre numéro d'inscription</li>
                <li>Notre équipe examinera votre dossier sous 7 jours ouvrables</li>
                <li>Un badge électronique vous sera envoyé 2 semaines avant l'événement</li>
                <li>Préparez-vous pour le Grand Salon Entrepreneurial 2025 qui se tiendra du 21 au 22 Novembre 2025</li>
            </ul>
        </div>
        
        <div class="confirmation-buttons">
            <a href="{{ route('grand-salon-entrepreneurial') }}" class="btn-primary">Retour au GSE 2025</a>
            <a href="{{ url('/') }}" class="btn-secondary">Accueil</a>
        </div>
    </div>
</div>
@endsection

<!-- Styles déplacés dans la section styles -->

<!-- Script pour les notifications déplacé dans la section scripts -->
