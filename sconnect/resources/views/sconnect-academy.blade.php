@extends('pages.layout')

@section('title', 'Sconnect Academy')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/sconnect-academy.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sconnect-academy-sections.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sconnect-academy-enhanced.css') }}">
    <link rel="stylesheet" href="{{ asset('css/academy.css') }}">
    <!-- Swiper CSS - Version 8 stable -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <style>
        .navbar {
            background-color: transparent !important;
            box-shadow: none !important;
        }
        
        /* Styles pour le slider */
        .academy-hero {
            position: relative;
            width: 100%;
            /* height: 600px; */
            overflow: hidden;
        }
        
        .swiper-container {
            width: 100%;
            height: 100%;
        }
        
        .swiper-slide .slide-image {
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
        }
        
        .swiper-pagination-bullet {
            width: 12px;
            height: 12px;
            background: #fff;
            opacity: 0.7;
        }
        
        .swiper-pagination-bullet-active {
            opacity: 1;
            background: #00AAE4;
        }
        
        /* Styles pour la vidéo responsive */
        .academy-video-container {
            width: 100%;
            max-width: 800px;
            margin: 40px auto;
            padding: 0 15px;
        }
        
        .responsive-video {
            position: relative;
            padding-bottom: 56.25%; /* Ratio 16:9 */
            height: 0;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }
        
        .responsive-video iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }
        
        @media (max-width: 768px) {
            .academy-video-container {
                margin: 30px auto;
            }
        }
        
        .swiper-button-next, .swiper-button-prev {
            color: #fff;
            background: rgba(0, 0, 0, 0.3);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .swiper-button-next:after, .swiper-button-prev:after {
            font-size: 24px;
        }
        
        .hero-shape {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: 10;
        }
        
        .audience-section .section-container {
            box-shadow: none !important;
        }
    </style>
@endsection

@section('pages')
    <!-- Hero Section avec Slider -->
    <section class="academy-hero">
        <div class="swiper-container academy-swiper">
            <div class="swiper-wrapper">
               
                <div class="swiper-slide">
                    <div class="slide-image" style="background-image: url('{{ asset('images/slides/slides_acceuil/academy/sconnect-academy_01.jpg') }}');"></div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-image" style="background-image: url('{{ asset('images/slides/slides_acceuil/academy/sconnect-academy_02.jpg') }}');"></div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-image" style="background-image: url('{{ asset('images/slides/slides_acceuil/academy/sconnect-academy_03.jpg') }}');"></div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-image" style="background-image: url('{{ asset('images/slides/slides_acceuil/academy/sconnect-academy_04.jpg') }}');"></div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-image" style="background-image: url('{{ asset('images/slides/slides_acceuil/academy/sconnect-academy_05.jpg') }}');"></div>
                </div>
            </div>
            
        </div>
        
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="container"  >
        <section class="content-section academy-about">

        <div class="hero-content">
            <div class="academy-badge">FORMATION • CERTIFICATION • EXCELLENCE</div>
            <h1 class="hero-title">SCONNECT <span class="text-gradient">ACADEMY</span></h1>
            <p class="hero-subtitle">Transformez vos ambitions en compétences et vos compétences en opportunités</p>
            
            <div class="hero-cta">
                <a href="#programmes" class="btn-primary">Découvrir nos formations <i class="fas fa-arrow-right"></i></a>
                <a href="{{ route('contact.index') }}" class="btn-secondary">Nous contacter</a>
            </div>
        </div>

        
            <div class="section-header">
                <h2>À propos de Sconnect Academy</h2>
                <p>Le pôle éducatif et de développement des compétences du Groupe Sconnect Plus</p>
            </div>
            
            <div class="">
                <h3>Notre mission</h3>
                    <p>Sconnect Academy est le pôle éducatif et de développement des compétences du Groupe Sconnect Plus. Nous formons, accompagnons et certifions les talents d'aujourd'hui et de demain, en leur donnant les outils nécessaires pour exceller dans un marché du travail en constante évolution.</p>
                    <div class="mission-tagline">
                        <span>Transformer les ambitions en compétences et les compétences en opportunités.</span>
                    </div>
                </div>
                
                <div class="services-section">
                    <h3>Nos services</h3>
                    <ul class="checklist">
                        <li>
                            <i class="fas fa-graduation-cap"></i>
                            <div class="checklist-content">
                                <h4>Formation de qualité</h4>
                                <p>Des programmes de formation conçus par des experts du domaine pour répondre aux besoins actuels du marché.</p>
                                <span class="badge">Expertise</span>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-users"></i>
                            <div class="checklist-content">
                                <h4>Accompagnement personnalisé</h4>
                                <p>Un suivi individuel pour vous aider à développer vos compétences et atteindre vos objectifs professionnels.</p>
                                <span class="badge">Mentorat</span>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-certificate"></i>
                            <div class="checklist-content">
                                <h4>Certifications reconnues</h4>
                                <p>Des certifications reconnues par l'industrie pour valoriser votre parcours et booster votre carrière.</p>
                                <span class="badge">Valorisation</span>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <div class="distinction-section">
                    <h3>Ce qui nous distingue</h3>
                    <ul class="checklist">
                        <li>
                            <i class="fas fa-briefcase"></i>
                            <div class="checklist-content">
                                <p>Des programmes conçus par des experts en lien direct avec les besoins des entreprises.</p>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-hands-helping"></i>
                            <div class="checklist-content">
                                <p>Un apprentissage pratique à travers des ateliers, travaux dirigés et projets réels.</p>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-award"></i>
                            <div class="checklist-content">
                                <p>Des certifications reconnues pour booster votre CV et votre employabilité.</p>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-chalkboard-teacher"></i>
                            <div class="checklist-content">
                                <p>Un corps formateur qualifié et expérimenté, passionné par la transmission du savoir.</p>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-laptop-house"></i>
                            <div class="checklist-content">
                                <p>Des formations hybrides : présentiel, en ligne ou en format mixte.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Target Audience Section -->
    <section class="audience-section">
        <div class="container">
            <div class="section-container" style="box-shadow: none;">
                <div class="section-header">
                    <h2>À qui s'adressent nos formations ?</h2>
                    <p>Nos programmes sont conçus pour répondre aux besoins de différents profils</p>
                </div>

                <div class="audience-categories">
                    <div class="audience-category">
                        <h3><i class="fas fa-user-graduate"></i> Étudiants et diplômés</h3>
                        <ul class="checklist">
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <div class="checklist-content">
                                    <p>Complétez votre formation académique avec des compétences pratiques</p>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <div class="checklist-content">
                                    <p>Acquérez des compétences recherchées par les employeurs</p>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <div class="checklist-content">
                                    <p>Préparez-vous à une intégration réussie dans le monde professionnel</p>
                                </div>
                            </li>
                        </ul>
                        <div class="audience-cta">
                            <a href="#programmes" class="btn-outline">Voir les formations <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="audience-category">
                        <h3><i class="fas fa-briefcase"></i> Professionnels en activité</h3>
                        <ul class="checklist">
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <div class="checklist-content">
                                    <p>Perfectionnez vos compétences techniques et managériales</p>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <div class="checklist-content">
                                    <p>Adaptez-vous aux évolutions de votre secteur d'activité</p>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <div class="checklist-content">
                                    <p>Préparez une reconversion professionnelle avec des formations flexibles</p>
                                </div>
                            </li>
                        </ul>
                        <div class="audience-cta">
                            <a href="#programmes" class="btn-outline">Voir les formations <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="audience-category">
                        <h3><i class="fas fa-lightbulb"></i> Entrepreneurs et porteurs de projets</h3>
                        <ul class="checklist">
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <div class="checklist-content">
                                    <p>Acquérez les compétences nécessaires pour lancer votre entreprise</p>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <div class="checklist-content">
                                    <p>Développez votre activité avec des outils efficaces</p>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <div class="checklist-content">
                                    <p>Transformez vos idées en projets viables et durables</p>
                                </div>
                            </li>
                        </ul>
                        <div class="audience-cta">
                            <a href="#programmes" class="btn-outline">Voir les formations <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="audience-category">
                        <h3><i class="fas fa-building"></i> Entreprises et organisations</h3>
                        <ul class="checklist">
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <div class="checklist-content">
                                    <p>Investissez dans le développement des compétences de vos équipes</p>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <div class="checklist-content">
                                    <p>Bénéficiez de formations sur mesure pour votre organisation</p>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <div class="checklist-content">
                                    <p>Adaptez nos programmes aux besoins spécifiques de votre structure</p>
                                </div>
                            </li>
                        </ul>
                        <div class="audience-cta">
                            <a href="#contact" class="btn-outline">Nous contacter <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section class="programs-section" id="programmes">
        <div class="container">
            <div class="section-container">
                <div class="section-header">
                    <h2>Nos programmes de formation</h2>
                    <p>Découvrez nos formations professionnelles dans différentes spécialités</p>
                </div>

            <div class="programs-filter">
                <div class="filter-tabs">
                    <div class="filter-tab active" data-category="it">
                        <i class="fas fa-laptop-code"></i> IT
                    </div>
                    <div class="filter-tab" data-category="english">
                        <i class="fas fa-language"></i> Anglais
                    </div>
                    <div class="filter-tab" data-category="management">
                        <i class="fas fa-tasks"></i> Administration & Gestion
                    </div>
                    <div class="filter-tab" data-category="telecom">
                        <i class="fas fa-broadcast-tower"></i> Télécommunications
                    </div>
                    <div class="filter-tab" data-category="skills">
                        <i class="fas fa-tools"></i> Compétences complémentaires
                    </div>
                </div>
            </div>

            <!-- IT Programs -->
            <div class="programs-grid category-content active" id="it-programs">
                <div class="program-card featured">
                    <div class="program-header">
                        <h3>SÉCURITÉ INFORMATIQUE </h3>
                    </div>
                    <div class="program-body">
                        <p class="program-desc">Protégez les systèmes et les données contre les cybermenaces croissantes grâce à une maîtrise approfondie des outils et méthodes de cybersécurité.</p>
                        <div class="program-modules">
                            <h4>Modules de base</h4>
                            <ul class="module-list">
                           <li>Introduction à la cybersécurité</li> 
                            <li>Typologie des menaces et attaques</li>
                            <li>Cryptographie et chiffrement des données</li>
                            <li>Gestion des accès et authentification</li>
                            <li>Sécurité des réseaux et pare-feu</li>
                            <li>Analyse et prévention des intrusions</li>
                            <li>Plan de reprise et continuité d’activité</li>
                            </ul>
                        </div>
                        <div class="program-details">
                            <div class="program-duration">
                                <span class="detail-label">Durée</span>
                                <span class="detail-value">2 mois</span>
                            </div>
                         
                            <div class="program-price">
                                <span class="detail-label">Prix</span>
                                <span class="detail-value">168.00 USD</span>
                            </div>
                          
                        </div>
                    </div>
                    <div class="program-footer">
                        <a href="{{ route('sconnect-academy.registration') }}" class="btn btn-primary">S'inscrire</a>
                    </div>
                </div>

                <div class="program-card">
                    <div class="program-header">
                        <h3>PROGRAMMATION & DÉVELOPPEMENT Web / Mobile</h3>
                    </div>
                    <div class="program-body">
                        <p class="program-desc">Apprenez à créer des sites web modernes et des applications mobiles innovantes, de la conception au déploiement.</p>
                        <div class="program-modules">
                            <h4>Modules de base</h4>
                            <ul class="module-list">
                                <li>Java/Kotlin (Android)</li>
                                <li>Introduction à la programmation</li>
                                 <li>HTML & CSS</li>
                                 <li>JavaScript</li>
                                 <li>PHP & MySQL</li>
                                 <li>Développement mobile avec framework (React Native, Flutter)</li>
                                 <li>API et intégrations</li>
                                 <li>Projet pratique de développement</li>
                            </ul>
                        </div>
                        <div class="program-details">
                            <div class="program-duration">
                                <span class="detail-label">Durée</span>
                                <span class="detail-value">2 mois</span>
                            </div>
                            <div class="program-format">
                                <span class="detail-label">Prix</span>
                                <span class="detail-value">197.00 USD</span>
                            </div>
                           
                        </div>
                    </div>
                    <div class="program-footer">
                        <a href="{{ route('sconnect-academy.registration') }}" class="btn btn-primary">S'inscrire</a>
                    </div>
                </div>

                <div class="program-card">
                    <div class="program-header">
                        <h3>ADMINISTRATION RÉSEAUX & SYSTÈMES | WINDOWS SERVER</h3>
                    </div>
                    <div class="program-body">
                        <p class="program-desc">Devenez un professionnel capable d’installer, configurer et maintenir des infrastructures réseaux performantes et sécurisées.</p>
                        <div class="program-modules">
                            <h4>Modules de base</h4>
                            <ul class="module-list">
                                <li>Introduction aux réseaux</li>
                                <li>Installation et configuration des systèmes</li>
                                <li>Gestion des utilisateurs et des droits</li>
                                <li>Protocoles réseau et routage</li>
                                <li>Maintenance et dépannage</li>
                                <li>Virtualisation et cloud computing</li>
                                <li>Sécurité réseau</li>
                            </ul>
                        </div>
                        <div class="program-details">
                            <div class="program-duration">
                                <span class="detail-label">Durée</span>
                                <span class="detail-value">2 mois</span>
                            </div>
                            <div class="program-format">
                                <span class="detail-label">Prix</span>
                                <span class="detail-value">168.00 USD</span>
                            </div>
                           
                        </div>
                    </div>
                    <div class="program-footer">
                        <a href="{{ route('sconnect-academy.registration') }}" class="btn btn-primary">S'inscrire</a>
                    </div>
                </div>
                
                <div class="program-card">
                    <div class="program-header">
                        <h3>TECHNOLOGIES CISCO & MIKROTIK</h3>
                    </div>
                    <div class="program-body">
                        <p class="program-desc">Préparez-vous aux certifications reconnues et prenez en main les équipements réseaux indispensables dans les entreprises.</p>
                        <div class="program-modules">
                            <h4>Modules de base</h4>
                            <ul class="module-list">
                                <li>Présentation des équipements Cisco et Mikrotik</li>
                                <li>Configuration de base des routeurs</li>
                                <li>VLAN et segmentation réseau</li>
                                <li>Routage dynamique</li>
                                <li>Sécurité et filtrage du trafic</li>
                                <li>Préparation à la certification Cisco / Mikrotik</li>
                            </ul>
                        </div>
                        <div class="program-details">
                            <div class="program-duration">
                                <span class="detail-label">Durée</span>
                                <span class="detail-value">2 mois</span>
                            </div>
                            <div class="program-format">
                                <span class="detail-label">Prix</span>
                                <span class="detail-value">165.00 USD</span>
                            </div>
                            
                        </div>
                    </div>
                    <div class="program-footer">
                        <a href="{{ route('sconnect-academy.registration') }}" class="btn btn-primary">S'inscrire</a>
                    </div>
                </div>

                <div class="program-card">
                    <div class="program-header">
                        <h3> ANALYSE DES DONNÉES (Data Analysis)</h3>
                    </div>
                    <div class="program-body">
                        <p class="program-desc">Exploitez la puissance des données pour éclairer les décisions grâce à Excel, SQL et Power BI.</p>
                        <div class="program-modules">
                            <h4>Modules de base</h4>
                            <ul class="module-list">
                                <li>Fondamentaux de l’analyse de données</li>
                                <li>Utilisation avancée d’Excel</li>
                                <li>SQL pour l’analyse de données</li>
                                <li>Visualisation avec Power BI</li>
                                <li>Tableaux de bord et reporting</li>
                                <li>Projet pratique d’analyse</li>
                            </ul>
                        </div>
                        <div class="program-details">
                            <div class="program-duration">
                                <span class="detail-label">Durée</span>
                                <span class="detail-value">2 mois</span>
                            </div>
                            <div class="program-format">
                                <span class="detail-label">Prix</span>
                                <span class="detail-value">178.00 USD</span>
                            </div>
                        </div>
                    </div>
                    <div class="program-footer">
                        <a href="{{ route('sconnect-academy.registration') }}" class="btn btn-primary">S'inscrire</a>
                    </div>
                </div>

                <div class="program-card">
                    <div class="program-header">
                        <h3>INFOGRAPHIE & DESIGN GRAPHIQUE </h3>
                    </div>
                    <div class="program-body">
                        <p class="program-desc">Exprimez votre créativité et maîtrisez les outils pour créer des visuels attractifs et professionnels.</p>
                        <div class="program-modules">
                            <h4>Modules de base</h4>
                            <ul class="module-list">
                                <li>Bases du design graphique</li>
                                <li>Photoshop – Retouche et montage d’images</li>
                                <li>Illustrator – Création vectorielle</li>
                                <li>Canva – Design rapide et marketing visuel</li>
                                <li>Création de supports publicitaires</li>
                                <li>Projet créatif</li>
                            </ul>
                        </div>
                        <div class="program-details">
                            <div class="program-duration">
                                <span class="detail-label">Durée</span>
                                <span class="detail-value">2 mois</span>
                            </div>
                            <div class="program-format">
                                <span class="detail-label">Prix</span>
                                <span class="detail-value">168.00 USD</span>
                            </div>
                        </div>
                    </div>
                    <div class="program-footer">
                        <a href="{{ route('sconnect-academy.registration') }}" class="btn btn-primary">S'inscrire</a>
                    </div>
                </div>

                <div class="program-card">
                    <div class="program-header">
                        <h3>MONTAGE VIDÉO PRO </h3>
                    </div>
                    <div class="program-body">
                        <p class="program-desc">Apprenez à raconter des histoires puissantes grâce à la vidéo, de la prise de vue au montage final.</p>
                        <div class="program-modules">
                            <h4>Modules de base</h4>
                            <ul class="module-list">
                                <li>Bases du montage vidéo</li>
                                <li>Adobe Premiere – Montage et transitions</li>
                                <li>After Effects – Effets spéciaux et animation</li>
                                <li>Étalonnage et correction colorimétrique</li>
                                <li>Storytelling visuel</li>
                                <li>Export et diffusion</li>
                            </ul>
                        </div>
                        <div class="program-details">
                            <div class="program-duration">
                                <span class="detail-label">Durée</span>
                                <span class="detail-value">2 mois</span>
                            </div>
                            <div class="program-format">
                                <span class="detail-label">Prix</span>
                                <span class="detail-value">166.00 USD</span>
                            </div>
                        </div>
                    </div>
                    <div class="program-footer">
                        <a href="{{ route('sconnect-academy.registration') }}" class="btn btn-primary">S'inscrire</a>
                    </div>
                </div>

                <div class="program-card">
                    <div class="program-header">
                        <h3> GESTION DES PARCS INFORMATIQUES (GPI)</h3>
                    </div>
                    <div class="program-body">
                        <p class="program-desc">Assurez la disponibilité, la sécurité et la performance du parc informatique des entreprises.</p>
                        <div class="program-modules">
                            <h4>Modules de base</h4>
                            <ul class="module-list">
                                <li>Introduction à la gestion de parc informatique</li>
                                <li>Inventaire et suivi des équipements</li>
                                <li>Installation et déploiement de logiciels</li>
                               <li> Maintenance préventive et corrective</li>
                               <li> Gestion des licences et mises à jour</li>
                                <li>Supervision et monitoring des systèmes</li>
                               <li> Sécurité et gestion des accès</li>
                               <li> Gestion des incidents et support utilisateur</li>
                            </ul>
                        </div>
                        <div class="program-details">
                            <div class="program-duration">
                                <span class="detail-label">Durée</span>
                                <span class="detail-value">2 mois</span>
                            </div>
                            <div class="program-format">
                                <span class="detail-label">Prix</span>
                                <span class="detail-value">178.00 USD</span>
                            </div>
                        </div>
                    </div>
                    <div class="program-footer">
                        <a href="{{ route('sconnect-academy.registration') }}" class="btn btn-primary">S'inscrire</a>
                    </div>
                </div>
            </div>

            <!-- English Programs -->
            <div class="programs-grid category-content" id="english-programs" style="display: none;">
                <div class="program-card">
                    <div class="program-header">
                        <h3>ANGLAIS ACADÉMIQUE & PROFESSIONNEL</h3>
                    </div>
                    <div class="program-body">
                        <p class="program-desc">
                            Maîtrisez l’anglais académique ou professionnel et préparez-vous aux certifications internationales pour réussir dans un contexte globalisé.
                            Parlez anglais avec la méthode la plus simple, interactive, rapide et professionnelle.
                        </p>
                        <div class="program-modules">
                            <h4>Modules de base</h4>
                            <ul class="module-list">
                                <li>Bases grammaticales et vocabulaire courant</li>
                                <li>Techniques de compréhension écrite et orale</li>
                                <li>Expression orale fluide et prononciation</li>
                                <li>Rédaction de courriels et documents professionnels</li>
                                <li>Anglais pour les réunions et présentations</li>
                                <li>Communication interculturelle</li>
                                <li>Jeux de rôle et simulations professionnelles</li>
                            </ul>
                        </div>
                        <div class="program-details">
                            <div class="program-duration">
                                <span class="detail-label">Durée</span>
                                <span class="detail-value">3 mois</span>
                            </div>
                            <div class="program-format">
                                <span class="detail-label">Prix</span>
                                <span class="detail-value">278.00 USD</span>
                            </div>
                        </div>
                    </div>
                    <div class="program-footer">
                        <a href="{{ route('sconnect-academy.registration') }}" class="btn btn-primary">S'inscrire</a>
                    </div>
                </div>


                <div class="program-card">
                    <div class="program-header">
                        <h3>PRÉPARATION AUX TESTS INTERNATIONAUX (TOEFL, IELTS, TOEIC) - SEVEN | POWER ENGLISH</h3>
                    </div>
                    <div class="program-body">
                        <p class="program-desc">
                            Préparez-vous efficacement aux tests internationaux TOEFL, IELTS et TOEIC grâce au programme SEVEN | POWER ENGLISH.
                            Bénéficiez d’un entraînement intensif et ciblé pour maximiser vos résultats aux examens.
                        </p>
                        <div class="program-modules">
                            <h4>Modules de base</h4>
                            <ul class="module-list">
                                <li>Présentation des différents tests et formats</li>
                                <li>Stratégies pour la compréhension orale</li>
                                <li>Techniques de lecture rapide et efficace</li>
                                <li>Rédaction d’essais et lettres</li>
                                <li>Entraînements à l’expression orale</li>
                                <li>Simulations complètes d’examen</li>
                                <li>Analyse et correction des erreurs</li>
                            </ul>
                        </div>
                        <div class="program-details">
                            <div class="program-duration">
                                <span class="detail-label">Durée</span>
                                <span class="detail-value">1 mois</span>
                            </div>
                            <div class="program-format">
                                <span class="detail-label">Prix</span>
                                <span class="detail-value">168.00 USD</span>
                            </div>
                        </div>
                    </div>
                    <div class="program-footer">
                        <a href="{{ route('sconnect-academy.registration') }}" class="btn btn-primary">S'inscrire</a>
                    </div>
                </div>

            </div>

            <!-- Management Programs -->
            <div class="programs-grid category-content" id="management-programs" style="display: none;">
                <div class="program-card">
                    <div class="program-header">
                        <h3>RESSOURCES HUMAINES</h3>
                    </div>
                    <div class="program-body">
                        <p class="program-desc">
                            Devenez un acteur ou une actrice clé du capital humain en maîtrisant le recrutement, la formation et la gestion du personnel.
                        </p>
                        <div class="program-modules">
                            <h4>Modules de base</h4>
                            <ul class="module-list">
                                <li>Introduction à la gestion des RH</li>
                                <li>Recrutement et sélection du personnel</li>
                                <li>Élaboration des fiches de poste</li>
                                <li>Formation et développement des compétences</li>
                                <li>Évaluation des performances</li>
                                <li>Gestion des conflits au travail</li>
                                <li>Administration du personnel et paie</li>
                            </ul>
                        </div>
                        <div class="program-details">
                            <div class="program-duration">
                                <span class="detail-label">Durée</span>
                                <span class="detail-value">2 mois</span>
                            </div>
                            <div class="program-format">
                                <span class="detail-label">Prix</span>
                                <span class="detail-value">153.00 USD</span>
                            </div>
                        </div>
                    </div>
                    <div class="program-footer">
                        <a href="{{ route('sconnect-academy.registration') }}" class="btn btn-primary">S'inscrire</a>
                    </div>
                </div>


                <!-- MANAGEMENT DES ORGANISATIONS / ENTREPRISES -->
                <div class="program-card">
                    <div class="program-header">
                        <h3>MANAGEMENT DES ORGANISATIONS / ENTREPRISES</h3>
                    </div>
                    <div class="program-body">
                        <p class="program-desc">
                            Acquérez les compétences pour diriger, motiver et transformer vos équipes vers l’excellence opérationnelle.
                        </p>
                        <div class="program-modules">
                            <h4>Modules de base</h4>
                            <ul class="module-list">
                                <li>Bases du management et du leadership</li>
                                <li>Organisation et planification stratégique</li>
                                <li>Gestion d’équipe et motivation</li>
                                <li>Prise de décision et résolution de problèmes</li>
                                <li>Contrôle de gestion et indicateurs de performance</li>
                                <li>Gestion du changement</li>
                                <li>Projet de management</li>
                            </ul>
                        </div>
                        <div class="program-details">
                            <div class="program-duration">
                                <span class="detail-label">Durée</span>
                                <span class="detail-value">2 mois</span>
                            </div>
                            <div class="program-format">
                                <span class="detail-label">Prix</span>
                                <span class="detail-value">157.00 USD</span>
                            </div>
                        </div>
                    </div>
                    <div class="program-footer">
                        <a href="{{ route('sconnect-academy.registration') }}" class="btn btn-primary">S'inscrire</a>
                    </div>
                </div>

                <!-- SECRÉTARIAT PROFESSIONNEL -->
                <div class="program-card">
                    <div class="program-header">
                        <h3>SECRÉTARIAT PROFESSIONNEL</h3>
                    </div>
                    <div class="program-body">
                        <p class="program-desc">
                            Développez votre efficacité administrative pour devenir un pilier indispensable au bon fonctionnement de toute organisation.
                        </p>
                        <div class="program-modules">
                            <h4>Modules de base</h4>
                            <ul class="module-list">
                                <li>Maîtrise des outils bureautiques (Word, Excel, PowerPoint)</li>
                                <li>Gestion des courriers et agendas</li>
                                <li>Archivage et gestion documentaire</li>
                                <li>Communication écrite et orale</li>
                                <li>Organisation de réunions et événements</li>
                                <li>Techniques de rédaction administrative</li>
                                <li>Accueil et service client</li>
                            </ul>
                        </div>
                        <div class="program-details">
                            <div class="program-duration">
                                <span class="detail-label">Durée</span>
                                <span class="detail-value">3 mois</span>
                            </div>
                            <div class="program-format">
                                <span class="detail-label">Prix</span>
                                <span class="detail-value">278.00 USD</span>
                            </div>
                        </div>
                    </div>
                    <div class="program-footer">
                        <a href="{{ route('sconnect-academy.registration') }}" class="btn btn-primary">S'inscrire</a>
                    </div>
                </div>

            </div>

            <!-- Telecom Programs -->
            <div class="programs-grid category-content" id="telecom-programs" style="display: none;">
                <!-- TRANSMISSION Par VSAT, Fibre optique, Faisceaux hertziens -->
                    <div class="program-card">
                        <div class="program-header">
                            <h3>TRANSMISSION Par VSAT, Fibre optique, Faisceaux hertziens</h3>
                        </div>
                        <div class="program-body">
                            <p class="program-desc">
                                Apprenez à déployer et maintenir des réseaux de transmission haute performance, essentiels à la connectivité d’aujourd’hui.
                            </p>
                            <div class="program-modules">
                                <h4>Modules de base</h4>
                                <ul class="module-list">
                                    <li>Principes de la transmission de données</li>
                                    <li>Installation et configuration VSAT</li>
                                    <li>Techniques de pose et soudure de fibre optique</li>
                                    <li>Faisceaux hertziens – réglages et alignement</li>
                                    <li>Mesure de performance et tests</li>
                                    <li>Maintenance préventive et corrective</li>
                                    <li>Sécurité et conformité</li>
                                </ul>
                            </div>
                            <div class="program-details">
                                <div class="program-duration">
                                    <span class="detail-label">Durée</span>
                                    <span class="detail-value">2 mois</span>
                                </div>
                                <div class="program-format">
                                    <span class="detail-label">Prix</span>
                                    <span class="detail-value">182.00 USD</span>
                                </div>
                            </div>
                        </div>
                        <div class="program-footer">
                            <a href="{{ route('sconnect-academy.registration') }}" class="btn btn-primary">S'inscrire</a>
                        </div>
                    </div>

                    <!-- VIDÉOSURVEILLANCE (CCTV) -->
                    <div class="program-card">
                        <div class="program-header">
                            <h3>VIDÉOSURVEILLANCE (CCTV)</h3>
                        </div>
                        <div class="program-body">
                            <p class="program-desc">
                                Maîtrisez les technologies de surveillance pour garantir la sécurité optimale des sites et infrastructures modernes.
                            </p>
                            <div class="program-modules">
                                <h4>Modules de base</h4>
                                <ul class="module-list">
                                    <li>Bases de la vidéosurveillance</li>
                                    <li>Types de caméras et enregistreurs</li>
                                    <li>Installation et câblage</li>
                                    <li>Configuration logicielle et réseau</li>
                                    <li>Gestion des enregistrements et sauvegardes</li>
                                    <li>Maintenance et dépannage</li>
                                    <li>Intégration avec systèmes d’alarme</li>
                                </ul>
                            </div>
                            <div class="program-details">
                                <div class="program-duration">
                                    <span class="detail-label">Durée</span>
                                    <span class="detail-value">2 mois</span>
                                </div>
                                <div class="program-format">
                                    <span class="detail-label">Prix</span>
                                    <span class="detail-value">189.00 USD</span>
                                </div>
                            </div>
                        </div>
                        <div class="program-footer">
                            <a href="{{ route('sconnect-academy.registration') }}" class="btn btn-primary">S'inscrire</a>
                        </div>
                    </div>

                    <!-- RADIOFRÉQUENCE -->
                    <div class="program-card">
                        <div class="program-header">
                            <h3>RADIOFRÉQUENCE</h3>
                        </div>
                        <div class="program-body">
                            <p class="program-desc">
                                Devenez expert et optimisez la couverture pour des communications sans faille.
                            </p>
                            <div class="program-modules">
                                <h4>Modules de base</h4>
                                <ul class="module-list">
                                    <li>Introduction aux ondes radio</li>
                                    <li>Équipements et antennes</li>
                                    <li>Paramétrage et réglages</li>
                                    <li>Mesures et diagnostics</li>
                                    <li>Optimisation de la couverture</li>
                                    <li>Sécurité en environnement radio</li>
                                    <li>Étude de cas pratique</li>
                                </ul>
                            </div>
                            <div class="program-details">
                                <div class="program-duration">
                                    <span class="detail-label">Durée</span>
                                    <span class="detail-value">2 mois</span>
                                </div>
                                <div class="program-format">
                                    <span class="detail-label">Prix</span>
                                    <span class="detail-value">191.00 USD</span>
                                </div>
                            </div>
                        </div>
                        <div class="program-footer">
                            <a href="{{ route('sconnect-academy.registration') }}" class="btn btn-primary">S'inscrire</a>
                        </div>
                    </div>

            </div>

            <!-- Complementary Skills Programs -->
            <div class="programs-grid category-content" id="skills-programs" style="display: none;">
                <!-- MARKETING DIGITAL & RÉSEAUX SOCIAUX -->
                <div class="program-card">
                    <div class="program-header">
                        <h3>MARKETING DIGITAL & RÉSEAUX SOCIAUX</h3>
                    </div>
                    <div class="program-body">
                        <p class="program-desc">
                            Devenez le stratège incontournable du web et bâtissez des communautés engagées autour de votre marque.
                        </p>
                        <div class="program-modules">
                            <h4>Modules de base</h4>
                            <ul class="module-list">
                                <li>Introduction au marketing digital</li>
                                <li>Fondamentaux du référencement naturel (SEO)</li>
                                <li>Publicité en ligne (Google Ads, Facebook Ads)</li>
                                <li>Création et gestion de contenu (textes, images, vidéos)</li>
                                <li>Stratégies de réseaux sociaux (Facebook, Instagram, LinkedIn, Twitter)</li>
                                <li>Gestion et animation des communautés en ligne</li>
                                <li>Analyse des performances et outils de mesure (Google Analytics, Insights)</li>
                                <li>Email marketing et automation</li>
                                <li>E-commerce et stratégies de conversion</li>
                                <li>Projet pratique : création d’une campagne digitale complète</li>
                            </ul>
                        </div>
                        <div class="program-details">
                            <div class="program-duration">
                                <span class="detail-label">Durée</span>
                                <span class="detail-value">1 mois</span>
                            </div>
                            <div class="program-format">
                                <span class="detail-label">Prix</span>
                                <span class="detail-value">88.00 USD</span>
                            </div>
                        </div>
                    </div>
                    <div class="program-footer">
                        <a href="{{ route('sconnect-academy.registration') }}" class="btn btn-primary">S'inscrire</a>
                    </div>
                </div>

                <!-- GESTION DE PROJETS -->
                <div class="program-card">
                    <div class="program-header">
                        <h3>GESTION DE PROJETS</h3>
                    </div>
                    <div class="program-body">
                        <p class="program-desc">
                            Maîtrisez l’art de piloter vos projets avec efficacité pour garantir leur succès, quel que soit leur enjeu.
                        </p>
                        <div class="program-modules">
                            <h4>Modules de base</h4>
                            <ul class="module-list">
                                <li>Introduction à la gestion de projet</li>
                                <li>Cycle de vie d’un projet et méthodologies classiques (Waterfall)</li>
                                <li>Méthodes agiles : Scrum et Kanban</li>
                                <li>Planification, organisation et gestion des ressources</li>
                                <li>Outils de gestion de projet (Trello, Jira, MS Project)</li>
                                <li>Gestion des risques et résolution de problèmes</li>
                                <li>Communication et leadership dans un projet</li>
                                <li>Suivi, contrôle et reporting</li>
                                <li>Clôture et évaluation d’un projet</li>
                                <li>Étude de cas et simulation de gestion de projet</li>
                            </ul>
                        </div>
                        <div class="program-details">
                            <div class="program-duration">
                                <span class="detail-label">Durée</span>
                                <span class="detail-value">1 mois</span>
                            </div>
                            <div class="program-format">
                                <span class="detail-label">Prix</span>
                                <span class="detail-value">89.00 USD</span>
                            </div>
                        </div>
                    </div>
                    <div class="program-footer">
                        <a href="{{ route('sconnect-academy.registration') }}" class="btn btn-primary">S'inscrire</a>
                    </div>
                </div>

                <!-- COMMERCE INTERNATIONAL & LOGISTIQUE -->
                <div class="program-card">
                    <div class="program-header">
                        <h3>COMMERCE INTERNATIONAL & LOGISTIQUE</h3>
                    </div>
                    <div class="program-body">
                        <p class="program-desc">
                            Ouvrez les portes du marché mondial et optimisez la chaîne logistique pour conquérir de nouveaux horizons commerciaux.
                        </p>
                        <div class="program-modules">
                            <h4>Modules de base</h4>
                            <ul class="module-list">
                                <li>Introduction au commerce international</li>
                                <li>Réglementations douanières et procédures d’import-export</li>
                                <li>Gestion des contrats commerciaux internationaux</li>
                                <li>Modes de transport et gestion logistique</li>
                                <li>Chaîne d’approvisionnement et gestion des stocks</li>
                                <li>Gestion des risques dans le commerce international</li>
                                <li>Négociation interculturelle et communication</li>
                                <li>Utilisation des outils digitaux pour la logistique</li>
                                <li>Documentation et paiement international</li>
                                <li>Projet pratique : simulation d’une opération d’import-export</li>
                            </ul>
                        </div>
                        <div class="program-details">
                            <div class="program-duration">
                                <span class="detail-label">Durée</span>
                                <span class="detail-value">2 mois</span>
                            </div>
                            <div class="program-format">
                                <span class="detail-label">Prix</span>
                                <span class="detail-value">176.00 USD</span>
                            </div>
                        </div>
                    </div>
                    <div class="program-footer">
                        <a href="{{ route('sconnect-academy.registration') }}" class="btn btn-primary">S'inscrire</a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Terms and Conditions Section -->
    <section class="academy-terms">
        <div class="academy-container">
            <div class="section-title">
                <h2>Conditions Générales</h2>
                <p>Veuillez lire attentivement les conditions générales de Sconnect Academy</p>
            </div>

            <div class="terms-container">
                <div class="terms-content">
                    <div class="terms-section">
                        <h3>1. Inscription et admission</h3>
                        <ul class="check-list">
                            <li>L'inscription aux formations de Sconnect Academy est ouverte à toute personne physique majeure ou mineure avec autorisation parentale.</li>
                            <li>L'admission définitive est soumise à l'étude du dossier de candidature et à la disponibilité des places.</li>
                            <li>Sconnect Academy se réserve le droit de refuser une candidature sans avoir à justifier sa décision.</li>
                            <li>L'inscription n'est définitive qu'après validation du dossier complet et règlement des frais d'inscription.</li>
                        </ul>
                    </div>

                    <div class="terms-section">
                        <h3>2. Frais de formation</h3>
                        <ul class="check-list">
                            <li>Les frais de formation sont communiqués aux candidats avant l'inscription et peuvent varier selon les programmes.</li>
                            <li>Le paiement peut être effectué en une ou plusieurs fois selon les modalités définies lors de l'inscription.</li>
                            <li>En cas d'abandon de la formation par l'apprenant, aucun remboursement ne sera effectué sauf cas de force majeure dûment justifié.</li>
                            <li>Des frais supplémentaires peuvent être demandés pour certains supports pédagogiques ou activités spécifiques.</li>
                        </ul>
                    </div>

                    <div class="terms-section">
                        <h3>3. Assiduité et ponctualité</h3>
                        <ul class="check-list">
                            <li>L'assiduité et la ponctualité sont obligatoires pour tous les cours et activités prévus dans le programme de formation.</li>
                            <li>Toute absence doit être justifiée par écrit dans un délai de 48 heures.</li>
                            <li>Au-delà de 20% d'absences, même justifiées, Sconnect Academy se réserve le droit d'exclure l'apprenant sans remboursement.</li>
                            <li>Les retards répétés peuvent entraîner des sanctions allant jusqu'à l'exclusion temporaire ou définitive.</li>
                        </ul>
                    </div>

                    <div class="terms-section">
                        <h3>4. Comportement et discipline</h3>
                        <ul class="check-list">
                            <li>Les apprenants s'engagent à adopter un comportement respectueux envers le personnel, les formateurs et les autres apprenants.</li>
                            <li>Tout comportement perturbateur, violent ou discriminatoire pourra entraîner l'exclusion immédiate sans remboursement.</li>
                            <li>L'usage des téléphones portables est strictement limité pendant les heures de cours.</li>
                            <li>Les apprenants sont tenus de respecter les locaux et le matériel mis à leur disposition.</li>
                        </ul>
                    </div>

                    <div class="terms-section">
                        <h3>5. Propriété intellectuelle</h3>
                        <ul class="check-list">
                            <li>Tous les supports pédagogiques fournis aux apprenants sont protégés par le droit d'auteur.</li>
                            <li>La reproduction, diffusion ou utilisation des supports de cours à des fins commerciales est strictement interdite.</li>
                            <li>Les apprenants autorisent Sconnect Academy à utiliser leurs travaux à des fins pédagogiques ou promotionnelles.</li>
                            <li>Les logiciels mis à disposition des apprenants doivent être utilisés conformément aux licences d'utilisation.</li>
                        </ul>
                    </div>

                    <div class="terms-section">
                        <h3>6. Certification</h3>
                        <ul class="check-list">
                            <li>La délivrance des certificats est conditionnée par la réussite aux évaluations et le respect des conditions d'assiduité.</li>
                            <li>Les modalités d'évaluation sont communiquées aux apprenants en début de formation.</li>
                            <li>En cas d'échec, des sessions de rattrapage peuvent être proposées selon les modalités définies par Sconnect Academy.</li>
                            <li>Les certificats délivrés par Sconnect Academy ne constituent pas des diplômes d'État mais des attestations de compétences.</li>
                        </ul>
                    </div>

                    <div class="terms-section">
                        <h3>7. Protection des données personnelles</h3>
                        <ul class="check-list">
                            <li>Les informations recueillies lors de l'inscription sont nécessaires pour la gestion administrative et pédagogique des formations.</li>
                            <li>Conformément à la législation en vigueur, les apprenants disposent d'un droit d'accès, de rectification et de suppression des données les concernant.</li>
                            <li>Sconnect Academy s'engage à ne pas communiquer ces informations à des tiers sans consentement préalable.</li>
                            <li>Les données sont conservées pendant une durée maximale de 5 ans après la fin de la formation.</li>
                        </ul>
                    </div>

                    <div class="terms-section">
                        <h3>8. Modification ou annulation de la formation</h3>
                        <ul class="check-list">
                            <li>Sconnect Academy se réserve le droit de modifier le contenu, les horaires ou les intervenants d'une formation pour des raisons pédagogiques ou organisationnelles.</li>
                            <li>En cas d'annulation d'une formation par Sconnect Academy, les frais d'inscription seront intégralement remboursés.</li>
                            <li>Sconnect Academy ne pourra être tenu responsable des frais engagés par les apprenants (transport, hébergement) en cas d'annulation.</li>
                            <li>En cas de force majeure (catastrophe naturelle, épidémie, troubles sociaux), les cours pourront être dispensés à distance.</li>
                        </ul>
                    </div>

                    <div class="terms-section">
                        <h3>9. Acceptation des conditions</h3>
                        <ul class="check-list">
                            <li>L'inscription à une formation de Sconnect Academy implique l'acceptation pleine et entière des présentes conditions générales.</li>
                            <li>Ces conditions générales peuvent être modifiées à tout moment, la version applicable étant celle en vigueur à la date d'inscription.</li>
                            <li>Tout litige relatif à l'interprétation ou à l'exécution des présentes conditions générales sera soumis aux tribunaux compétents de Kinshasa.</li>
                        </ul>
                    </div>
                </div>

                <div class="terms-contact">
                    <h3>Besoin d'informations supplémentaires ?</h3>
                    <p>Pour toute question concernant nos conditions générales, n'hésitez pas à nous contacter :</p>
                    <div class="contact-info">
                        <p><i class="fas fa-envelope"></i> training@sconnectplus.cd</p>
                        <p><i class="fas fa-phone"></i> Contact : +243 821 887 423</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('js/sconnect-academy-tabs.js') }}"></script>
    <script src="{{ asset('js/academy.js') }}"></script>
    <!-- Swiper JS - Version 8 stable -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialisation du slider Swiper pour Academy
            var academySwiper = new Swiper('.academy-swiper', {
                // Paramètres essentiels
                slidesPerView: 1,
                spaceBetween: 0,
                loop: true,
                speed: 800,
                
                // Autoplay
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                
                // Navigation
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                
                // Effet de transition
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },
            });
            
            console.log('Swiper Academy initialisé avec succès');
            
            // Script original de gestion des onglets
            console.log('Script de gestion des onglets initialisé');
            
            // Sélectionner tous les onglets et les contenus avec les classes correctes
            const tabs = document.querySelectorAll('[data-category]');
            const contents = document.querySelectorAll('[id$="-programs"]');
            
            console.log('Nombre d\'onglets trouvés:', tabs.length);
            console.log('Nombre de contenus trouvés:', contents.length);
            
            // Ajouter un écouteur d'événement à chaque onglet
            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    const category = this.getAttribute('data-category');
                    console.log('Onglet cliqué:', category);
                    
                    // Retirer la classe active de tous les onglets
                    tabs.forEach(t => t.classList.remove('active'));
                    
                    // Ajouter la classe active à l'onglet cliqué
                    this.classList.add('active');
                    
                    // Masquer tous les contenus
                    contents.forEach(content => {
                        content.classList.remove('active');
                        content.style.display = 'none';
                    });
                    
                    // Afficher le contenu correspondant
                    const targetContent = document.getElementById(category + '-programs');
                    if (targetContent) {
                        targetContent.classList.add('active');
                        targetContent.style.display = 'grid';
                        console.log('Contenu affiché:', targetContent.id);
                    } else {
                        console.error('Contenu cible non trouvé pour la catégorie:', category);
                    }
                });
            });
        });
    </script>
@endsection

