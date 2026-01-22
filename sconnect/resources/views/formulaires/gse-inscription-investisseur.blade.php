<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Inscription Investisseur - Grand Salon Entrepreneurial 2025 - Sconnect Plus">
    <title>Inscription Investisseur - Grand Salon Entrepreneurial 2025</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modern-header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/minimal-footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/grand-salon-entrepreneurial.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gse-formulaires.css') }}">
    <style>
        /* Correction du z-index pour le header */
        .modern-header {
            position: sticky;
            top: 0;
            z-index: 1000;
            background-color: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        /* Assurer que le contenu du formulaire reste en dessous du header */
        .gse-form-container {
            position: relative;
            z-index: 1;
        }
    </style>
</head>
<body>
    @include('includes._header')
    
    <div class="container my-5">
        
        <div class="gse-form-container">
            <div class="quote-header-image" style="background-image: url('{{ asset('images/slides/slides_acceuil/salon/GRAND-SALON-ENTREPRENEURIAL_02.jpg') }}'); background-size: cover; background-position: center; height: 400px; border-radius: 0px; margin-bottom: 30px; "></div>
            <div class="gse-form-header">
                <h1>INSCRIPTION POUR INVESTISSEURS/INVESTISSEUSES</h1>
                <h2>Grand Salon Entrepreneurial 2025</h2>
                <p>Espace Silikin Village | Kinshasa-Gombe</p>
                <p>21 – 22 Novembre 2025</p>
                <div class="mt-4">
                    <p>Vous êtes investisseur ou investisseuse, vous êtes prêt(e) à découvrir, soutenir ou 
                    collaborer avec des projets et startups au Grand Salon Entrepreneurial ? Merci de bien 
                    vouloir vous inscrire.</p>
                </div>
            </div>
            
            @if ($errors->any())
                <div class="form-error">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form action="{{ route('gse-inscription-investisseur.submit') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="gse-form-section">
                    <h3>Informations de base de l'investisseur</h3>
                    
                    <div class="form-group">
                        <label for="nom">1. Nom complet :</label>
                        <input type="text" id="nom" name="nom" value="{{ old('nom') }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="organisation">2. Organisation / Entreprise (si applicable) :</label>
                        <input type="text" id="organisation" name="organisation" value="{{ old('organisation') }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="email">3. Adresse e-mail :</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="telephone">4. Téléphone (WhatsApp si possible) :</label>
                        <input type="tel" id="telephone" name="telephone" value="{{ old('telephone') }}" required>
                    </div>
                </div>
                
                <div class="gse-form-section">
                    <h3>Intérêts d'investissement</h3>
                    
                    <div class="form-group">
                        <label>5. Secteurs d'intérêt (cochez) :</label>
                        <div class="checkbox-group">
                            <label>
                                <input type="checkbox" name="secteurs[]" value="Technologie" {{ is_array(old('secteurs')) && in_array('Technologie', old('secteurs')) ? 'checked' : '' }}>
                                Technologie
                            </label>
                            <label>
                                <input type="checkbox" name="secteurs[]" value="Agriculture" {{ is_array(old('secteurs')) && in_array('Agriculture', old('secteurs')) ? 'checked' : '' }}>
                                Agriculture
                            </label>
                            <label>
                                <input type="checkbox" name="secteurs[]" value="Santé" {{ is_array(old('secteurs')) && in_array('Santé', old('secteurs')) ? 'checked' : '' }}>
                                Santé
                            </label>
                            <label>
                                <input type="checkbox" name="secteurs[]" value="Fintech" {{ is_array(old('secteurs')) && in_array('Fintech', old('secteurs')) ? 'checked' : '' }}>
                                Fintech
                            </label>
                            <label>
                                <input type="checkbox" name="secteurs[]" value="Éducation" {{ is_array(old('secteurs')) && in_array('Éducation', old('secteurs')) ? 'checked' : '' }}>
                                Éducation
                            </label>
                        </div>
                        
                        <div class="form-group">
                            <label for="autre_secteur">Autres secteurs :</label>
                            <input type="text" id="autre_secteur" name="autre_secteur" value="{{ old('autre_secteur') }}">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>6. Souhaitez-vous être mis en contact avec des porteurs de projet ?</label>
                        <div class="radio-group">
                            <label>
                                <input type="radio" name="contact_porteurs" value="Oui" {{ old('contact_porteurs') == 'Oui' ? 'checked' : '' }} required>
                                Oui
                            </label>
                            <label>
                                <input type="radio" name="contact_porteurs" value="Non" {{ old('contact_porteurs') == 'Non' ? 'checked' : '' }}>
                                Non
                            </label>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>7. Souhaitez-vous intervenir lors d'une session ?</label>
                        <div class="radio-group">
                            <label>
                                <input type="radio" name="intervention" value="Oui" {{ old('intervention') == 'Oui' ? 'checked' : '' }} required>
                                Oui
                            </label>
                            <label>
                                <input type="radio" name="intervention" value="Non" {{ old('intervention') == 'Non' ? 'checked' : '' }}>
                                Non
                            </label>
                            <label>
                                <input type="radio" name="intervention" value="À discuter" {{ old('intervention') == 'À discuter' ? 'checked' : '' }}>
                                À discuter
                            </label>
                        </div>
                    </div>
                </div>
                
                <div class="gse-form-section">
                    <h3>Téléversement de la pièce d'identité</h3>
                    
                    <div class="file-upload">
                        <label for="piece_identite">Merci de bien vouloir joindre une copie claire du recto de votre carte d'identité (format JPG, PNG ou PDF) :</label>
                        <input type="file" id="piece_identite" name="piece_identite" accept=".jpg,.jpeg,.png,.pdf" required>
                        <span class="file-help">Taille maximale: 2 Mo</span>
                    </div>
                </div>
                
                <div class="form-actions">
                    <button type="submit" class="btn-submit">Soumettre mon inscription</button>
                </div>
                
              
            </form>
        </div>
    </div>
    
    @include('includes._footer')
    
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/mobile-menu-fix.js') }}"></script>

</body>
</html>
