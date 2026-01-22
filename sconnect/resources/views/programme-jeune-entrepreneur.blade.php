<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Programme Jeune & Entrepreneur - Libérez votre potentiel entrepreneurial avec Sconnect Plus">
    <title>Programme Jeune & Entrepreneur | Sconnect Plus</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modern-header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/minimal-footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/programme-jeune-entrepreneur.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body class="pje-page">
    @include('includes._header')
    
    <!-- Notifications Nous contacterflash -->
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
    
    <!-- Hero Section avec slider automatique -->
    <section class="pje-hero">
        <div class="pje-hero-slider">
            <!-- Images du slider avec div en arrière-plan -->
            <div class="slider-container">
                <div class="slide active" style="background-image: url('{{ asset('images/slides/slides_acceuil/jeunes/IMG_6120.JPG') }}');"></div>
                <div class="slide" style="background-image: url('{{ asset('images/slides/slides_acceuil/jeunes/IMG_6121.JPG') }}');"></div>
                <div class="slide" style="background-image: url('{{ asset('images/slides/slides_acceuil/jeunes/IMG_6122.JPG') }}');"></div>
                <div class="slide" style="background-image: url('{{ asset('images/slides/slides_acceuil/jeunes/IMG_6123.JPG') }}');"></div>
                <div class="slide" style="background-image: url('{{ asset('images/slides/slides_acceuil/jeunes/IMG_6124.JPG') }}');"></div>
            </div>
            <!-- Overlay pour améliorer la lisibilité du texte -->
            <div class="slider-overlay"></div>
        </div>
       
    </section>
    
    <!-- Présentation content-section -->
     <section>
     <div class="pje-container" style="display: ;" >
            <div class="pje-hero-content">
                <h1 class="pje-title">Programme Jeune & Entrepreneur</h1>
                <p class="pje-subtitle">Libérez votre potentiel entrepreneurial avec le programme Jeune & Entrepreneur !</p>
                <p class="pje-description">Un programme unique pour inspirer, former et accompagner la nouvelle génération d'entrepreneurs en RDC.</p>
                
                <div class="pje-cta-buttons" style="display: flex; align-items: center;">
                    <a href="{{ route('formulaire-inscription-programme') }}" class="cta-button">Rejoindre le programme</a>
                    <a href="{{ route('formulaire-intervention-emission') }}" style="padding: 13px 36px; border-radius: 5px;" class="cta-button-orange">Participer à notre émission</a>
                </div>
            </div>
        </div>
     </section>
     
     <div class="academy-video-container" style="display: none;">
            <div class="responsive-video">
            <iframe width="1577" height="613" src="https://www.youtube.com/embed/BNy-d4t0eTg" title="DEMARRER UN BUSINESS SANS ARGENT" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>

    <section class="content-section">
        <div class="section-header">
            <h2>Présentation du programme</h2>
            <p>Chez Sconnect Plus, nous croyons que l'avenir économique de notre pays repose sur une jeunesse innovante et ambitieuse. C'est pourquoi nous avons mis en place le Programme Jeune & Entrepreneur, une initiative dédiée à l'accompagnement complet des jeunes porteurs de projets, de l'idée à la concrétisation de leur entreprise.</p>
        </div>
    </section>
    
    <!-- Objectifs content-section -->
    <section class="content-section" style="padding-top: 0;">
        <div class="section-header">
            <h2>Objectifs du programme</h2>
        </div>
        
        <div class="objectives-grid">
            <div class="objective-card">
                <span class="objective-icon"><i class="fas fa-lightbulb"></i></span>
                <p class="objective-text"><strong>Inspirer</strong> les jeunes à entreprendre grâce à des histoires de réussite locales et internationales.</p>
            </div>
            <div class="objective-card">
                <span class="objective-icon"><i class="fas fa-chalkboard-teacher"></i></span>
                <p class="objective-text"><strong>Former</strong> à travers des ateliers pratiques sur les TIC, la gestion d'entreprise, le marketing digital et le leadership.</p>
            </div>
            <div class="objective-card">
                <span class="objective-icon"><i class="fas fa-hands-helping"></i></span>
                <p class="objective-text"><strong>Accompagner</strong> chaque projet avec du mentorat, du coaching personnalisé et un réseau d'experts.</p>
            </div>
            <div class="objective-card">
                <span class="objective-icon"><i class="fas fa-trophy"></i></span>
                <p class="objective-text"><strong>Valoriser</strong> les talents en donnant de la visibilité aux meilleurs projets lors de nos événements.</p>
            </div>
        </div>
    </section>
    
    <!-- Ce que nous offrons -->
    <section class="content-section" style="margin: auto; padding: 40px 30px;">
        <div class="section-header">
            <h2>Ce que nous offrons</h2>
        </div>
        
        <div class="offerings-grid">
            <div class="offering-card">
                <span class="offering-icon"><i class="fas fa-graduation-cap"></i></span>
                <h3 class="offering-title">Formations spécialisées</h3>
                <ul class="offering-list">
                    <li>Compétences numériques et outils technologiques</li>
                    <li>Gestion d'entreprise, comptabilité simplifiée</li>
                    <li>Communication et marketing digital</li>
                    <li>Techniques de levée de fonds et financement</li>
                </ul>
            </div>
            <div class="offering-card">
                <span class="offering-icon"><i class="fas fa-users"></i></span>
                <h3 class="offering-title">Mentorat et coaching</h3>
                <ul class="offering-list">
                    <li>Accompagnement par des experts du secteur</li>
                    <li>Suivi régulier pour aider à franchir chaque étape du projet</li>
                    <li>Mise en relation avec des investisseurs et partenaires</li>
                </ul>
            </div>
            <div class="offering-card">
                <span class="offering-icon"><i class="fas fa-rocket"></i></span>
                <h3 class="offering-title">Opportunités exclusives</h3>
                <ul class="offering-list">
                    <li>Participation à des salons et forums entrepreneuriaux</li>
                    <li>Concours avec remises de prix et financements à la clé</li>
                    <li>Accès à notre réseau professionnel en RDC et à l'international</li>
                </ul>
            </div>
        </div>
    </section>
    
    <!-- Pour qui -->
    <section class="target-audience">
        <div class="content-section">
            <div class="section-header">
                <h2>Pour qui ?</h2>
                <p>Le programme s'adresse à :</p>
            </div>
            
            <div class="audience-grid">
                <div class="audience-card">
                    <span class="audience-icon"><i class="fas fa-user-graduate"></i></span>
                    <h3 class="audience-title">Jeunes étudiants</h3>
                    <p class="audience-description">Souhaitant lancer une startup</p>
                </div>
                <div class="audience-card">
                    <span class="audience-icon"><i class="fas fa-briefcase"></i></span>
                    <h3 class="audience-title">Jeunes professionnels</h3>
                    <p class="audience-description">Avec un projet innovant</p>
                </div>
                <div class="audience-card">
                    <span class="audience-icon"><i class="fas fa-users"></i></span>
                    <h3 class="audience-title">Associations ou groupes</h3>
                    <p class="audience-description">Voulant développer une activité rentable</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Comment s'inscrire -->
    <section class="content-section" id="inscription">
        <div class="section-header">
            <h2>Comment s'inscrire ?</h2>
        </div>
        
        <div class="inscription-steps">
            <div class="step-card">
                <div class="step-icon"><i class="fas fa-file-alt"></i></div>
                <div class="step-content">
                    <h3>Remplir le formulaire</h3>
                    <p>Remplir le formulaire en ligne (nom, projet, secteur d'activité)</p>
                </div>
            </div>
            <div class="step-card">
                <div class="step-icon"><i class="fas fa-check-circle"></i></div>
                <div class="step-content">
                    <h3>Sélection</h3>
                    <p>Sélection par notre équipe en fonction du potentiel du projet</p>
                </div>
            </div>
            <div class="step-card">
                <div class="step-icon"><i class="fas fa-comments"></i></div>
                <div class="step-content">
                    <h3>Entretien</h3>
                    <p>Entretien ou pitch pour évaluer vos besoins</p>
                </div>
            </div>
            <div class="step-card">
                <div class="step-icon"><i class="fas fa-handshake"></i></div>
                <div class="step-content">
                    <h3>Intégration</h3>
                    <p>Intégration dans le programme et début des sessions de formation et mentorat</p>
                </div>
            </div>
        </div>
        
    </section>
    
    <!-- Témoignages -->
    <section class="content-section testimonials-section">
      
        
        <div class="cta-message">
            <p>Vous avez une idée, un projet ou simplement l'envie d'entreprendre ? Ne restez pas seul, rejoignez une communauté dynamique qui croit en vos ambitions.</p>
            <a href="{{ route('formulaire-inscription-programme') }}" class="cta-button">Je m'inscris maintenant</a>
        </div>
    </section>
    
       
    <!-- Section des réseaux sociaux -->
    <div class="social-icons-container">
        <div class="container">
            <h3 class="social-title">Suivez-nous sur les réseaux sociaux</h3>
            <div class="social-icons">
                <a href="https://www.facebook.com/share/1ZCca7AT7b/?mibextid=wwXIfr" target="_blank" class="social-icon facebook" aria-label="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/jeuneetentrepreneurcd?igsh=MTIweHZkNjN6cWRsdg%3D%3D&utm_source=qr" target="_blank" class="social-icon instagram" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.tiktok.com/@jeune.et.entrepreneur.cd?_t=ZN-8yqTWQmUN1i&_r=1" target="_blank" class="social-icon tiktok" aria-label="TikTok">
                    <i class="fab fa-tiktok"></i>
                </a>
                <a href="https://whatsapp.com/channel/0029VbBjZYlHwXb5WwolOb0y" target="_blank" class="social-icon whatsapp" aria-label="WhatsApp">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="http://www.youtube.com/@JeuneetEntrepreneurTv" target="_blank" class="social-icon youtube" aria-label="YouTube">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>
    
    @include('includes._footer')
    
    <script src="{{ asset('js/notifications.js') }}"></script>
    <script src="{{ asset('js/mobile-menu-fix.js') }}"></script>

    <!-- Script pour le slider automatique -->
    <script src="{{ asset('js/jeune-entrepreneur-slider.js') }}"></script>
    
    <!-- Style pour les icônes sociales -->
    <link rel="stylesheet" href="{{ asset('css/social-icons.css') }}">
    {{-- Script pour le menu mobile --}}
    <script src="{{ asset('js/modern-header.js') }}"></script>
</body>
</html>
