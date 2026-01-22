@extends('pages.layout')

@section('title', 'Carrière - Sconnect Plus')
@section('meta_description', 'Rejoignez Sconnect Plus et transformez vos ambitions en opportunités professionnelles. Découvrez nos offres d\'emploi, stages et programmes pour jeunes talents.')

@section('styles')
    <!-- Swiper CSS - Utilisation de la version 8 plus stable -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('css/carriere.css') }}">
@endsection

@section('pages')
    
    <!-- Slider Section -->
    <div class="career-slider-container">
        <div class="career-slider">
            <div class="career-slide active" style="background-image: url('{{ asset('images/slides/slides_acceuil/carriere/IMG_6115.JPG') }}');"></div>
            <div class="career-slide" style="background-image: url('{{ asset('images/slides/slides_acceuil/carriere/IMG_6116.JPG') }}');"></div>
            <div class="career-slide" style="background-image: url('{{ asset('images/slides/slides_acceuil/carriere/IMG_6117.JPG') }}');"></div>
            <div class="career-slide" style="background-image: url('{{ asset('images/slides/slides_acceuil/carriere/IMG_6118.JPG') }}');"></div>
            <div class="career-slide" style="background-image: url('{{ asset('images/slides/slides_acceuil/carriere/IMG_6119.JPG') }}');"></div>
        </div>
        <!-- <div class="career-slider-overlay"></div> -->
    </div>

    <!-- À propos de Sconnect Carrière -->
    <section class="career-about">
        
        <div class="container">
            <div class="hero-content">
                <div class="career-badge">EMPLOI • STAGE • OPPORTUNITÉ</div>
                <h1 class="hero-title">SCONNECT <span class="text-gradient">CARRIÈRE</span></h1>
                <p class="hero-subtitle">Votre talent, notre avenir.</p>
                <p class="hero-description">Chez Sconnect Plus, nous ne vous offrons pas seulement un emploi ou un stage… nous offrons des carrières !</p>
                <div class="hero-cta">
                    <a href="#postuler" class="btn-primary">Postuler maintenant <i class="fas fa-arrow-right"></i></a>
                    <a href="#programmes" class="btn-secondary">Nos programmes</a>
                </div>
            </div>
            <div class="section-header">
                <h2>Rejoignez notre équipe</h2>
                <p>Chez Sconnect Plus, nous sommes convaincus que les grandes entreprises se construisent avec les grandes équipes</p>
            </div>

            <div class="about-content">
                <p>Nous ne recrutons pas seulement des compétences : nous investissons dans des personnalités ambitieuses, des esprits curieux et des passionnés qui veulent façonner l'avenir des technologies, de l'énergie et de la formation professionnelle.</p>
                <p>Ici, chaque idée compte, chaque talent trouve sa place, et chaque carrière se construit sur des projets qui ont un véritable impact.</p>
            </div>

            <div class="why-join-us">
                <h3>Pourquoi Sconnect Plus ?</h3>
                
                <div class="benefits-grid">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h4>Un environnement inspirant</h4>
                        <p>Vous collaborez avec des experts qui repoussent chaque jour les limites de l'innovation.</p>
                    </div>
                    
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-project-diagram"></i>
                        </div>
                        <h4>Des projets à fort impact</h4>
                        <p>Nous développons des solutions concrètes qui transforment les entreprises et améliorent la vie des communautés.</p>
                    </div>
                    
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4>Une culture humaine</h4>
                        <p>Écoute, bienveillance et esprit d'équipe au cœur de notre management.</p>
                    </div>
                    
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4>Un tremplin pour votre carrière</h4>
                        <p>Formations, certifications, opportunités internationales et évolutions rapides.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nos programmes -->
    <section class="career-programs" id="programmes">
        <div class="container">
            <div class="section-header">
                <h2>Nos programmes</h2>
                <p>Des opportunités adaptées à chaque profil et ambition</p>
            </div>

            <div class="programs-grid">
                <div class="program-card">
                    <div class="program-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Stages académiques & immersions professionnelles</h3>
                    <p>Vivez l'expérience du terrain au contact direct de nos projets stratégiques. Accompagné par un mentor, vous découvrirez les exigences, la rigueur et la passion qui animent nos équipes.</p>
                </div>
                
                <div class="program-card featured">
                    <div class="program-badge">Populaire</div>
                    <div class="program-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3>Postes permanents</h3>
                    <p>Intégrez une entreprise en pleine expansion où vos compétences sont valorisées et vos ambitions encouragées.</p>
                </div>
                
                <div class="program-card">
                    <div class="program-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Programme "Jeunes Talents"</h3>
                    <p>Une passerelle exclusive vers l'emploi pour les jeunes diplômés prometteurs, avec un parcours accéléré d'intégration et de montée en compétence.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Processus de recrutement -->
    <section class="career-process">
        <div class="container">
            <div class="section-header">
                <h2>Votre parcours chez Sconnect Plus</h2>
                <p>Un processus simple et transparent</p>
            </div>

            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h4>Postulez en ligne</h4>
                        <p>Via notre portail carrière ci-dessous</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h4>Faites briller votre profil</h4>
                        <p>Nos recruteurs étudient chaque candidature avec attention</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h4>Rencontrez nos équipes</h4>
                        <p>Lors d'entretiens techniques et humains</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h4>Rejoignez-nous</h4>
                        <p>Et commencez votre nouvelle aventure professionnelle</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Formulaire de candidature -->
    <section class="career-application" id="postuler">
        <div class="container">
            <div class="section-header">
                <h2>Formulaire de demande d'emploi ou stage</h2>
                <p>Rejoindre Sconnect Plus, c'est aussi construire ensemble l'avenir des technologies, de l'énergie de l'entrepreneuriat et de l'insertion professionnelle.</p>
                <p class="form-intro">Remplissez le formulaire ci-dessous pour soumettre votre candidature.</p>
            </div>
                @if ($errors->any())
                        <div class="alert alert-danger text-center">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
            <div class="application-form">
                <form id="career-form" action="{{ route('carriere.submit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-section">
                        <h3>1️⃣ Informations personnelles</h3>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="fullname">Nom complet</label>
                                <input type="text" id="fullname" name="first_name" class="form-control" value="{{ old('first_name') }}" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="birthdate">Date de naissance</label>
                                <input type="date" id="birthdate" name="birthdate" class="form-control" value="{{ old('birthdate') }}" required>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label>Sexe</label>
                                <div class="radio-group">
                                    <label class="radio-label">
                                        <input type="radio" name="gender" value="male" required>
                                        Masculin
                                    </label>
                                    <label class="radio-label">
                                        <input type="radio" name="gender" value="female">
                                        Féminin
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="phone">Téléphone</label>
                                <input type="tel" id="phone" name="phone" class="form-control" value="{{ old('phone') }}" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="whatsapp">Numéro WhatsApp</label>
                                <input type="tel" id="whatsapp" name="whatsapp" class="form-control" value="{{ old('whatsapp') }}">
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-section">
                        <h3>2️⃣ Niveau d'études</h3>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <div class="checkbox-group">
                                    <label class="checkbox-label">
                                        <input type="radio" name="education_level" value="bac" required>
                                        Bac
                                    </label>
                                    <label class="checkbox-label">
                                        <input type="radio" name="education_level" value="graduat">
                                        Graduat
                                    </label>
                                    <label class="checkbox-label">
                                        <input type="radio" name="education_level" value="licence">
                                        Licence
                                    </label>
                                    <label class="checkbox-label">
                                        <input type="radio" name="education_level" value="master">
                                        Master
                                    </label>
                                    <label class="checkbox-label">
                                        <input type="radio" name="education_level" value="other">
                                        Autre
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row" id="other-education-container" style="display: none;">
                            <div class="form-group">
                                <label for="other-education">Précisez</label>
                                <input type="text" id="other-education" name="other_education" class="form-control">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-section">
                        <h3>3️⃣ Poste sollicité</h3>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="job-title">Intitulé du poste ou domaine visé</label>
                                <input type="text" id="job-title" name="job_title" class="form-control" value="{{ old('job_title') }}" required>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label>Type de contrat souhaité</label>
                                <div class="checkbox-group">
                                    <label class="checkbox-label">
                                        <input type="radio" name="contract_type" value="cdi" required>
                                        CDI
                                    </label>
                                    <label class="checkbox-label">
                                        <input type="radio" name="contract_type" value="cdd">
                                        CDD
                                    </label>
                                    <label class="checkbox-label">
                                        <input type="radio" name="contract_type" value="stage">
                                        Stage
                                    </label>
                                    <label class="checkbox-label">
                                        <input type="radio" name="contract_type" value="young_talent">
                                        Programme Jeunes Talents
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="availability">Disponibilité à partir du</label>
                                <input type="date" id="availability" name="availability" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-section">
                        <h3>4️⃣ Formation et diplômes</h3>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="highest-degree">Votre diplôme le plus élevé</label>
                                <input type="text" id="highest-degree" name="highest_degree" class="form-control" value="{{ old('highest_degree') }}" required>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="certifications">Autres certifications ou spécialisations</label>
                                <textarea id="certifications" name="certifications" class="form-control" rows="3">{{ old('certifications') }}</textarea>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-section">
                        <h3>5️⃣ Expérience professionnelle</h3>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="last-position">Dernier poste occupé</label>
                                <input type="text" id="last-position" name="last_position" class="form-control" value="{{ old('last_position') }}">
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="main-missions">Brève description des missions principales</label>
                                <textarea id="main-missions" name="main_missions" class="form-control" rows="3">{{ old('main_missions') }}</textarea>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-section">
                        <h3>6️⃣ Compétences et langues</h3>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label>Langues parlées</label>
                                <div class="checkbox-group">
                                    <label class="checkbox-label">
                                        <input type="checkbox" name="languages[]" value="french">
                                        Français
                                    </label>
                                    <label class="checkbox-label">
                                        <input type="checkbox" name="languages[]" value="english">
                                        Anglais
                                    </label>
                                    <label class="checkbox-label">
                                        <input type="checkbox" name="languages[]" value="other">
                                        Autre
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label>Niveau informatique</label>
                                <div class="checkbox-group">
                                    <label class="checkbox-label">
                                        <input type="radio" name="computer_level" value="beginner" required>
                                        Débutant
                                    </label>
                                    <label class="checkbox-label">
                                        <input type="radio" name="computer_level" value="intermediate">
                                        Intermédiaire
                                    </label>
                                    <label class="checkbox-label">
                                        <input type="radio" name="computer_level" value="advanced">
                                        Avancé
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="technical-skills">Autres compétences techniques</label>
                                <textarea id="technical-skills" name="technical_skills" class="form-control" rows="3">{{ old('technical_skills') }}</textarea>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-section">
                        <h3>7️⃣ Documents à joindre</h3>
                        <p class="form-note">Formats acceptés : PDF, DOCX, DOC – taille max. 5 Mo par fichier</p>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="cv">CV</label>
                                <input type="file" id="cv" name="cv" class="form-control-file" accept=".pdf,.docx,.doc" required>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="motivation-letter">Lettre de motivation adressée DRH</label>
                                <input type="file" id="motivation-letter" name="motivation_letter" class="form-control-file" accept=".pdf,.docx,.doc" required>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="id-card">Pièce d'identité</label>
                                <input type="file" id="id-card" name="id_card" class="form-control-file" accept=".pdf,.jpg,.jpeg,.png" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-section">
                        <h3>8️⃣ Confirmation</h3>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <div class="checkbox-group">
                                    <label class="checkbox-label">
                                        <input type="checkbox" name="confirmation" required>
                                        Je certifie que les informations fournies sont exactes et complètes.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="btn-submit">Soumettre ma candidature</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Modal de réponse (succès ou erreur) -->
    <div class="modal" id="success-modal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <div class="modal-header">
                <h2>Candidature envoyée avec succès</h2>
            </div>
            <div class="modal-body">
                <p>Génial ! Vous venez de postuler chez Sconnect Plus. Votre candidature a bien été transmise à notre service des Ressources Humaines.</p>
                <p>Notre Direction des Ressources Humaines :</p>
                <ul>
                    <li>Analyse de votre dossier.</li>
                    <li>Vous contactera pour un entretien si votre profil correspond.</li>
                    <li>Vous contactera si votre profil ne correspond pas ou si l'offre n'est plus valable, et conservera votre candidature pour de futures opportunités.</li>
                </ul>
                <p>Délais de traitement : 5 jours ouvrables.</p>
                <p>Pour toute question, contactez-nous :</p>
                <p>E-mail : <a href="mailto:contact@sconnectplus.cd">contact@sconnectplus.cd</a><br>
                Tel : <a href="tel:+243821887423">+243 821887423</a></p>
            </div>
            <div class="modal-footer">
                <button class="btn-secondary" id="close-modal">Revenir</button>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Script pour le slider automatique de la page carrière -->
    <script src="{{ asset('js/career-slider.js') }}"></script>
    <script>
        
        // Gestion du champ "Autre" pour le niveau d'études
        const educationRadios = document.querySelectorAll('input[name="education_level"]');
        const otherEducationContainer = document.getElementById('other-education-container');
        
        educationRadios.forEach(radio => {
            radio.addEventListener('change', function() {
                if (this.value === 'other') {
                    otherEducationContainer.style.display = 'block';
                    document.getElementById('other-education').setAttribute('required', 'required');
                } else {
                    otherEducationContainer.style.display = 'none';
                    document.getElementById('other-education').removeAttribute('required');
                }
            });
        });
        
        // Gestion du formulaire et de la modal
        const form = document.getElementById('career-form');
        const modal = document.getElementById('success-modal');
        const closeModal = document.querySelector('.close-modal');
        const closeModalBtn = document.getElementById('close-modal');
        
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Création d'un objet FormData pour envoyer les données du formulaire
            const formData = new FormData(this);
            
            // Affichage d'un indicateur de chargement
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerHTML;
            submitBtn.innerHTML = 'Envoi en cours...';
            submitBtn.disabled = true;
            
            // Envoi des données via AJAX
            fetch(form.getAttribute('action'), {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                // Réinitialisation du bouton
                submitBtn.innerHTML = originalBtnText;
                submitBtn.disabled = false;
                
                if (data.success) {
                    // Affichage du message de succès dans la modal
                    document.querySelector('.modal-content h2').textContent = 'Candidature envoyée !';
                    document.querySelector('.modal-content p').textContent = data.message || 'Votre candidature a été envoyée avec succès. Nous vous contacterons prochainement.';
                    
                    // Réinitialisation du formulaire
                    form.reset();
                    
                    // Affichage de la modal
                    modal.style.display = 'block';
                } else {
                    // Affichage des erreurs
                    let errorMessage = 'Veuillez corriger les erreurs suivantes :';
                    
                    if (typeof data.errors === 'object') {
                        errorMessage += '<ul>';
                        for (const [field, errors] of Object.entries(data.errors)) {
                            errors.forEach(error => {
                                errorMessage += `<li>${error}</li>`;
                            });
                        }
                        errorMessage += '</ul>';
                    } else {
                        errorMessage = data.message || 'Une erreur est survenue lors de l'envoi du formulaire.';
                    }
                    
                    // Affichage du message d'erreur dans la modal
                    document.querySelector('.modal-content h2').textContent = 'Erreur';
                    document.querySelector('.modal-content p').innerHTML = errorMessage;
                    
                    // Affichage de la modal
                    modal.style.display = 'block';
                }
            })
            .catch(error => {
                // Réinitialisation du bouton
                submitBtn.innerHTML = originalBtnText;
                submitBtn.disabled = false;
                
                // Affichage de l'erreur dans la modal
                document.querySelector('.modal-content h2').textContent = 'Erreur';
                document.querySelector('.modal-content p').textContent = 'Une erreur est survenue lors de l'envoi du formulaire. Veuillez réessayer plus tard.';
                
                // Affichage de la modal
                modal.style.display = 'block';
                
                console.error('Erreur:', error);
            });
        });
        
        closeModal.addEventListener('click', function() {
            modal.style.display = 'none';
        });
        
        closeModalBtn.addEventListener('click', function() {
            modal.style.display = 'none';
        });
        
        window.addEventListener('click', function(e) {
            if (e.target === modal) {
                modal.style.display = 'none';
            }
        });
    });
</script>
@endsection
