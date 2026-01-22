<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Formulaire d'inscription au Programme Jeune & Entrepreneur - Sconnect Plus">
    <title>Inscription Programme Jeune & Entrepreneur | Sconnect Plus</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modern-header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/minimal-footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/programme-jeune-entrepreneur.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
        .pje-page {
            position: relative;
            z-index: 1;
        }
    </style>
</head>
<body class="pje-page">
    @include('includes._header')
    
    <!-- Hero Section réduit -->
    <section class="pje-hero" style="min-height: 300px; padding: 60px 0;">
       <div class="quote-header-image" style="background-image: url('{{ asset('images/slides/page/devis.jpg') }}'); background-size: cover; background-position: center; height: 400px; border-radius: 12px; margin-bottom: 30px; "></div>
        <div class="pje-hero-content" style="min-height: 300px; padding: 60px 0;">
            <div class="container">
                <h1 class="pje-title">Inscription au Programme Jeune & Entrepreneur</h1>
                <p class="pje-subtitle">Remplissez ce formulaire pour rejoindre notre programme et bénéficier d'un accompagnement personnalisé</p>
            </div>
        </div>
    </section>
    
    <!-- Formulaire d'inscription -->
    <section class="content-section" id="formulaire-inscription">
        <div class="container">
            <div class="form-container">
                <form action="{{ route('inscription.programme') }}" method="POST">
                    @csrf
                    
                    <div class="form-section">
                        <h3>Informations personnelles</h3>
                        <div class="form-group">
                            <label for="nom">Nom <span class="required">*</span></label>
                            <input type="text" id="nom" name="nom" required maxlength="50">
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prénom <span class="required">*</span></label>
                            <input type="text" id="prenom" name="prenom" required maxlength="50">
                        </div>
                        <div class="form-group">
                            <label for="email">Email <span class="required">*</span></label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="telephone">Téléphone <span class="required">*</span></label>
                            <input type="tel" id="telephone" name="telephone" required>
                        </div>
                        <div class="form-group">
                            <label for="date_naissance">Date de naissance <span class="required">*</span></label>
                            <input type="date" id="date_naissance" name="date_naissance" required>
                        </div>
                        <div class="form-group">
                            <label for="adresse">Adresse</label>
                            <input type="text" id="adresse" name="adresse">
                        </div>
                        <div class="form-group">
                            <label for="ville">Ville <span class="required">*</span></label>
                            <input type="text" id="ville" name="ville" required>
                        </div>
                    </div>
                    
                    <div class="form-section">
                        <h3>Profil</h3>
                        <div class="form-group">
                            <label for="niveau_etudes">Niveau d'études <span class="required">*</span></label>
                            <select id="niveau_etudes" name="niveau_etudes" required>
                                <option value="">Sélectionnez</option>
                                <option value="secondaire">Secondaire</option>
                                <option value="bac">Baccalauréat</option>
                                <option value="licence">Licence</option>
                                <option value="master">Master</option>
                                <option value="doctorat">Doctorat</option>
                                <option value="autre">Autre</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="occupation">Occupation actuelle <span class="required">*</span></label>
                            <select id="occupation" name="occupation" required>
                                <option value="">Sélectionnez</option>
                                <option value="etudiant">Étudiant</option>
                                <option value="employe">Employé</option>
                                <option value="entrepreneur">Entrepreneur</option>
                                <option value="sans_emploi">Sans emploi</option>
                                <option value="autre">Autre</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="competences">Compétences (séparées par des virgules)</label>
                            <input type="text" id="competences" name="competences">
                        </div>
                    </div>
                    
                    <div class="form-section">
                        <h3>Votre projet</h3>
                        <div class="form-group">
                            <label for="nom_projet">Nom du projet (si existant)</label>
                            <input type="text" id="nom_projet" name="nom_projet">
                        </div>
                        <div class="form-group">
                            <label for="secteur">Secteur d'activité <span class="required">*</span></label>
                            <select id="secteur" name="secteur" required>
                                <option value="">Sélectionnez</option>
                                <option value="tech">Technologies</option>
                                <option value="sante">Santé</option>
                                <option value="education">Éducation</option>
                                <option value="agriculture">Agriculture</option>
                                <option value="commerce">Commerce</option>
                                <option value="services">Services</option>
                                <option value="autre">Autre</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="stade_projet">Stade du projet <span class="required">*</span></label>
                            <select id="stade_projet" name="stade_projet" required>
                                <option value="">Sélectionnez</option>
                                <option value="idee">Idée</option>
                                <option value="conception">Conception</option>
                                <option value="prototype">Prototype</option>
                                <option value="lancement">Lancement</option>
                                <option value="croissance">Croissance</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description_projet">Description du projet <span class="required">*</span></label>
                            <textarea id="description_projet" name="description_projet" rows="5" required maxlength="500"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="besoins">Besoins spécifiques</label>
                            <textarea id="besoins" name="besoins" rows="3" maxlength="300"></textarea>
                        </div>
                    </div>
                    
                    <div class="consent-section">
                        <div class="checkbox-group">
                            <input type="checkbox" id="consentement_donnees" name="consentement_donnees" required>
                            <label for="consentement_donnees">Je consens au traitement de mes données personnelles conformément à la politique de confidentialité <span class="required">*</span></label>
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" id="consentement_communication" name="consentement_communication">
                            <label for="consentement_communication">J'accepte de recevoir des communications sur les actualités et opportunités du programme</label>
                        </div>
                    </div>
                    
                    <div class="form-submit">
                        <button type="submit" class="submit-button">Soumettre ma candidature</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    <!-- Bouton retour -->
    <div class="back-to-home">
        <a href="{{ route('programme-jeune-entrepreneur') }}" class="back-button">
            <i class="fas fa-arrow-left"></i> Retour au Programme Jeune & Entrepreneur
        </a>
    </div>
    
    @include('includes._footer')
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
