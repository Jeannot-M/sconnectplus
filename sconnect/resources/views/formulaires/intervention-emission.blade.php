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


<div class="form-page-container">

<div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; margin-bottom:16px;">
  <iframe 
    src="https://www.youtube.com/embed/BNy-d4t0eTg?autoplay=1&controls=0&start=30"
    title="YouTube video"
    frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
    allowfullscreen
    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
  </iframe>
  
  
</div>

<div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; margin-bottom: 16px;">
  <iframe
    src="https://www.youtube.com/embed/Uoq7TON1uuw"
    title="COMMENT CREER UNE MARQUE PERSONNELLE PUISSANTE"
    frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
    allowfullscreen
    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
  </iframe>
</div>
    <div class="form-herdo">
        <div class="form-hero-contendt" style="text-align: center; margin-bottom: 40px;">
            <h1 style="color: #00AAE4; font-size: 1.8rem; margin-bottom: 12px; font-weight: 600;">Intervenir à l'émission Jeune & Entrepreneur</h1>
            <p>Partagez votre expérience et inspirez la prochaine génération d'entrepreneurs</p>
        </div>
    </div>

    <!-- Formulaire d'intervention -->
    <div class="form-container">
        <!-- Notifications flash -->
@if (Session::has('success'))
        <div class="alert-success" style="position: fixed; top: 20px; right: 20px; left: 20px; z-index: 9999; background: #4CAF50; color: white; padding: 15px 25px; border-radius: 4px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); display: flex; align-items: center; justify-content: space-between; max-width: 400px;">
            <span>{{ Session::get('success') }}</span>
            <button onclick="this.parentElement.remove()" style="background: transparent; border: none; color: white; cursor: pointer; margin-left: 15px; font-size: 18px;">
                &times;
            </button>
        </div>
    @endif
        
        <div class="form-intro">
            <p>Merci de remplir tous les champs obligatoires (*) pour proposer votre intervention.</p>
        </div>
        
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

        <form action="{{ route('formulaire-intervention-emission') }}" method="POST" class="programme-form" enctype="multipart/form-data">
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
                
                <div class="form-group">
                    <label for="profession">Profession/Fonction actuelle *</label>
                    <input type="text" id="profession" name="profession" required>
                </div>
                
                <div class="form-group">
                    <label for="entreprise">Entreprise/Organisation *</label>
                    <input type="text" id="entreprise" name="entreprise" required>
                </div>
                
                <div class="form-group">
                    <label for="site_web">Site web ou profil LinkedIn</label>
                    <input type="url" id="site_web" name="site_web" placeholder="https://...">
                </div>
            </div>
            
            <!-- Profil professionnel -->
            <div class="form-section">
                <h3><i class="fas fa-id-badge"></i> Profil d'intervenant</h3>
                
                <div class="form-group">
                    <label for="secteur_activite">Secteur d'activité *</label>
                    <select id="secteur_activite" name="secteur_activite" required>
                        <option value="">Sélectionnez</option>
                        <option value="technologie">Technologie/Numérique</option>
                        <option value="agriculture">Agriculture</option>
                        <option value="sante">Santé</option>
                        <option value="education">Éducation</option>
                        <option value="commerce">Commerce</option>
                        <option value="services">Services</option>
                        <option value="industrie">Industrie</option>
                        <option value="finance">Finance/Investissement</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="experience">Années d'expérience entrepreneuriale *</label>
                    <select id="experience" name="experience" required>
                        <option value="">Sélectionnez</option>
                        <option value="moins_1">Moins d'1 an</option>
                        <option value="1_3">1 à 3 ans</option>
                        <option value="3_5">3 à 5 ans</option>
                        <option value="5_10">5 à 10 ans</option>
                        <option value="plus_10">Plus de 10 ans</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="bio">Courte biographie (200 mots max) *</label>
                    <textarea id="bio" name="bio" rows="4" maxlength="1200" required></textarea>
                    <small>Cette biographie sera utilisée pour vous présenter lors de l'émission</small>
                </div>
                
                <div class="form-group">
                    <label for="photo">Photo de profil (JPEG/PNG, max 2MB) *</label>
                    <input type="file" id="photo" name="photo" accept=".jpg,.jpeg,.png" required>
                </div>
            </div>
            
            <!-- Proposition d'intervention -->
            <div class="form-section">
                <h3><i class="fas fa-microphone"></i> Proposition d'intervention</h3>
                
                <div class="form-group">
                    <label for="titre_intervention">Titre proposé pour votre intervention *</label>
                    <input type="text" id="titre_intervention" name="titre_intervention" required>
                    <small>Exemple : "Comment j'ai lancé ma startup avec moins de 1000$"</small>
                </div>
                
                <div class="form-group">
                    <label for="thematiques">Thématiques abordées (séparées par des virgules) *</label>
                    <input type="text" id="thematiques" name="thematiques" required>
                    <small>Exemple : financement, marketing digital, expansion internationale</small>
                </div>
                
                <div class="form-group">
                    <label for="description_intervention">Description détaillée de votre intervention *</label>
                    <textarea id="description_intervention" name="description_intervention" rows="5" required></textarea>
                    <small>Précisez les points clés que vous souhaitez aborder et les enseignements pour les jeunes entrepreneurs</small>
                </div>
                
                <div class="form-group">
                    <label for="format_prefere">Format d'intervention préféré *</label>
                    <select id="format_prefere" name="format_prefere" required>
                        <option value="">Sélectionnez</option>
                        <option value="interview">Interview (15-20 min)</option>
                        <option value="presentation">Présentation (10-15 min)</option>
                        <option value="panel">Panel de discussion (30-45 min)</option>
                        <option value="masterclass">Masterclass (45-60 min)</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="disponibilite">Disponibilités (périodes générales) *</label>
                    <textarea id="disponibilite" name="disponibilite" rows="2" required></textarea>
                    <small>Exemple : Disponible les soirs de semaine ou les week-ends, préférence pour septembre 2025</small>
                </div>
            </div>
            
            <!-- Expérience et impact -->
            <div class="form-section">
                <h3><i class="fas fa-chart-line"></i> Expérience et impact</h3>
                
                <div class="form-group">
                    <label for="realisations">Principales réalisations entrepreneuriales *</label>
                    <textarea id="realisations" name="realisations" rows="3" required></textarea>
                </div>
                
                <div class="form-group">
                    <label for="defis">Principaux défis surmontés *</label>
                    <textarea id="defis" name="defis" rows="3" required></textarea>
                </div>
                
                <div class="form-group">
                    <label for="impact">Impact de votre parcours sur la communauté *</label>
                    <textarea id="impact" name="impact" rows="3" required></textarea>
                </div>
                
                <div class="form-group">
                    <label for="interventions_precedentes">Avez-vous déjà participé à des conférences ou émissions similaires ?</label>
                    <textarea id="interventions_precedentes" name="interventions_precedentes" rows="2"></textarea>
                    <small>Si oui, précisez lesquelles et quand</small>
                </div>
            </div>
            
            <!-- Supports et matériel -->
            <div class="form-section">
                <h3><i class="fas fa-tools"></i> Supports et matériel</h3>
                
                <div class="form-group">
                    <label for="supports">Aurez-vous besoin de supports particuliers pour votre intervention ? *</label>
                    <select id="supports" name="supports" required>
                        <option value="">Sélectionnez</option>
                        <option value="presentation">Présentation PowerPoint/Slides</option>
                        <option value="video">Vidéo</option>
                        <option value="demo">Démonstration produit</option>
                        <option value="aucun">Aucun support nécessaire</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="precisions_supports">Précisions sur vos besoins techniques</label>
                    <textarea id="precisions_supports" name="precisions_supports" rows="2"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="materiel_supplementaire">Fichier supplémentaire (PDF, max 5MB)</label>
                    <input type="file" id="materiel_supplementaire" name="materiel_supplementaire" accept=".pdf,.ppt,.pptx">
                    <small>Vous pouvez joindre un document de présentation ou un portfolio</small>
                </div>
            </div>
            
            <!-- Conditions -->
            <div class="form-section">
                <h3><i class="fas fa-check-circle"></i> Conditions</h3>
                <div class="form-group checkbox-group">
                    <input type="checkbox" id="conditions" name="conditions" required>
                    <label for="conditions">J'accepte les <a href="{{ route('cgu') }}" target="_blank">conditions générales d'utilisation</a> et la <a href="{{ route('politique-confidentialite') }}" target="_blank">politique de confidentialité</a> *</label>
                </div>
                
                <div class="form-group checkbox-group">
                    <input type="checkbox" id="droit_image" name="droit_image" required>
                    <label for="droit_image">J'autorise Sconnect Plus à utiliser mon image et mes propos dans le cadre de l'émission et de sa promotion *</label>
                </div>
                
                <div class="form-group checkbox-group">
                    <input type="checkbox" id="newsletter" name="newsletter">
                    <label for="newsletter">Je souhaite recevoir la newsletter et les actualités du programme</label>
                </div>
            </div>
            
            <div class="form-actions">
                <button type="submit" class="submit-button">Soumettre ma proposition</button>
                <a href="{{ route('programme-jeune-entrepreneur') }}" class="cancel-button">Annuler</a>
            </div>
        </form>
    </div>
</div>

<!-- Script pour les notifications déplacé dans la section scripts -->
@endsection
