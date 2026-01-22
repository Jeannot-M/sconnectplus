@extends('pages.layout')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/forms.css') }}">
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
@if (Session::has('success'))
        <div class="alert-success" style="position: fixed; top: 20px; right: 20px; left: 20px; z-index: 9999; background: #4CAF50; color: white; padding: 15px 25px; border-radius: 4px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); display: flex; align-items: center; justify-content: space-between; max-width: 400px;">
            <span>{{ Session::get('success') }}</span>
            <button onclick="this.parentElement.remove()" style="background: transparent; border: none; color: white; cursor: pointer; margin-left: 15px; font-size: 18px;">
                &times;
            </button>
        </div>
    @endif

<div class="form-page-container">
    <div class="quote-header-image" style="background-image: url('{{ asset('images/slides/slides_acceuil/salon/GRAND-SALON-ENTREPRENEURIAL_03.jpg') }}'); background-size: cover; background-position: center; height: 400px; border-radius: 0px; margin-bottom: 30px; "></div>
    <!-- Hero Section -->
    <div class="form-her">
        <div class="form-hero-contentt" style="text-align: center; margin-bottom: 40px;">
            <h1 style="color: #00AAE4; font-size: 1.8rem; margin-bottom: 12px; font-weight: 600;">Inscription au Programme Jeune & Entrepreneur</h1>
            <p>Remplissez ce formulaire pour rejoindre notre communauté d'entrepreneurs</p>
        </div>
    </div>

    <!-- Formulaire d'inscription -->
    <div class="form-container">
       
        
        @if ($errors->any())
        <div class="form-errors">
            <div class="error-header">
                <i class="fas fa-exclamation-triangle"></i>
                <h3>Veuillez corriger les erreurs suivantes :</h3>
            </div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('formulaire-inscription-programme') }}" method="POST" class="programme-form" enctype="multipart/form-data">
            @csrf
            
            <!-- Informations personnelles -->
            <div class="form-section">
                <h3><i class="fas fa-user"></i> Informations personnelles</h3>
                
                <div class="form-group @error('nom') has-error @enderror">
                    <label for="nom">Nom complet *</label>
                    <input type="text" id="nom" name="nom" value="{{ old('nom') }}" required>
                    @error('nom')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form-row">
                    <div class="form-group @error('email') has-error @enderror">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                        @error('email')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group @error('telephone') has-error @enderror">
                        <label for="telephone">Téléphone *</label>
                        <input type="tel" id="telephone" name="telephone" value="{{ old('telephone') }}" required>
                        @error('telephone')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group @error('date_naissance') has-error @enderror">
                        <label for="date_naissance">Date de naissance *</label>
                        <input type="date" id="date_naissance" name="date_naissance" value="{{ old('date_naissance') }}" required>
                        @error('date_naissance')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group @error('genre') has-error @enderror">
                        <label for="genre">Genre *</label>
                        <select id="genre" name="genre" required>
                            <option value="">Sélectionnez</option>
                            <option value="homme" {{ old('genre') == 'homme' ? 'selected' : '' }}>Homme</option>
                            <option value="femme" {{ old('genre') == 'femme' ? 'selected' : '' }}>Femme</option>
                            <option value="autre" {{ old('genre') == 'autre' ? 'selected' : '' }}>Autre</option>
                        </select>
                        @error('genre')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="adresse">Adresse complète *</label>
                    <textarea id="adresse" name="adresse" rows="2" required>{{ old('adresse') }}</textarea>
                </div>
            </div>
            
            <!-- Profil professionnel -->
            <div class="form-section">
                <h3><i class="fas fa-briefcase"></i> Profil professionnel</h3>
                
                <div class="form-group">
                    <label for="niveau_etudes">Niveau d'études *</label>
                    <select id="niveau_etudes" name="niveau_etudes" required>
                        <option value="">Sélectionnez</option>
                        <option value="secondaire" {{ old('niveau_etudes') == 'secondaire' ? 'selected' : '' }}>Secondaire</option>
                        <option value="graduat" {{ old('niveau_etudes') == 'graduat' ? 'selected' : '' }}>Graduat</option>
                        <option value="licence" {{ old('niveau_etudes') == 'licence' ? 'selected' : '' }}>Licence</option>
                        <option value="master" {{ old('niveau_etudes') == 'master' ? 'selected' : '' }}>Master</option>
                        <option value="doctorat" {{ old('niveau_etudes') == 'doctorat' ? 'selected' : '' }}>Doctorat</option>
                        <option value="autre" {{ old('niveau_etudes') == 'autre' ? 'selected' : '' }}>Autre</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="domaine_etudes">Domaine d'études/spécialisation *</label>
                    <input type="text" id="domaine_etudes" name="domaine_etudes" value="{{ old('domaine_etudes') }}" required>
                </div>
                
                <div class="form-group">
                    <label for="situation_actuelle">Situation actuelle *</label>
                    <select id="situation_actuelle" name="situation_actuelle" required>
                        <option value="">Sélectionnez</option>
                        <option value="etudiant" {{ old('situation_actuelle') == 'etudiant' ? 'selected' : '' }}>Étudiant</option>
                        <option value="salarie" {{ old('situation_actuelle') == 'salarie' ? 'selected' : '' }}>Salarié</option>
                        <option value="entrepreneur" {{ old('situation_actuelle') == 'entrepreneur' ? 'selected' : '' }}>Entrepreneur</option>
                        <option value="sans_emploi" {{ old('situation_actuelle') == 'sans_emploi' ? 'selected' : '' }}>Sans emploi</option>
                        <option value="autre" {{ old('situation_actuelle') == 'autre' ? 'selected' : '' }}>Autre</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="competences">Compétences principales (séparées par des virgules) *</label>
                    <textarea id="competences" name="competences" rows="2" required>{{ old('competences') }}</textarea>
                </div>
            </div>
            
            <!-- Projet entrepreneurial -->
            <div class="form-section">
                <h3><i class="fas fa-lightbulb"></i> Votre projet entrepreneurial</h3>
                
                <div class="form-group">
                    <label for="nom_projet">Nom du projet/entreprise (si existant)</label>
                    <input type="text" id="nom_projet" name="nom_projet" value="{{ old('nom_projet') }}">
                </div>
                
                <div class="form-group">
                    <label for="secteur_activite">Secteur d'activité *</label>
                    <select id="secteur_activite" name="secteur_activite" required>
                        <option value="">Sélectionnez</option>
                        <option value="technologie" {{ old('secteur_activite') == 'technologie' ? 'selected' : '' }}>Technologie/Numérique</option>
                        <option value="agriculture" {{ old('secteur_activite') == 'agriculture' ? 'selected' : '' }}>Agriculture</option>
                        <option value="sante" {{ old('secteur_activite') == 'sante' ? 'selected' : '' }}>Santé</option>
                        <option value="education" {{ old('secteur_activite') == 'education' ? 'selected' : '' }}>Éducation</option>
                        <option value="commerce" {{ old('secteur_activite') == 'commerce' ? 'selected' : '' }}>Commerce</option>
                        <option value="services" {{ old('secteur_activite') == 'services' ? 'selected' : '' }}>Services</option>
                        <option value="industrie" {{ old('secteur_activite') == 'industrie' ? 'selected' : '' }}>Industrie</option>
                        <option value="autre" {{ old('secteur_activite') == 'autre' ? 'selected' : '' }}>Autre</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="stade_projet">Stade actuel du projet *</label>
                    <select id="stade_projet" name="stade_projet" required>
                        <option value="">Sélectionnez</option>
                        <option value="idee" {{ old('stade_projet') == 'idee' ? 'selected' : '' }}>Idée</option>
                        <option value="conception" {{ old('stade_projet') == 'conception' ? 'selected' : '' }}>Conception/Prototype</option>
                        <option value="demarrage" {{ old('stade_projet') == 'demarrage' ? 'selected' : '' }}>Démarrage</option>
                        <option value="croissance" {{ old('stade_projet') == 'croissance' ? 'selected' : '' }}>Croissance</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="description_projet">Description de votre projet (problème, solution, marché cible) *</label>
                    <textarea id="description_projet" name="description_projet" rows="5" required>{{ old('description_projet') }}</textarea>
                </div>
                
                <div class="form-group">
                    <label for="besoins">Quels sont vos besoins principaux pour développer votre projet ? *</label>
                    <textarea id="besoins" name="besoins" rows="3" required>{{ old('besoins') }}</textarea>
                </div>
            </div>
            
            <!-- Motivation -->
            <div class="form-section">
                <h3><i class="fas fa-star"></i> Motivation</h3>
                
                <div class="form-group">
                    <label for="motivation">Pourquoi souhaitez-vous rejoindre le Programme Jeune & Entrepreneur ? *</label>
                    <textarea id="motivation" name="motivation" rows="4" required>{{ old('motivation') }}</textarea>
                </div>
                
                <div class="form-group">
                    <label for="attentes">Quelles sont vos attentes vis-à-vis du programme ? *</label>
                    <textarea id="attentes" name="attentes" rows="3" required>{{ old('attentes') }}</textarea>
                </div>
                
                <div class="form-group">
                    <label for="source">Comment avez-vous entendu parler du programme ? *</label>
                    <select id="source" name="source" required>
                        <option value="">Sélectionnez</option>
                        <option value="reseaux_sociaux" {{ old('source') == 'reseaux_sociaux' ? 'selected' : '' }}>Réseaux sociaux</option>
                        <option value="site_web" {{ old('source') == 'site_web' ? 'selected' : '' }}>Site web</option>
                        <option value="bouche_oreille" {{ old('source') == 'bouche_oreille' ? 'selected' : '' }}>Bouche à oreille</option>
                        <option value="evenement" {{ old('source') == 'evenement' ? 'selected' : '' }}>Événement</option>
                        <option value="presse" {{ old('source') == 'presse' ? 'selected' : '' }}>Presse/Média</option>
                        <option value="autre" {{ old('source') == 'autre' ? 'selected' : '' }}>Autre</option>
                    </select>
                </div>
            </div>
            
            <!-- Documents -->
            <div class="form-section">
                <h3><i class="fas fa-file-alt"></i> Documents</h3>
                
                <div class="form-group">
                    <label for="cv">CV (PDF, max 2MB) *</label>
                    <input type="file" id="cv" name="cv" accept=".pdf" required>
                </div>
                
                <div class="form-group">
                    <label for="business_plan">Business plan ou présentation du projet (PDF, max 5MB)</label>
                    <input type="file" id="business_plan" name="business_plan" accept=".pdf,.ppt,.pptx,.doc,.docx">
                    <small>Facultatif, mais recommandé</small>
                </div>
            </div>
            
            <!-- Conditions -->
            <div class="form-section">
                <h3><i class="fas fa-check-circle"></i> Conditions</h3>
                <div class="form-group checkbox-group">
                    <input type="checkbox" id="conditions" name="conditions" {{ old('conditions') ? 'checked' : '' }} required>
                    <label for="conditions">J'accepte les <a href="{{ route('cgu') }}" target="_blank">conditions générales d'utilisation</a> et la <a href="{{ route('politique-confidentialite') }}" target="_blank">politique de confidentialité</a> *</label>
                </div>
                
                <div class="form-group checkbox-group">
                    <input type="checkbox" id="newsletter" name="newsletter" {{ old('newsletter') ? 'checked' : '' }}>
                    <label for="newsletter">Je souhaite recevoir la newsletter et les actualités du programme</label>
                </div>
            </div>
            
            <div class="form-actions">
                <button type="submit" class="submit-button">Soumettre ma candidature</button>
                <a href="{{ route('programme-jeune-entrepreneur') }}" class="cancel-button">Annuler</a>
            </div>
        </form>
    </div>
</div>

<!-- Script pour les notifications déplacé dans la section scripts -->
@endsection
