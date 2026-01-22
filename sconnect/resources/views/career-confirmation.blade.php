@extends('pages.layout')

@section('title', 'Confirmation de candidature - SConnect Plus')

@section('styles')
    <style>
        .confirmation-container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 2rem;
            text-align: center;
        }
        .confirmation-card {
            background: white;
            padding: 3rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .confirmation-icon {
            color: #28a745;
            font-size: 5rem;
            margin-bottom: 1.5rem;
        }
        .confirmation-details {
            margin: 2rem 0;
            padding: 1.5rem;
            background: #f8f9fa;
            border-radius: 8px;
        }
        .confirmation-actions {
            display: flex;
            gap: 1rem;
            justify-content: center;
            margin-top: 2rem;
        }
    </style>
@stop

@section('pages')
    <div class="confirmation-container">
        <div class="confirmation-card">
            <div class="confirmation-icon">
                <i class="fas fa-check-circle"></i>
            </div>
            <h1>Candidature envoyée avec succès!</h1>
            
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            
            <div class="confirmation-details">
                <p>Nous avons bien reçu votre candidature pour rejoindre SConnect Plus.</p>
               
            </div>
            
            <div class="confirmation-actions">
                <a href="/" class="btn btn-primary">
                    <i class="fas fa-home"></i> Retour à l'accueil
                </a>
                <a href="{{ route('carriere') }}" class="btn btn-secondary">
                    <i class="fas fa-briefcase"></i> Voir nos autres offres
                </a>
            </div>
        </div>
    </div>
@endsection
