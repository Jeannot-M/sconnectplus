<!DOCTYPE html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <title>Accueil</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modern-header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/minimal-footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/legal-links.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modern-sections.css') }}">
    <link rel="stylesheet" href="{{ asset('css/stats-section.css') }}">
    <link rel="stylesheet" href="{{ asset('css/company-intro-panel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/floating-quote-button.css') }}">
    <link rel="stylesheet" href="{{ asset('css/newsletter.css') }}">
    <link rel="stylesheet" href="{{ asset('css/testimonials.css') }}?v=1.2">
    <link rel="stylesheet" href="{{ asset('css/news.css') }}?v=1.2">
    <link rel="stylesheet" href="{{ asset('css/preloader.css') }}?v=1.2">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.17/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.17/dist/css/splide-core.min.css">
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- carousels -->
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}?v=2.1">
    @livewireStyles
    <!-- .company-intro-panel -->
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader-content">
            <picture>
                <source srcset="{{ asset('images/preload.webp') }}" type="image/webp">
                <img src="{{ asset('images/preload.PNG') }}" alt="Sconnect Logo" class="preloader-logo">
            </picture>
        </div>
    </div>

    @include('includes._header')

    {{-- Panneau de présentation de l'entreprise --}}
    <section class="company-intro-panel" style="position: relative; overflow: hidden;">
        <!-- Slider automatique en arrière-plan -->
        <div class="home-slider-container">
            <div class="home-slider">
                <div class="home-slide active"
                    style="background-image: url('{{ asset('images/slides/slides_acceuil/acceuil/IMG_6138.webp') }}');"
                    data-src-webp="{{ asset('images/slides/slides_acceuil/acceuil/IMG_6138.webp') }}"
                    data-src-jpg="{{ asset('images/slides/slides_acceuil/acceuil/IMG_6138.JPG') }}">
                </div>
                <div class="home-slide"
                    data-src-webp="{{ asset('images/slides/slides_acceuil/acceuil/IMG_6139.webp') }}"
                    data-src-jpg="{{ asset('images/slides/slides_acceuil/acceuil/IMG_6139.JPG') }}">
                </div>
                <div class="home-slide"
                    data-src-webp="{{ asset('images/slides/slides_acceuil/acceuil/IMG_6140.webp') }}"
                    data-src-jpg="{{ asset('images/slides/slides_acceuil/acceuil/IMG_6140.JPG') }}">
                </div>
                <div class="home-slide"
                    data-src-webp="{{ asset('images/slides/slides_acceuil/acceuil/IMG_6141.webp') }}"
                    data-src-jpg="{{ asset('images/slides/slides_acceuil/acceuil/IMG_6141.JPG') }}">
                </div>
                <div class="home-slide"
                    data-src-webp="{{ asset('images/slides/slides_acceuil/acceuil/IMG_6147.webp') }}"
                    data-src-jpg="{{ asset('images/slides/slides_acceuil/acceuil/IMG_6147.JPG') }}">
                </div>
                <div class="home-slide"
                    data-src-webp="{{ asset('images/slides/slides_acceuil/acceuil/IMG_6154.webp') }}"
                    data-src-jpg="{{ asset('images/slides/slides_acceuil/acceuil/IMG_6154.JPG') }}">
                </div>
                <div class="home-slide"
                    data-src-webp="{{ asset('images/slides/slides_acceuil/acceuil/IMG_6156.webp') }}"
                    data-src-jpg="{{ asset('images/slides/slides_acceuil/acceuil/IMG_6156.JPG') }}">
                </div>
                <div class="home-slide"
                    data-src-webp="{{ asset('images/slides/slides_acceuil/acceuil/IMG_6158.webp') }}"
                    data-src-jpg="{{ asset('images/slides/slides_acceuil/acceuil/IMG_6158.JPG') }}">
                </div>
                <div class="home-slide"
                    data-src-webp="{{ asset('images/slides/slides_acceuil/acceuil/IMG_6313.webp') }}"
                    data-src-jpg="{{ asset('images/slides/slides_acceuil/acceuil/IMG_6313.JPG') }}">
                </div>
                <div class="home-slide"
                    data-src-webp="{{ asset('images/slides/slides_acceuil/acceuil/IMG_6315.webp') }}"
                    data-src-jpg="{{ asset('images/slides/slides_acceuil/acceuil/IMG_6315.JPG') }}">
                </div>
                <div class="home-slide"
                    data-src-webp="{{ asset('images/slides/slides_acceuil/acceuil/IMG_6316.webp') }}"
                    data-src-jpg="{{ asset('images/slides/slides_acceuil/acceuil/IMG_6316.JPG') }}">
                </div>
                <div class="home-slide"
                    data-src-webp="{{ asset('images/slides/slides_acceuil/acceuil/IMG_6317.webp') }}"
                    data-src-jpg="{{ asset('images/slides/slides_acceuil/acceuil/IMG_6317.JPG') }}">
                </div>
                <div class="home-slide"
                    data-src-webp="{{ asset('images/slides/slides_acceuil/acceuil/IMG_6318.webp') }}"
                    data-src-jpg="{{ asset('images/slides/slides_acceuil/acceuil/IMG_6318.JPG') }}">
                </div>
            </div>
            <div class="home-slider-overlay"></div>
        </div>

        <!-- Flèches de navigation pour le slider d'accueil - déplacées ici pour z-index -->
        <div class="slider-arrow prev" id="home-prev" style="z-index: 100;">
            <i class="fas fa-chevron-left"></i>
        </div>
        <div class="slider-arrow next" id="home-next" style="z-index: 100;">
            <i class="fas fa-chevron-right"></i>
        </div>
        <!-- nos services -->
        <div class="intro-container"
            style="height: 65vh; display: flex; align-items: center; justify-content: center; position: relative; z-index: 2;">
            <div class="intro-content">
                <div class="intro-text" style="display: none;">
                    <h1 class="intro-title" style="text-transform: uppercase;">{{ __("Sconnect Plus") }}</h1>
                    <p class="intro-subtitle">{{ __("Votre partenaire technologique de confiance en RDC") }}</p>
                    <p class="intro-description">
                        {{ __("Nous sommes une entreprise innovante spécialisée dans les solutions informatiques et
                        technologiques. Depuis 2022, nous accompagnons les entreprises, institutions et entrepreneurs
                        congolais dans leur transformation digitale avec des solutions fiables, performantes et
                        accessibles.") }}
                    </p>



                    <div class="intro-cta">
                        <a href="#nos-services" class="cta-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" width="16" height="16">
                                <path d="M7 17L17 7"></path>
                                <path d="M7 7h10v10"></path>
                            </svg>
                            {{ __("Découvrir nos services") }}
                        </a>

                    </div>
                </div>

                <div class="intro-visual" style="display: none;">
                    <div class="visual-container">
                        <div class="visual-circle"></div>
                        <div class="visual-content">
                            <div class="services-slideshow" id="services-slideshow">
                                <!-- Service 1: Solutions IT -->
                                <div class="service-slide active">
                                    <div class="service-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2">
                                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                                            <line x1="8" y1="21" x2="16" y2="21"></line>
                                            <line x1="12" y1="17" x2="12" y2="21"></line>
                                        </svg>
                                    </div>
                                    <div class="service-title">{{ __("Solutions IT") }}</div>
                                    <div class="service-subtitle">{{ __("Développement & Digitalisation") }}</div>
                                </div>

                                <!-- Service 2: Télécommunications -->
                                <div class="service-slide">
                                    <div class="service-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path
                                                d="M8.56 2.75c4.37 6.03 6.02 9.42 8.03 17.72m2.54-15.38c-3.72 4.35-8.94 5.66-16.88 5.85m19.5 1.9c-3.5-.93-6.63-.82-8.94 0-2.58.92-5.01 2.86-7.44 6.32">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="service-title">{{ __("Télécommunications") }}</div>
                                    <div class="service-subtitle">{{ __("Connectivité & Réseaux") }}</div>
                                </div>

                                <!-- Service 3: Formation -->
                                <div class="service-slide">
                                    <div class="service-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2">
                                            <path d="M22 10v6M2 10l10-5 10 5-10 5z"></path>
                                            <path d="M6 12v5c3 3 9 3 12 0v-5"></path>
                                        </svg>
                                    </div>
                                    <div class="service-title">{{ __("Formation") }}</div>
                                    <div class="service-subtitle">{{ __("TIC & Entrepreneuriat") }}</div>
                                </div>

                                <!-- Service 4: Accompagnement -->
                                <div class="service-slide">
                                    <div class="service-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="9" cy="7" r="4"></circle>
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                        </svg>
                                    </div>
                                    <div class="service-title">{{ __("Accompagnement") }}</div>
                                    <div class="service-subtitle">{{ __("Mentorat & Coaching") }}</div>
                                </div>

                                <!-- Service 5: Sécurité -->
                                <div class="service-slide">
                                    <div class="service-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2">
                                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                            <path d="M9 12l2 2 4-4"></path>
                                        </svg>
                                    </div>
                                    <div class="service-title">{{ __("Sécurité") }}</div>
                                    <div class="service-subtitle">{{ __("Protection & Audit") }}</div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="b_bottom"></div>

    {{-- <div class="top_info">
        <p>{{ __(setting('text_top') ?? "") }}</p>
    </div> --}}

    {{-- BODY Devis --}}

    <section class="_section_slide" style="position: relative;">
        <div id="image-carousel" class="splide" aria-label="Beautiful Images">
            <div class="splide__track">
                <ul class="splide__list">

                </ul>
            </div>
        </div>
    </section>

    {{-- Offre service _section_slide --}}

    <section class="_section_offre">
        <!-- Glowing background circles -->
        <div class="search-bg-glow search-bg-glow-1"></div>
        <div class="search-bg-glow search-bg-glow-2"></div>
        


        <div class="_title_container">
            <h4>{{ __("Que recherchez-vous ?") }}</h4>
            <p class="_subtitle">{{ __("Trouvez rapidement ce dont vous avez besoin") }}</p>
        </div>

        <div class="search-container">
            {{-- Section de recherche --}}
            <section class="search-section" style="">
                <div class="container" style="padding: 0;">
                    <div class="search-container" style="margin: 0; max-width: 100%;">
                        <form id="site-search-form" class="search-form">
                            <div class="search-input-wrapper">
                                <input type="text" id="site-search-input" class="search-input"
                                    placeholder="{{ __('Rechercher sur le site...') }}" autocomplete="off">
                                <button type="submit" class="search-button">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                        <div id="search-results" class="search-results" style="display: none; margin-top: 20px;"></div>
                    </div>
                </div>
            </section>
        </div>

        <div class="tabs_body">
            <div class="tab_panel is-active">
                <div class="grid_offre">
                    <!-- Card 1 -->
                    <div class="new-search-card">
                        <div class="card-icon-wrapper color-phone">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3 class="card-title">{{ __("Téléphones") }}</h3>
                        <a href="/demander-devis" class="card-link">{{ __("Voir les modèles") }} <i class="fas fa-arrow-right"></i></a>
                    </div>

                    <!-- Card 2 -->
                    <div class="new-search-card">
                        <div class="card-icon-wrapper color-account">
                            <i class="fas fa-user"></i>
                        </div>
                        <h3 class="card-title">{{ __("Mon compte") }}</h3>
                        <a href="{{ route('login') }}" class="card-link">{{ __("Se connecter") }} <i class="fas fa-arrow-right"></i></a>
                    </div>

                    <!-- Card 3 -->
                    <div class="new-search-card">
                        <div class="card-icon-wrapper color-box">
                            <i class="fas fa-wifi"></i>
                        </div>
                        <h3 class="card-title">{{ __("Box Internet") }}</h3>
                        <a href="/demander-devis" class="card-link">{{ __("Changer de box") }} <i class="fas fa-arrow-right"></i></a>
                    </div>

                    <!-- Card 4 -->
                    <div class="new-search-card">
                        <div class="card-icon-wrapper color-tv">
                            <i class="fas fa-tv"></i>
                        </div>
                        <h3 class="card-title">{{ __("Smart TV") }}</h3>
                        <a href="/demander-devis" class="card-link">{{ __("Découvrir") }} <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="tab_panel">
               @livewire('help-component')
            </div>
        </div>
       
    </section>

    {{-- Section Besoin d'aide --}}
    <section class="help-section-custom">
        <div class="help-container-custom">
            <div class="help-header-custom">
                <h2>{{ __("Besoin d'aide ?") }}</h2>
                <p>{{ __("Accédez rapidement aux rubriques les plus consultées") }}</p>
            </div>
            
            <div class="help-grid-custom">
                <a href="https://wa.me/243821887423" class="help-card-custom">
                    <i class="fas fa-headset" style="color: #0062E6;"></i>
                    <span>{{ __("Assistance") }}</span>
                </a>
                
                <a href="/demander-devis" class="help-card-custom">
                    <i class="fas fa-file-invoice" style="color: #0062E6;"></i>
                    <span>{{ __("Facturation") }}</span>
                </a>
                
                <a href="#" class="help-card-custom">
                    <i class="fas fa-tags" style="color: #0062E6;"></i>
                    <span>{{ __("Offres") }}</span>
                </a>
                
                <a href="#" class="help-card-custom">
                    <i class="fas fa-shopping-bag" style="color: #0062E6;"></i>
                    <span>{{ __("Boutique") }}</span>
                </a>
            </div>
        </div>
    </section>

    <div class="b_bottom"></div>

    <section class="section_4">
        <div>
            <h4></h4>
        </div>

        <div class="fordiv _container">
            <div class="_card4">
                <img src="{{ asset('images/family_phone.jpg') }}" alt="">
                <div class="_titleCard">
                    <h5>{{ __('Des solutions parfaites d\'échange pour les enfants') }}</h5>
                    <p>{{ __("Parce que nous pensons que chacun, quel que soit l'endroit où il se trouve, devrait
                        pouvoir accéder à l'internet à haut débit et de bonne qualité.") }}</p>
                </div>
            </div>
            <div class="_card4">
                <img src="{{ asset('images/smille_on_phone.jpg') }}" alt="">
                <div class="_titleCard">
                    <h5>{{ __("Nous nous développons partout ...") }}</h5>
                    <p>{{ __("Dès aujourd'hui, rejoignez la communauté des entreprises déjà connectées à Sconnect
                        Plus...") }}</p>
                    <p>
                        {{ __("Des millions de personnes vivant dans des zones urbaines et rurales au congo, peuvent
                        désormais accéder à l'internet haut débit.") }}
                    </p>
                </div>
            </div>

        </div>
    </section>

    {{-- Nouvelle section Nos Services --}}
    <section class="modern-services-section" id="nos-services">
        <div class="services-container">
            <div class="section-header">
                <h2>{{ __("Nos Services") }}</h2>
                <p class="section-subtitle">{{ __("Des solutions innovantes pour tous vos besoins") }}</p>
                <div class="header-line"></div>
            </div>

            <div class="services-grid">
                <div class="service-card featured" id="tech4school">
                    <div class="service-icon">
                        <img src="{{ asset('images/svg/robot.jpg') }}" class="w-5" style="width: 45px;" alt=""
                            srcset="">
                    </div>
                    <h3>{{ __("Sconnect Tech4School") }}</h3>
                    <p>{{ __("Tech4School « Technology for School » est un programme after-school du Groupe Sconnect
                        Plus, dédié à l’intégration des activités de la robotique et de la réalité virtuelle (VR/AR) au
                        sein des établissements scolaires.
                        Notre programme initie les élèves à la technologie, renforce leurs compétences STEM (sciences,
                        technologies, ingénierie et mathématiques), et fait de l’école un véritable laboratoire
                        d’innovation où les jeunes apprennent à penser, créer et résoudre les défis
                        d’aujourd’hui et de demain.") }}</p>
                    <div class="service-features">
                        <span class="feature-tag">{{ __("Robotique") }}</span>
                        <span class="feature-tag">{{ __("VR/AR") }}</span>
                        <span class="feature-tag">{{ __("Ecoles") }}</span>
                    </div>
                    <div style="margin-top: 20px; padding-top: 15px; border-top: 1px solid rgba(0, 0, 0, 0.05);">
                        <a href="{{ route('tech4school') }}" style="color: #00AAE4; font-weight: bold; text-decoration: none; font-size: 14px; display: inline-flex; align-items: center; gap: 8px; transition: gap 0.2s ease;">
                            {{ __("Découvrir le programme") }} <i class="fas fa-arrow-right" style="font-size: 12px;"></i>
                        </a>
                    </div>
                </div>
                <div class="service-card featured">
                    <div class="service-icon">
                        <i class="fas fa-palette" style="color: white; font-size: 28px;"></i>
                    </div>
                    <h3>{{ __("Studio graphique") }}</h3>
                    <p>{{ __("Création de visuels, chartes graphiques et supports de communication pour valoriser votre
                        image de marque.") }}</p>
                    <div class="service-features">
                        <span class="feature-tag">{{ __("Design") }}</span>
                        <span class="feature-tag">{{ __("Charte graphique") }}</span>
                        <span class="feature-tag">{{ __("Communication") }}</span>
                    </div>
                </div>

                <div class="service-card featured">
                    <div class="service-icon">
                        <i class="fas fa-globe" style="color: white; font-size: 28px;"></i>
                    </div>
                    <h3>{{ __("Revente de services d'accès Internet") }}</h3>
                    <p>{{ __("Connexion haut débit pour entreprises et institutions avec solutions adaptées à vos
                        besoins spécifiques.") }}</p>
                    <div class="service-features">
                        <span class="feature-tag">{{ __("Haut débit") }}</span>
                        <span class="feature-tag">{{ __("Entreprises") }}</span>
                        <span class="feature-tag">{{ __("Institutions") }}</span>
                    </div>
                    <!-- <div class="featured-badge">{{ __("Populaire") }}</div> -->
                </div>

                <div class="service-card featured">
                    <div class="service-icon">
                        <i class="fas fa-briefcase" style="color: #fff; font-size: 28px;"></i>
                    </div>
                    <h3>{{ __("Accompagnement entrepreneurial") }}</h3>
                    <p>{{ __("Mentorat, incubation et coaching personnalisé pour accompagner le développement de votre
                        entreprise.") }}</p>
                    <div class="service-features">
                        <span class="feature-tag">{{ __("Mentorat") }}</span>
                        <span class="feature-tag">{{ __("Incubation") }}</span>
                        <span class="feature-tag">{{ __("Coaching") }}</span>
                    </div>
                </div>

                <div class="service-card featured">
                    <div class="service-icon">
                        <i class="fas fa-phone-alt" style="color: #fff; font-size: 28px;"></i>
                    </div>
                    <h3>{{ __("Téléphonie IP (VoIP)") }}</h3>
                    <p>{{ __("Installation et configuration de systèmes de téléphonie IP pour optimiser les
                        communications de votre entreprise.") }}</p>
                    <div class="service-features">
                        <span class="feature-tag">{{ __("VoIP") }}</span>
                        <span class="feature-tag">{{ __("Installation") }}</span>
                        <span class="feature-tag">{{ __("Configuration") }}</span>
                    </div>
                </div>

                <div class="service-card featured">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M5 12.55a11 11 0 0 1 14.08 0"></path>
                            <path d="M1.42 9a16 16 0 0 1 21.16 0"></path>
                            <path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path>
                            <line x1="12" y1="20" x2="12.01" y2="20"></line>
                        </svg>
                    </div>
                    <h3>{{ __("Mise en place de réseaux privés") }}</h3>
                    <p>{{ __("Câblage, Wi-Fi et sécurité réseau pour créer une infrastructure informatique robuste et
                        sécurisée.") }}</p>
                    <div class="service-features">
                        <span class="feature-tag">{{ __("Câblage") }}</span>
                        <span class="feature-tag">{{ __("Wi-Fi") }}</span>
                        <span class="feature-tag">{{ __("Sécurité") }}</span>
                    </div>
                </div>

                <div class="service-card featured">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                            <line x1="8" y1="21" x2="16" y2="21"></line>
                            <line x1="12" y1="17" x2="12" y2="21"></line>
                            <path d="M7 11h10"></path>
                            <path d="M7 7h3"></path>
                        </svg>
                    </div>
                    <h3>{{ __("Gestion de parcs informatiques") }}</h3>
                    <p>{{ __("Maintenance, inventaire et assistance technique pour optimiser la performance de votre
                        parc informatique.") }}</p>
                    <div class="service-features">
                        <span class="feature-tag">{{ __("Maintenance") }}</span>
                        <span class="feature-tag">{{ __("Inventaire") }}</span>
                        <span class="feature-tag">{{ __("Assistance") }}</span>
                    </div>
                </div>

                <div class="service-card featured">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M9 12l2 2 4-4"></path>
                            <path d="M21 12c.552 0 1-.449 1-1s-.448-1-1-1-1 .449-1 1 .448 1 1 1z"></path>
                            <path d="M3 12c.552 0 1-.449 1-1s-.448-1-1-1-1 .449-1 1 .448 1 1 1z"></path>
                            <path d="M12 3c.552 0 1-.449 1-1s-.448-1-1-1-1 .449-1 1 .448 1 1 1z"></path>
                            <path d="M12 21c.552 0 1-.449 1-1s-.448-1-1-1-1 .449-1 1 .448 1 1 1z"></path>
                            <path
                                d="M5.6 5.6c.39.39 1.02.39 1.41 0s.39-1.02 0-1.41-.39-1.02-1.41 0-1.02.39-1.02 1.41.39 1.02 1.02 1.02z">
                            </path>
                            <path
                                d="M18.4 18.4c.39.39 1.02.39 1.41 0s.39-1.02 0-1.41-.39-1.02-1.41 0-1.02.39-1.02 1.41.39 1.02 1.02 1.02z">
                            </path>
                            <path d="M5.6 18.4c-.39.39-.39 1.02 0 1.41s1.02.39 1.41 0 .39-1.02 0-1.41-1.02-.39-1.41 0z">
                            </path>
                            <path d="M18.4 5.6c-.39.39-.39 1.02 0 1.41s1.02.39 1.41 0 .39-1.02 0-1.41-1.02-.39-1.41 0z">
                            </path>
                        </svg>
                    </div>
                    <h3>{{ __("Sécurisation des données d'entreprise") }}</h3>
                    <p>{{ __("Sauvegarde, chiffrement et audit de sécurité pour protéger efficacement vos données
                        sensibles.") }}</p>
                    <div class="service-features">
                        <span class="feature-tag">{{ __("Sauvegarde") }}</span>
                        <span class="feature-tag">{{ __("Chiffrement") }}</span>
                        <span class="feature-tag">{{ __("Audit") }}</span>
                    </div>
                </div>
            </div>

            <div class="services-cta">
                <button class="cta-button" id="devis-button" onclick="location.href='/demander-devis'">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14,2 14,8 20,8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                        <polyline points="10,9 9,9 8,9"></polyline>
                    </svg>
                    {{ __("Demander un devis") }}
                </button>
            </div>

            <!-- Section Actualités & Offres -->
            <section class="news-section" style="position: relative;">
                <div class="news-header">
                    <h3>{{ __("Actualités & Offres") }}</h3>
                </div>

                <!-- Flèches pour Actualités -->
                <div class="slider-arrow prev" id="news-prev" style="z-index: 20;">
                    <i class="fas fa-chevron-left"></i>
                </div>
                <div class="slider-arrow next" id="news-next" style="z-index: 20;">
                    <i class="fas fa-chevron-right"></i>
                </div>

                <div id="news-carousel" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <!-- Original Set -->
                            <li class="splide__slide">
                                <div class="news-card"><img src="{{ asset('images/actualite/IMG_8291.JPG') }}"
                                        alt="Actualité Sconnect"></div>
                            </li>
                            <li class="splide__slide">
                                <div class="news-card"><img src="{{ asset('images/actualite/IMG_5996.JPG') }}"
                                        alt="Actualité Sconnect"></div>
                            </li>
                            <li class="splide__slide">
                                <div class="news-card"><img src="{{ asset('images/actualite/IMG_5997.JPG') }}"
                                        alt="Actualité Sconnect"></div>
                            </li>
                            <li class="splide__slide">
                                <div class="news-card"><img src="{{ asset('images/actualite/IMG_7484.JPG') }}"
                                        alt="Actualité Sconnect"></div>
                            </li>
                            <li class="splide__slide">
                                <div class="news-card"><img src="{{ asset('images/actualite/IMG_7489.JPG') }}"
                                        alt="Actualité Sconnect"></div>
                            </li>
                            <li class="splide__slide">
                                <div class="news-card"><img src="{{ asset('images/actualite/IMG_8288.JPG') }}"
                                        alt="Actualité Sconnect"></div>
                            </li>
                            <li class="splide__slide">
                                <div class="news-card"><img src="{{ asset('images/actualite/IMG_8299.JPG') }}"
                                        alt="Actualité Sconnect"></div>
                            </li>
                            <li class="splide__slide">
                                <div class="news-card"><img src="{{ asset('images/actualite/IMG_8302.JPG') }}"
                                        alt="Actualité Sconnect"></div>
                            </li>
                            <li class="splide__slide">
                                <div class="news-card"><img src="{{ asset('images/actualite/IMG_1.jpeg') }}"
                                        alt="Actualité Sconnect">
                                    <div class="news-overlay">Sconnect Plus ouvre ses portes à Brazzaville en République
                                        du Congo</div>
                                </div>
                            </li>
                            <!-- _section_slide -->
                            <li class="splide__slide">
                                <div class="news-card"><img src="{{ asset('images/actualite/IMG_2.jpeg') }}"
                                        alt="Actualité Sconnect">
                                    <div class="news-overlay">Sconnect Plus ouvre ses portes à Brazzaville en République
                                        du Congo</div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="news-card">
                                    <img src="{{ asset('images/actualite/IMG_3.jpeg') }}" alt="Actualité Sconnect">
                                    <div class="news-overlay">Sconnect Plus ouvre ses portes à Brazzaville en République
                                        du Congo</div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="news-card">
                                    <img src="{{ asset('images/actualite/IMG_4.jpeg') }}" alt="Actualité Sconnect">
                                    <div class="news-overlay">Sconnect Plus ouvre ses portes à Brazzaville en République
                                        du Congo</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </section>

    {{-- Section Statistiques --}}
    <section class="stats-section" id="statistiques">
        <div class="stats-container">
            <div class="section-header">
                <h2>{{ __("Nos Réalisations en Chiffres") }}</h2>
                <div class="header-line"></div>
                <p class="section-subtitle">{{ __("Des résultats qui témoignent de notre engagement") }}</p>
            </div>

            <div class="stats-grid">
                <!-- 1. Années d'expérience -->
                <div class="stat-item" data-target="5">
                    <div class="stat-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12,6 12,12 16,14"></polyline>
                        </svg>
                    </div>
                    <div class="stat-content">
                        <div class="stat-header">
                            <div class="stat-number">5</div>
                            <div class="stat-suffix"></div>
                        </div>
                        <div class="stat-label">{{ __("Années d'expérience") }}</div>
                    </div>
                </div>

                <!-- 2. Contrats achevés / Projets réalisés -->
                <div class="stat-item" data-target="143">
                    <div class="stat-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14,2 14,8 20,8"></polyline>
                            <path d="m9 15 2 2 4-4"></path>
                        </svg>
                    </div>
                    <div class="stat-content">
                        <div class="stat-header">
                            <div class="stat-number">143</div>
                            <div class="stat-suffix">+</div>
                        </div>
                        <div class="stat-label">{{ __("Contrats achevés") }}</div>
                    </div>
                </div>

                <!-- 3. Clients satisfaits -->
                <div class="stat-item" data-target="980">
                    <div class="stat-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="8.5" cy="7" r="4"></circle>
                            <path d="M12 14v4"></path>
                            <path d="M9 17h6"></path>
                        </svg>
                    </div>
                    <div class="stat-content">
                        <div class="stat-header">
                            <div class="stat-number">980</div>
                            <div class="stat-suffix">+</div>
                        </div>
                        <div class="stat-label">{{ __("Clients satisfaits") }}</div>
                    </div>
                </div>

                <!-- 4. Apport de soutien à la jeunesse -->
                <div class="stat-item" data-target="1435">
                    <div class="stat-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                            <path d="M2 17 12 7 22 17"></path>
                            <path d="M2 12 12 17 22 12"></path>
                        </svg>
                    </div>
                    <div class="stat-content">
                        <div class="stat-header">
                            <div class="stat-number">1435</div>
                            <div class="stat-suffix">+</div>
                        </div>
                        <div class="stat-label">{{ __("Jeunes accompagnés") }}</div>
                    </div>
                </div>

                <!-- 5. Visiteurs du site web -->
                <div class="stat-item" data-target="896876">
                    <div class="stat-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M3 3v18h18"></path>
                            <path d="m19 9-5 5-4-4-3 3"></path>
                        </svg>
                    </div>
                    <div class="stat-content">
                        <div class="stat-header">
                            <div class="stat-number">896876</div>
                            <div class="stat-suffix">+</div>
                        </div>
                        <div class="stat-label">{{ __("Visiteurs du site web") }}</div>
                    </div>
                </div>

                <!-- 6. Certificats attribués -->
                <div class="stat-item" data-target="253">
                    <div class="stat-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M12 15a7 7 0 1 0 0-14 7 7 0 0 0 0 14Z"></path>
                            <path
                                d="M8.21 13.89-1.05 2.9a2 2 0 0 0 2.39 2.7l2.45-.67 2.44.67a2 2 0 0 0 2.39-2.7l-1.04-2.9">
                            </path>
                        </svg>
                    </div>
                    <div class="stat-content">
                        <div class="stat-header">
                            <div class="stat-number">243</div>
                            <div class="stat-suffix">+</div>
                        </div>
                        <div class="stat-label">{{ __("Certificats attribués") }}</div>
                    </div>
                </div>

                <!-- 7. Stages offerts Devis gratuit -->
                <div class="stat-item" data-target="82">
                    <div class="stat-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20"></path>
                            <path d="M10 9h4"></path>
                            <path d="M10 13h4"></path>
                            <path d="M10 17h4"></path>
                        </svg>
                    </div>
                    <div class="stat-content">
                        <div class="stat-header">
                            <div class="stat-number">82</div>
                            <div class="stat-suffix">+</div>
                        </div>
                        <div class="stat-label">{{ __("Stages offerts") }}</div>
                    </div>
                </div>

                <!-- 8. Grandes innovations technologiques -->
                <div class="stat-item" data-target="12">
                    <div class="stat-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path
                                d="M9.663 17h4.673M12 12v5m-6.364-1C4.648 14.678 4 13.38 4 12c0-3.75 4-8 8-8s8 4.25 8 8c0 1.381-.649 2.678-1.636 4">
                            </path>
                            <path d="M12 17v4"></path>
                        </svg>
                    </div>
                    <div class="stat-content">
                        <div class="stat-header">
                            <div class="stat-number">12</div>
                            <div class="stat-suffix">+</div>
                        </div>
                        <div class="stat-label">{{ __("Innovations technologiques") }}</div>
                    </div>
                </div>

                <!-- 9. Experts IT embauchés -->
                <div class="stat-item" data-target="22">
                    <div class="stat-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                            <path d="M12 14v4"></path>
                            <path d="M9 17h6"></path>
                        </svg>
                    </div>
                    <div class="stat-content">
                        <div class="stat-header">
                            <div class="stat-number">22</div>
                            <div class="stat-suffix">+</div>
                        </div>
                        <div class="stat-label">{{ __("Experts IT embauchés") }}</div>
                    </div>
                </div>

                <!-- 10. Partenariats stratégiques -->
                <div class="stat-item" data-target="26">
                    <div class="stat-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path
                                d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5">
                            </path>
                            <path d="M9 18h6"></path>
                            <path d="M10 22h4"></path>
                        </svg>
                    </div>
                    <div class="stat-content">
                        <div class="stat-header">
                            <div class="stat-number">26</div>
                            <div class="stat-suffix">+</div>
                        </div>
                        <div class="stat-label">{{ __("Partenariats stratégiques") }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- Section Qui sommes-nous --}}
    <section class="about-us-section" id="qui-sommes-nous">
        <div class="about-container">
            <div class="about-content centered-content">
                <div class="section-header text-center">
                    <h2>{{ __('Qui sommes-nous ?') }}</h2>
                    <div class="header-line mx-auto"></div>
                </div>
               
                <div class="about-video-container">
                    <div class="image-container video-container">
                        <div class="responsive-video-wrapper">
                            <iframe src="https://www.youtube.com/embed/IxAWXHoD5z8" title="Sconnect Plus | Offre PACK ENTREPRISE PREMIUM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" style="height:400px; width: 100%;" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Témoignages --}}
    {{-- Section Témoignages --}}
    <section class="testimonials-section" id="temoignages" style="position: relative;">
        <div class="testimonials-container">
            <div class="section-header text-center">
                <span class="section-tag"
                    style="color: #00AAE4; font-weight: 800; text-transform: uppercase; font-size: 11px; letter-spacing: 2px; display: block; margin-bottom: 10px;">{{
                    __("Témoignages de nos Partenaires") }}</span>
                <h2>{{ __("Ce sont eux qui en parlent le mieux…") }}</h2>
                <div class="header-line mx-auto" style="margin-top: 15px;"></div>
            </div>

            <div id="testimonials-carousel" class="splide testimonials-slider">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="testimonial-card">
                                <div class="testimonial-stars">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>
                                <p class="testimonial-quote">« Grâce à Sconnect Plus, notre réseau informatique est
                                    enfin
                                    sécurisé. Leur équipe a su nous accompagner avec professionnalisme. Aujourd’hui, on
                                    travaille sereinement mieux qu’avant. »</p>
                                <div class="testimonial-author">
                                    <span class="author-name">Monsieur Alain BITOTA</span>
                                </div>
                            </div>
                        </li>

                        <li class="splide__slide">
                            <div class="testimonial-card">
                                <div class="testimonial-stars">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star" style="color: #e0e0e0;"></i>
                                </div>
                                <p class="testimonial-quote">« On leur a confié l’installation de l’une de nos stations
                                    relais,
                                    dans une zone difficile. Résultat : une connexion stable, rapide, et une vraie
                                    tranquillité
                                    côté technique. Merci à l’entreprise Sconnect Plus… »</p>
                                <div class="testimonial-author">
                                    <span class="author-name">Madame Djamila Traoré</span>
                                </div>
                            </div>
                        </li>

                        <li class="splide__slide">
                            <div class="testimonial-card">
                                <div class="testimonial-stars">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>
                                <p class="testimonial-quote">« L’application mobile développée par Sconnect Plus nous a
                                    changé
                                    la vie. On gère mieux nos opérations, nos équipes, et nos clients sont plus
                                    satisfaits. Nous
                                    sommes reconnaissants et nous espérons collaborer d’avantage avec Sconnect Plus. »
                                </p>
                                <div class="testimonial-author">
                                    <span class="author-name">Monsieur Bruno KAYEMBE</span>
                                </div>
                            </div>
                        </li>

                        <li class="splide__slide">
                            <div class="testimonial-card">
                                <div class="testimonial-stars">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star" style="color: #e0e0e0;"></i>
                                </div>
                                <p class="testimonial-quote">« Leur programme de formation IT est concret, pratique, à
                                    jour et
                                    bien structuré. Nos agents viennent de terminer une formation chez Sconnect Plus et
                                    ça se
                                    ressent dans leur travail quotidien. Nous disons Merci à Sconnect Plus. »</p>
                                <div class="testimonial-author">
                                    <span class="author-name">Madame Sandrine LAPOLE</span>
                                </div>
                            </div>
                        </li>

                        <li class="splide__slide">
                            <div class="testimonial-card">
                                <div class="testimonial-stars">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>
                                <p class="testimonial-quote">« Nous avons pu digitaliser toute notre structure grâce à
                                    leurs
                                    solutions simples, efficaces et bien pensées. On sent que c’est du sur-mesure. Au
                                    début
                                    j’avais des doutes car ils ne font pas assez de publicités mais à la fin on a tous
                                    compris
                                    qu’il fallait vraiment leur faire confiance, ce sont des experts. Merci Sconnect
                                    Plus… »</p>
                                <div class="testimonial-author">
                                    <span class="author-name">Madame Anne-Parfaite KINGOMA</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Flèches de navigation pour le slider témoignages -->
        <div class="slider-arrow prev" id="testimonials-prev" style="z-index: 20;">
            <i class="fas fa-chevron-left"></i>
        </div>
        <div class="slider-arrow next" id="testimonials-next" style="z-index: 20;">
            <i class="fas fa-chevron-right"></i>
        </div>
    </section>


    <!-- Section Newsletter -->
    <section class="newsletter-section">
        <div class="container" style="text-align: center;">
            <div class="newsletter-card">
                <h3>Newsletter</h3>
                <p>Recevez nos dernières actualités directement dans votre boîte mail</p>
                @if (Session::has('success'))
                <div class="alert-success"
                    style="position: fixed; top: 20px; right: 20px; z-index: 9999; background: #4CAF50; color: white; padding: 15px 25px; border-radius: 4px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); display: flex; align-items: center; justify-content: space-between; max-width: 400px;">
                    <span>{{ Session::get('success') }}</span>
                    <button onclick="this.parentElement.remove()"
                        style="background: transparent; border: none; color: white; cursor: pointer; margin-left: 15px; font-size: 18px;">
                        &times;
                    </button>
                </div>
                @endif
                <form action="{{ route('newsletter.subscribe') }}" method="POST" class="newsletter-form">
                    @csrf
                    <input type="email" name="email" placeholder="Votre adresse email" required>
                    <button type="submit">S'abonner</button>
                </form>
            </div>
        </div>
    </section>


    {{-- Footer --}}
    @include('includes._footer')

    @livewireScripts

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/notifications.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/form.js') }}"></script>
    <script src="{{ asset('js/stats-animation.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js"></script>
    <script src="{{ asset('js/splide-init.js') }}"></script>
    <script src="{{ asset('js/service-slideshow.js') }}?v=1.2" defer></script>
    <script src="{{ asset('js/home-slider.js') }}?v=1.2" defer></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialisation sécurisée de Splide
            try {
                const splideElement = document.querySelector('#image-carousel');
                // On vérifie que l'élément ET ses enfants (slides) existent avant de monter
                if (splideElement && splideElement.querySelector('.splide__list').children.length > 0) {
                    const imgSplide = new Splide('#image-carousel', {
                        "autoplay": true,
                        "arrows": true, // Enabled default Splide arrows instead of duplicates
                        heightRatio: 0.3,
                    }).mount();
                }
            } catch (e) { console.error("Erreur Splide image-carousel:", e); }

            try {
                const testimonialsElement = document.querySelector('#testimonials-carousel');
                if (testimonialsElement) {
                    const testimonialsSplide = new Splide('#testimonials-carousel', {
                        type: 'loop',
                        perPage: 3,
                        perMove: 1,
                        gap: '24px', // Standard gap
                        padding: { right: '10%' }, // Peek effect for next slide
                        focus: 0, // Align left
                        autoplay: true,
                        interval: 5000,
                        pauseOnHover: true,
                        pauseOnFocus: false,
                        resetProgress: false,
                        arrows: false,
                        pagination: true,
                        breakpoints: {
                            992: {
                                perPage: 2,
                                gap: '20px',
                                padding: { right: '10%' }
                            },
                            768: {
                                perPage: 1,
                                gap: '20px',
                                padding: { right: '15%' } // Adjusted peek for better gap visibility
                            }
                        }
                    }).mount();

                    // Forcer le redémarrage de l'autoplay après interaction si nécessaire
                    testimonialsSplide.on('moved', () => {
                        const autoplay = testimonialsSplide.Components.Autoplay;
                        if (autoplay && autoplay.isPaused()) {
                            autoplay.play();
                        }
                    });

                    // Navigation au clavier pour les témoignages
                    document.addEventListener('keydown', function (e) {
                        const rect = testimonialsElement.getBoundingClientRect();
                        const inView = rect.top < window.innerHeight && rect.bottom > 0;
                        if (inView) {
                            if (e.key === 'ArrowRight') testimonialsSplide.go('>');
                            if (e.key === 'ArrowLeft') testimonialsSplide.go('<');
                        }
                    });

                    // Custom arrows functionality for testimonials
                    const testPrev = document.getElementById('testimonials-prev');
                    const testNext = document.getElementById('testimonials-next');
                    if (testPrev) testPrev.addEventListener('click', () => testimonialsSplide.go('<'));
                    if (testNext) testNext.addEventListener('click', () => testimonialsSplide.go('>'));
                }
            } catch (e) { console.error("Erreur Splide testimonials:", e); }

            // Initialisation Splide pour News
            try {
                const newsElement = document.querySelector('#news-carousel');
                if (newsElement) {
                    const newsSplide = new Splide('#news-carousel', {
                        type: 'loop',
                        drag: 'free',
                        focus: 'center',
                        perPage: 4, // 4 slides sur desktop pour un meilleur agencement des cartes vertical
                        gap: '20px', // Espace régulier entre les cartes
                        autoHeight: true, // Ajustement dynamique de la hauteur du track
                        autoScroll: {
                            speed: 0.5, // Vitesse ralentie pour une meilleure lisibilité
                            pauseOnHover: true,
                        },
                        arrows: false,
                        pagination: false,
                        breakpoints: {
                            992: {
                                perPage: 2,
                                gap: '15px',
                                padding: { right: '10%' } // Effet de découpe de la carte suivante
                            },
                            768: {
                                perPage: 1,
                                gap: '12px',
                                padding: { right: '20%' }, // Effet de découpe plus prononcé sur mobile
                                drag: true,
                            }
                        }
                    }).mount(window.splide.Extensions);

                    const newsPrev = document.getElementById('news-prev');
                    const newsNext = document.getElementById('news-next');
                    if (newsPrev) newsPrev.addEventListener('click', () => newsSplide.go('<'));
                    if (newsNext) newsNext.addEventListener('click', () => newsSplide.go('>'));
                }
            } catch (e) { console.error("Erreur Splide news:", e); }

            // Logique pour le Slider d'accueil (Carousel du début) avec Lazy Loading
            (function () {
                let homeIdx = 0;
                const homeSlides = document.querySelectorAll('.home-slide');
                const homeContainer = document.querySelector('.home-slider-container');
                if (!homeSlides.length || !homeContainer) return;

                let autoPlayTimer;

                // Test du support WebP
                const supportsWebP = (() => {
                    const elem = document.createElement('canvas');
                    if (elem.getContext && elem.getContext('2d')) {
                        return elem.toDataURL('image/webp').indexOf('data:image/webp') === 0;
                    }
                    return false;
                })();

                function lazyLoadSlide(slide) {
                    if (slide && !slide.style.backgroundImage) {
                        const src = supportsWebP ? slide.getAttribute('data-src-webp') : slide.getAttribute('data-src-jpg');
                        if (src) {
                            slide.style.backgroundImage = `url('${src}')`;
                        }
                    }
                }

                function showSlide(index) {
                    homeIdx = (index + homeSlides.length) % homeSlides.length;

                    // Charger la diapositive courante
                    lazyLoadSlide(homeSlides[homeIdx]);

                    // Précharger la diapositive suivante
                    const nextIdx = (homeIdx + 1) % homeSlides.length;
                    lazyLoadSlide(homeSlides[nextIdx]);

                    // Précharger la diapositive précédente
                    const prevIdx = (homeIdx - 1 + homeSlides.length) % homeSlides.length;
                    lazyLoadSlide(homeSlides[prevIdx]);

                    homeSlides.forEach(s => s.classList.remove('active'));
                    homeSlides[homeIdx].classList.add('active');
                    resetAutoPlay();
                }

                function startAutoPlay() {
                    stopAutoPlay();
                    autoPlayTimer = setInterval(() => {
                        showSlide(homeIdx + 1);
                    }, 5000); // Défilement toutes les 5 secondes
                }

                function stopAutoPlay() {
                    if (autoPlayTimer) clearInterval(autoPlayTimer);
                }

                function resetAutoPlay() {
                    stopAutoPlay();
                    startAutoPlay();
                }

                // Initialisation et préchargement de la 2e slide
                lazyLoadSlide(homeSlides[0]);
                lazyLoadSlide(homeSlides[1]);
                startAutoPlay();

                // Touch support
                let touchStartX = 0;
                homeContainer.addEventListener('touchstart', e => {
                    touchStartX = e.touches[0].clientX;
                    stopAutoPlay();
                }, { passive: true });

                homeContainer.addEventListener('touchend', e => {
                    const touchEndX = e.changedTouches[0].clientX;
                    const diff = touchStartX - touchEndX;
                    if (Math.abs(diff) > 50) {
                        if (diff > 0) showSlide(homeIdx + 1);
                        else showSlide(homeIdx - 1);
                    } else {
                        startAutoPlay();
                    }
                }, { passive: true });

                // Keyboard support
                document.addEventListener('keydown', e => {
                    const rect = homeContainer.getBoundingClientRect();
                    const inView = rect.top < window.innerHeight && rect.bottom > 0;
                    if (inView) {
                        if (e.key === 'ArrowRight') showSlide(homeIdx + 1);
                        if (e.key === 'ArrowLeft') showSlide(homeIdx - 1);
                    }
                });

                // Arrow support
                const prevBtn = document.getElementById('home-prev');
                const nextBtn = document.getElementById('home-next');

                const handlePrev = (e) => {
                    if (e.type === 'touchstart') e.preventDefault();
                    showSlide(homeIdx - 1);
                };
                const handleNext = (e) => {
                    if (e.type === 'touchstart') e.preventDefault();
                    showSlide(homeIdx + 1);
                };

                if (prevBtn) {
                    prevBtn.addEventListener('click', handlePrev);
                    prevBtn.addEventListener('touchstart', handlePrev, { passive: false });
                }
                if (nextBtn) {
                    nextBtn.addEventListener('click', handleNext);
                    nextBtn.addEventListener('touchstart', handleNext, { passive: false });
                }
            })();

            // Gestion du bouton "Demander un devis"
            const devisButton = document.getElementById('devis-button');
            if (devisButton) {
                devisButton.addEventListener('click', function () {
                    const contactSection = document.getElementById('contact');
                    if (contactSection) {
                        contactSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    } else {
                        window.location.href = '/demander-devis';
                    }
                });
            }

            // Carrousel de services (Logique interne)
            const servicesSlideshow = document.getElementById('services-slideshow');
            if (servicesSlideshow) {
                const slides = servicesSlideshow.querySelectorAll('.service-slide');
                const indicators = document.querySelectorAll('.indicator');
                let currentSlide = 0;
                let slideInterval;

                function showSlide(index) {
                    slides.forEach(slide => slide.classList.remove('active'));
                    indicators.forEach(indicator => indicator.classList.remove('active'));
                    if (slides[index]) {
                        slides[index].classList.add('active');
                        if (indicators[index]) indicators[index].classList.add('active');
                    }
                }

                function nextSlide() {
                    if (slides.length > 0) {
                        currentSlide = (currentSlide + 1) % slides.length;
                        showSlide(currentSlide);
                    }
                }

                slideInterval = setInterval(nextSlide, 3000);

                indicators.forEach((indicator, index) => {
                    indicator.addEventListener('click', () => {
                        currentSlide = index;
                        showSlide(currentSlide);
                        clearInterval(slideInterval);
                        slideInterval = setInterval(nextSlide, 3000);
                    });
                });

                servicesSlideshow.addEventListener('mouseenter', () => clearInterval(slideInterval));
                servicesSlideshow.addEventListener('mouseleave', () => {
                    clearInterval(slideInterval);
                    slideInterval = setInterval(nextSlide, 3000);
                });
            }
        });
    </script>

    <!-- Modal de recherche plein écran -->
    <div id="search-overlay-modal" class="search-overlay">
        <div class="search-overlay-close-btn" id="close-search-overlay">
            <i class="fas fa-times"></i>
        </div>
        <div class="search-overlay-container">
            <div class="search-overlay-header">
                <h2>{{ __('Que recherchez-vous ?') }}</h2>
            </div>
            <div class="search-overlay-input-wrapper">
                <input type="text" id="overlay-search-input" class="overlay-search-input" placeholder="{{ __('Que recherchez-vous ?...') }}" autocomplete="off">
                <i class="fas fa-search overlay-search-icon"></i>
            </div>
            <div id="overlay-search-results" class="overlay-search-results">
                <!-- Les résultats s'afficheront ici en autocomplétion -->
            </div>
        </div>
    </div>

    @include('includes._floating-quote-btn')
    @include('includes._chatbot')

    <script src="{{ asset('js/footer-accordion.js') }}"></script>
    <script src="{{ asset('js/modern-header.js') }}"></script>
    @php
        $search_v = '1.37';
        try {
            $searchPath = public_path('js/site-search.js');
            if (file_exists($searchPath)) {
                $search_v = filemtime($searchPath);
            } else {
                $searchPathAlternative = base_path('../public_html/js/site-search.js');
                if (file_exists($searchPathAlternative)) {
                    $search_v = filemtime($searchPathAlternative);
                }
            }
        } catch (\Exception $e) {
            $search_v = '1.37';
        }

        $preloader_v = '1.37';
        try {
            $preloaderPath = public_path('js/preloader.js');
            if (file_exists($preloaderPath)) {
                $preloader_v = filemtime($preloaderPath);
            } else {
                $preloaderPathAlternative = base_path('../public_html/js/preloader.js');
                if (file_exists($preloaderPathAlternative)) {
                    $preloader_v = filemtime($preloaderPathAlternative);
                }
            }
        } catch (\Exception $e) {
            $preloader_v = '1.37';
        }
    @endphp

    <script src="{{ asset('js/site-search.js') }}?v={{ $search_v }}"></script>
    <script src="{{ asset('js/preloader.js') }}?v={{ $preloader_v }}"></script>
</body>

</html>