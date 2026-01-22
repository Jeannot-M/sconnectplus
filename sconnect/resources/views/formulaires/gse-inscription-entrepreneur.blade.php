<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Inscription Entrepreneur - Grand Salon Entrepreneurial 2025 - Sconnect Plus">
    <title>Inscription Entrepreneur - Grand Salon Entrepreneurial 2025</title>
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
        <div class="quote-header-image" style="background-image: url('{{ asset('images/slides/slides_acceuil/carriere/IMG_6115.JPG') }}'); background-size: cover; background-position: center; height: 400px; border-radius: 0px; margin-bottom: 30px; "></div>
            <div class="gse-form-header">
                <h1>INSCRIPTION POUR ENTREPRENEURS/ENTREPRENEUSES</h1>
                <h2>Grand Salon Entrepreneurial 2025</h2>
                <p>Espace Silikin Village | Kinshasa-Gombe</p>
                <p>21 – 22 Novembre 2025</p>
                <div class="mt-4">
                    <p>Vous êtes entrepreneur ou entrepreneuse, vous souhaitez présenter votre projet ou startup au Grand Salon Entrepreneurial ? Merci de bien vouloir vous inscrire.</p>
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
            
            <form action="{{ route('gse-inscription-entrepreneur.submit') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="gse-form-section">
                    <h3>Informations personnelles</h3>
                    
                    <div class="form-group">
                        <label for="nom">1. Nom complet :</label>
                        <input type="text" id="nom" name="nom" value="{{ old('nom') }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="entreprise">2. Nom de l'entreprise / Projet :</label>
                        <input type="text" id="entreprise" name="entreprise" value="{{ old('entreprise') }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="secteur">3. Secteur d'activité :</label>
                        <input type="text" id="secteur" name="secteur" value="{{ old('secteur') }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="fonction">4. Fonction / Poste :</label>
                        <input type="text" id="fonction" name="fonction" value="{{ old('fonction') }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">5. Adresse e-mail :</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="telephone">6. Téléphone (WhatsApp si possible) :</label>
                        <input type="tel" id="telephone" name="telephone" value="{{ old('telephone') }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="ville">7. Ville :</label>
                        <input type="text" id="ville" name="ville" value="{{ old('ville') }}" required>
                    </div>
                </div>
                
                <div class="gse-form-section">
                    <h3>Participation au salon</h3>
                    
                    <div class="form-group">
                        <label>8. Type de participation souhaité :</label>
                        <div class="checkbox-group">
                            <label>
                                <input type="checkbox" name="participation[]" value="Présentation de projet" {{ is_array(old('participation')) && in_array('Présentation de projet', old('participation')) ? 'checked' : '' }}>
                                Présentation de projet
                            </label>
                            <label>
                                <input type="checkbox" name="participation[]" value="Pitch devant investisseurs" {{ is_array(old('participation')) && in_array('Pitch devant investisseurs', old('participation')) ? 'checked' : '' }}>
                                Pitch devant investisseurs
                            </label>
                            <label>
                                <input type="checkbox" name="participation[]" value="Exposition de produits/services" {{ is_array(old('participation')) && in_array('Exposition de produits/services', old('participation')) ? 'checked' : '' }}>
                                Exposition de produits/services
                            </label>
                            <label>
                                <input type="checkbox" name="participation[]" value="Networking" {{ is_array(old('participation')) && in_array('Networking', old('participation')) ? 'checked' : '' }}>
                                Networking
                            </label>
                        </div>
                        
                        <div class="form-group">
                            <label for="autre_participation">Autre type de participation :</label>
                            <input type="text" id="autre_participation" name="autre_participation" value="{{ old('autre_participation') }}">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>9. Avez-vous besoin d'un stand d'exposition ?</label>
                        <div class="radio-group">
                            <label>
                                <input type="radio" name="besoin_stand" value="Oui" {{ old('besoin_stand') == 'Oui' ? 'checked' : '' }} required>
                                Oui
                            </label>
                            <label>
                                <input type="radio" name="besoin_stand" value="Non" {{ old('besoin_stand') == 'Non' ? 'checked' : '' }}>
                                Non
                            </label>
                            <label>
                                <input type="radio" name="besoin_stand" value="À discuter" {{ old('besoin_stand') == 'À discuter' ? 'checked' : '' }}>
                                À discuter
                            </label>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>10. Souhaitez-vous bénéficier d'une visibilité supplémentaire (logo sur supports de communication) ?</label>
                        <div class="radio-group">
                            <label>
                                <input type="radio" name="visibilite" value="Oui" {{ old('visibilite') == 'Oui' ? 'checked' : '' }} required>
                                Oui
                            </label>
                            <label>
                                <input type="radio" name="visibilite" value="Non" {{ old('visibilite') == 'Non' ? 'checked' : '' }}>
                                Non
                            </label>
                            <label>
                                <input type="radio" name="visibilite" value="À discuter" {{ old('visibilite') == 'À discuter' ? 'checked' : '' }}>
                                À discuter
                            </label>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="produits_vente">11. Si vous prévoyez de vendre des produits, précisez lesquels :</label>
                        <textarea id="produits_vente" name="produits_vente">{{ old('produits_vente') }}</textarea>
                    </div>
                </div>
                
                <div class="gse-form-section">
                    <h3>Informations sur le projet/entreprise</h3>
                    
                    <div class="form-group">
                        <label>12. Avez-vous une marque déposée ?</label>
                        <div class="radio-group">
                            <label>
                                <input type="radio" name="marque" value="Oui" {{ old('marque') == 'Oui' ? 'checked' : '' }} required>
                                Oui
                            </label>
                            <label>
                                <input type="radio" name="marque" value="Non" {{ old('marque') == 'Non' ? 'checked' : '' }}>
                                Non
                            </label>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="nom_marque">13. Si oui, nom de la marque :</label>
                        <input type="text" id="nom_marque" name="nom_marque" value="{{ old('nom_marque') }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="description">14. Description de votre projet/entreprise (max 500 caractères) :</label>
                        <textarea id="description" name="description" maxlength="500" required>{{ old('description') }}</textarea>
                        <span class="file-help">Cette description pourra être utilisée dans nos supports de communication</span>
                    </div>
                    
                    <div class="form-group">
                        <label for="reseaux_sociaux">15. Liens vers vos réseaux sociaux (Facebook, Instagram, LinkedIn, etc.) :</label>
                        <textarea id="reseaux_sociaux" name="reseaux_sociaux">{{ old('reseaux_sociaux') }}</textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="source">16. Comment avez-vous entendu parler du Grand Salon Entrepreneurial ?</label>
                        <input type="text" id="source" name="source" value="{{ old('source') }}" required>
                    </div>
                </div>
                
                <div class="gse-form-section">
                    <h3>Téléversement de la pièce d'identité</h3>
                    
                    <div class="file-upload">
                        <label for="piece_identite">17. Merci de bien vouloir joindre une copie claire du recto de votre carte d'identité (format JPG, PNG ou PDF) :</label>
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
