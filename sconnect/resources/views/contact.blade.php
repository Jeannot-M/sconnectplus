@extends('pages.layout')

@section('title', 'Contact - Sconnect Plus')
@section('meta_description', 'Contactez Sconnect Plus pour toute question concernant nos services de télécommunication. Notre équipe est à votre disposition.')

@section('pages')
<div class="contact-page">
    <div class="contact-container">
        <div class="contact-header">
            <h1>Contact</h1>
            <p class="subtitle">Nous sommes à votre écoute</p>
        </div>

        <div class="contact-content">
            <div class="contact-form-container">
                <form id="contactForm" action="{{ route('contact.submit') }}" method="POST" class="contact-form">
                    @csrf
                    
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="name">Nom complet</label>
                        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Adresse email</label>
                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" class="form-control @error('message') is-invalid @enderror" rows="5" required>{{ old('message') }}</textarea>
                        @error('message')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn-submit">Envoyer le message</button>
                </form>
            </div>

            <div class="contact-info">
                <div class="info-card">
                    <div class="info-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div class="info-content">
                        <h3>Email</h3>
                        <p><a href="mailto:contact@sconnectplus.cd">contact@sconnectplus.cd</a></p>
                    </div>
                </div>

                <div class="info-card">
                    <div class="info-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"></path>
                        </svg>
                    </div>
                    <div class="info-content">
                        <h3>Téléphone</h3>
                        <p><a href="tel:+243821887423">+243 821 887 423</a></p>
                    </div>
                </div>

                <div class="info-card">
                    <div class="info-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </div>
                    <div class="info-content">
                        <h3>Adresse</h3>
                        <p>Kinshasa, République Démocratique du Congo</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .contact-page {
        padding: 60px 20px;
        background-color: #f8f9fa;
    }

    .contact-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .contact-header {
        text-align: center;
        margin-bottom: 50px;
    }

    .contact-header h1 {
        font-size: 2.5rem;
        color: #333;
        margin-bottom: 10px;
    }

    .subtitle {
        font-size: 1.2rem;
        color: #666;
    }

    .contact-content {
        display: flex;
        flex-wrap: wrap;
        gap: 40px;
    }

    .contact-form-container {
        flex: 1 1 500px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        padding: 30px;
    }

    .contact-info {
        flex: 1 1 300px;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 500;
        color: #333;
    }

    .form-control {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 16px;
        transition: border-color 0.3s;
    }

    .form-control:focus {
        border-color: #00AAE4;
        outline: none;
        box-shadow: 0 0 0 3px rgba(0, 170, 228, 0.1);
    }

    .is-invalid {
        border-color: #dc3545;
    }

    .invalid-feedback {
        color: #dc3545;
        font-size: 14px;
        margin-top: 5px;
    }

    .btn-submit {
        background-color: #00AAE4;
        color: white;
        border: none;
        padding: 12px 25px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
        width: 100%;
        font-weight: 600;
    }

    .btn-submit:hover {
        background-color: #0088c7;
    }

    .alert {
        padding: 15px;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    .info-card {
        background: white;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        padding: 20px;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .info-icon {
        width: 50px;
        height: 50px;
        background-color: rgba(0, 170, 228, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .info-icon svg {
        width: 24px;
        height: 24px;
        stroke: #00AAE4;
    }

    .info-content h3 {
        margin: 0 0 5px 0;
        font-size: 18px;
        color: #333;
    }

    .info-content p {
        margin: 0;
        color: #666;
    }

    .info-content a {
        color: #00AAE4;
        text-decoration: none;
        transition: color 0.3s;
    }

    .info-content a:hover {
        color: #0088c7;
        text-decoration: underline;
    }

    @media (max-width: 768px) {
        .contact-content {
            flex-direction: column;
        }
        
        .contact-header h1 {
            font-size: 2rem;
        }
    }
</style>
@endsection
