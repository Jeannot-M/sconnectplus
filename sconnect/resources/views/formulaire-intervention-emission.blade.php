<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Formulaire d'intervention à l'émission Programme Jeune & Entrepreneur - Sconnect Plus">
    <title>Intervenir à l'émission | Programme Jeune & Entrepreneur | Sconnect Plus</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modern-header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/minimal-footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/programme-jeune-entrepreneur.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="pje-page">
    @include('includes._header')
    
    <!-- Hero Section réduit -->
    <section class="pje-hero" style="min-height: 300px; padding: 60px 0;">
        <div class="pje-hero-image">
            <img src="{{ asset('images/jeune.jpg') }}" alt="Jeunes entrepreneurs" class="hero-background-image">
        </div>
        <div class="pje-hero-content">
            <div class="container">
                <h1 class="pje-title">Intervenir à l'émission</h1>
                <p class="pje-subtitle">Partagez votre expérience et inspirez la prochaine génération d'entrepreneurs</p>
            </div>
        </div>
    </section>
    
    <!-- Formulaire d'intervention -->
    <section class="content-section" id="formulaire-intervention">
        <div class="container">
            <div class="form-container">
                <div class="form-intro">
                    <p>Vous êtes entrepreneur, expert ou leader dans votre domaine ? Partagez votre parcours, vos conseils et votre vision lors de notre émission dédiée à l'entrepreneuriat jeune.</p>
                </div>
                
                <form action="{{ route('intervention.emission') }}" method="POST">
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
                            <label for="fonction">Fonction actuelle <span class="required">*</span></label>
                            <input type="text" id="fonction" name="fonction" required>
                        </div>
                        <div class="form-group">
                            <label for="entreprise">Entreprise / Organisation <span class="required">*</span></label>
                            <input type="text" id="entreprise" name="entreprise" required>
                        </div>
                    </div>
                    
                    <div class="form-section">
                        <h3>Votre expérience</h3>
                        <div class="form-group">
                            <label for="bio">Courte biographie <span class="required">*</span></label>
                            <textarea id="bio" name="bio" rows="4" required maxlength="500"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="experience">Expérience entrepreneuriale <span class="required">*</span></label>
                            <textarea id="experience" name="experience" rows="4" required maxlength="500"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="realisations">Principales réalisations</label>
                            <textarea id="realisations" name="realisations" rows="3" maxlength="300"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-section">
                        <h3>Intervention proposée</h3>
                        <div class="form-group">
                            <label for="sujet">Sujet proposé <span class="required">*</span></label>
                            <input type="text" id="sujet" name="sujet" required>
                        </div>
                        <div class="form-group">
                            <label for="format">Format d'intervention préféré <span class="required">*</span></label>
                            <select id="format" name="format" required>
                                <option value="">Sélectionnez</option>
                                <option value="interview">Interview</option>
                                <option value="panel">Panel de discussion</option>
                                <option value="presentation">Présentation</option>
                                <option value="atelier">Atelier pratique</option>
                                <option value="autre">Autre</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="duree">Durée estimée (minutes) <span class="required">*</span></label>
                            <select id="duree" name="duree" required>
                                <option value="">Sélectionnez</option>
                                <option value="15">15 minutes</option>
                                <option value="30">30 minutes</option>
                                <option value="45">45 minutes</option>
                                <option value="60">60 minutes</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Message ou informations complémentaires</label>
                            <textarea id="message" name="message" rows="3" maxlength="300"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-section">
                        <h3>Disponibilités</h3>
                        <div class="form-group">
                            <label for="disponibilite">Périodes de disponibilité <span class="required">*</span></label>
                            <textarea id="disponibilite" name="disponibilite" rows="2" required placeholder="Ex: Lundi après-midi, Mercredi matin, etc."></textarea>
                        </div>
                    </div>
                    
                    <div class="consent-section">
                        <div class="checkbox-group">
                            <input type="checkbox" id="consentement_donnees" name="consentement_donnees" required>
                            <label for="consentement_donnees">Je consens au traitement de mes données personnelles conformément à la politique de confidentialité <span class="required">*</span></label>
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" id="consentement_image" name="consentement_image" required>
                            <label for="consentement_image">J'accepte que mon intervention soit enregistrée et diffusée sur les canaux de Sconnect Plus <span class="required">*</span></label>
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
