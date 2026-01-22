<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Grand Salon Entrepreneurial 2025 - L'événement incontournable pour les entrepreneurs et investisseurs en RDC">
    <title>Grand Salon Entrepreneurial 2025 | Sconnect Plus</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modern-header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/minimal-footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/grand-salon-entrepreneurial.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body class="gse-page">
    @include('includes._header')
    
    <!-- Hero Section Moderne avec Slider -->
    <section class="hero-section">
        <div class="hero-background">
            <!-- Slider automatique -->
            <div class="salon-slider-container">
                <div class="salon-slider">
                    <div class="salon-slide active" style="background-image: url('{{ asset('images/slides/slides_acceuil/salon/GRAND-SALON-ENTREPRENEURIAL_01.jpg') }}');"></div>
                    <div class="salon-slide" style="background-image: url('{{ asset('images/slides/slides_acceuil/salon/GRAND-SALON-ENTREPRENEURIAL_02.jpg') }}');"></div>
                    <div class="salon-slide" style="background-image: url('{{ asset('images/slides/slides_acceuil/salon/GRAND-SALON-ENTREPRENEURIAL_03.jpg') }}');"></div>
                    <div class="salon-slide" style="background-image: url('{{ asset('images/slides/slides_acceuil/salon/GRAND-SALON-ENTREPRENEURIAL_04.jpg') }}');"></div>
                    <div class="salon-slide" style="background-image: url('{{ asset('images/slides/slides_acceuil/salon/GRAND-SALON-ENTREPRENEURIAL_05.jpg') }}');"></div>
                </div>
            </div>
        </div>
        <!-- <div class="hero-overlay"></div> -->
       
        
        <div class="hero-shape">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,224L48,213.3C96,203,192,181,288,181.3C384,181,480,203,576,202.7C672,203,768,181,864,181.3C960,181,1056,203,1152,197.3C1248,192,1344,160,1392,144L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </div>
    </section>
    
    <!-- Section Présentation générale -->
    <div class="container">

    <div class="hero-content">
            <div class="event-badge">21-22 NOV 2025 | KINSHASA</div>
            <h1 class="hero-title">Grand Salon <span class="text-gradient">Entrepreneurial</span></h1>
            <p class="hero-subtitle">Connecter · Innover · Financer · Développer</p>
            
            <div class="hero-description">
                <p>Le rendez-vous incontournable des entrepreneurs et investisseurs en RDC</p>
            </div>
            
            <div class="hero-cta">
                <a href="#inscription" class="btn-primary">Je m'inscris <i class="fas fa-arrow-right"></i></a>
                
            </div>
        </div>
        <section class="content-section">
            <div class="section-header">
                <h2>Présentation générale</h2>
                <p>Le Grand Salon Entrepreneurial (GSE) est un événement annuel majeur organisé par Sconnect Plus, visant à dynamiser l'écosystème entrepreneurial congolais et à soutenir les porteurs de projets innovants.</p>
            </div>
            
            <div class="highlight-box">
                <h3>À propos de l'événement</h3>
                <p>Le Grand Salon Entrepreneurial constitue une plateforme stratégique d'envergure organisée par <strong>STL-A CONNECT PLUS (Sconnect Plus)</strong>, dédiée à la promotion de l'écosystème entrepreneurial et de l'innovation technologique. Cette initiative vise à rassembler les entrepreneurs, investisseurs, institutions financières, et acteurs du développement économique pour créer des synergies durables et favoriser l'émergence de solutions innovantes adaptées aux défis locaux et régionaux.</p>
            </div>
            
            <div class="info-cards-container">
                <div class="info-card">
                    <div class="info-card-header">
                        <div class="info-card-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3>Public cible</h3>
                    </div>
                    <div class="info-card-body">
                        <ul class="feature-list">
                            <li><i class="fas fa-check-circle"></i> Entrepreneurs et porteurs de projets innovants</li>
                            <li><i class="fas fa-check-circle"></i> Startups technologiques et digitales</li>
                            <li><i class="fas fa-check-circle"></i> Investisseurs et business angels</li>
                            <li><i class="fas fa-check-circle"></i> Institutions financières et de microfinance</li>
                            <li><i class="fas fa-check-circle"></i> Organismes de développement et ONG</li>
                            <li><i class="fas fa-check-circle"></i> Étudiants et jeunes diplômés</li>
                        </ul>
                    </div>
                </div>
                <div class="info-card">
                    <div class="info-card-header">
                        <div class="info-card-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h3>Objectifs stratégiques</h3>
                    </div>
                    <div class="info-card-body">
                        <ul class="feature-list">
                            <li><i class="fas fa-check-circle"></i> Promouvoir l'innovation et l'entrepreneuriat technologique</li>
                            <li><i class="fas fa-check-circle"></i> Faciliter l'accès au financement pour les startups</li>
                            <li><i class="fas fa-check-circle"></i> Créer des opportunités de networking professionnel</li>
                            <li><i class="fas fa-check-circle"></i> Renforcer les capacités entrepreneuriales</li>
                            <li><i class="fas fa-check-circle"></i> Favoriser les partenariats stratégiques</li>
                            <li><i class="fas fa-check-circle"></i> Contribuer au développement économique national</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <!-- Sponsor principal -->
    <div class="container">
        <section class="content-section sponsor-section">
            <div class="section-header">
                <h2>Sponsor principal : Equity BCDC</h2>
                <p>Pour cette édition 2025, Equity BCDC s'engage aux côtés de Sconnect Plus pour soutenir l'entrepreneuriat innovant en RDC.</p>
            </div>
            
            <div class="highlight-box">
                <h3>Partenaire principal : Equity BCDC</h3>
                <p>Le Grand Salon Entrepreneurial bénéficie du soutien stratégique d'<strong>Equity BCDC</strong>, institution financière leader en République Démocratique du Congo. Cette collaboration illustre l'engagement commun en faveur du développement de l'écosystème entrepreneurial national et de l'inclusion financière des jeunes entreprises innovantes.</p>
            </div>
            
            <div class="info-cards-container">
                <div class="info-card">
                    <div class="info-card-header">
                        <div class="info-card-icon">
                            <i class="fas fa-university"></i>
                        </div>
                        <h3>Apport d'Equity BCDC</h3>
                    </div>
                    <div class="info-card-body">
                        <ul class="feature-list">
                            <li><i class="fas fa-check-circle"></i> Expertise en financement des PME et startups</li>
                            <li><i class="fas fa-check-circle"></i> Réseau étendu d'investisseurs et partenaires</li>
                            <li><i class="fas fa-check-circle"></i> Solutions financières adaptées aux entrepreneurs</li>
                            <li><i class="fas fa-check-circle"></i> Accompagnement dans la structuration des projets</li>
                            <li><i class="fas fa-check-circle"></i> Formation en gestion financière d'entreprise</li>
                        </ul>
                    </div>
                </div>
                <div class="info-card">
                    <div class="info-card-header">
                        <div class="info-card-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <h3>Bénéfices pour les participants</h3>
                    </div>
                    <div class="info-card-body">
                        <ul class="feature-list">
                            <li><i class="fas fa-check-circle"></i> Accès privilégié aux produits de financement</li>
                            <li><i class="fas fa-check-circle"></i> Sessions de mentoring avec des experts</li>
                            <li><i class="fas fa-check-circle"></i> Opportunités de présentation aux investisseurs</li>
                            <li><i class="fas fa-check-circle"></i> Ateliers spécialisés en finance d'entreprise</li>
                            <li><i class="fas fa-check-circle"></i> Networking avec l'écosystème financier</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <!-- Les temps forts du salon -->
    <div class="container">
        <section class="content-section">
            <div class="section-header">
                <h2>Les temps forts du salon</h2>
                <p>Programme d'activités stratégiques conçu pour maximiser les opportunités d'échanges et de développement</p>
            </div>
            
            <div class="temps-forts-grid">
                <div class="temps-fort-item">
                    <h4>Exposition technologique et d'innovations</h4>
                    <p>Vitrine stratégique présentant plus de 200 projets innovants sélectionnés, avec démonstrations interactives et présentations de solutions technologiques adaptées aux défis locaux et régionaux.</p>
                </div>
                
                <div class="temps-fort-item">
                    <h4>Conférences magistrales</h4>
                    <p>Interventions d'experts internationaux, leaders d'opinion et entrepreneurs à succès sur les tendances de l'écosystème entrepreneurial, les stratégies de financement et les opportunités sectorielles émergentes.</p>
                </div>
                
                <div class="temps-fort-item">
                    <h4>Ateliers de renforcement des capacités</h4>
                    <p>Sessions pratiques animées par des consultants certifiés couvrant la structuration juridique, l'élaboration de business plans, le marketing digital et les stratégies de croissance.</p>
                </div>
                
                <div class="temps-fort-item">
                    <h4>Compétition de présentation de projets</h4>
                    <p>Concours structuré évalué par un jury d'experts composé de représentants d'Equity BCDC, de Sconnect Plus et d'investisseurs internationaux. Les projets lauréats bénéficient de financements, d'accompagnement personnalisé et d'opportunités d'investissement.</p>
                </div>
                
                <div class="temps-fort-item">
                    <h4>Cérémonie de reconnaissance officielle</h4>
                    <p>Remise solennelle des distinctions aux projets les plus prometteurs en présence de hautes personnalités, partenaires institutionnels et représentants du secteur privé. Moment de célébration de l'excellence entrepreneuriale congolaise.</p>
                    <a href="#criteres" class="cta-button">Consulter les critères d'évaluation</a>
                </div>
                
                <div class="temps-fort-item">
                    <h4>Sessions de networking ciblé</h4>
                    <p>Rencontres organisées par secteurs d'activité facilitant les échanges stratégiques entre entrepreneurs, investisseurs, mentors, partenaires institutionnels et représentants des médias spécialisés.</p>
                </div>
            </div>
        </section>
    </div>
    
    <!-- Critères de sélection -->
    <div class="container">
        <section class="content-section" id="criteres">
            <div class="section-header">
                <h2>Critères de sélection des projets</h2>
                <p>Pour les entrepreneurs souhaitant présenter leur projet et bénéficier d'un accompagnement ou financement, voici les critères d'évaluation.</p>
            </div>
            
            <div class="temps-forts-grid grid-layout criteres-grid">
                <div class="temps-fort-item critere-item">
                    <div class="critere-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22a10 10 0 1 0 0-20 10 10 0 0 0 0 20z"></path>
                            <path d="M12 16l4-4-4-4"></path>
                            <path d="M8 12h8"></path>
                        </svg>
                    </div>
                    <div class="critere-content">
                        <h4>Innovation</h4>
                        <p>Le projet doit apporter une solution originale ou améliorer un produit/service existant.</p>
                    </div>
                </div>
                
                <div class="temps-fort-item critere-item">
                    <div class="critere-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                        </svg>
                    </div>
                    <div class="critere-content">
                        <h4>Impact</h4>
                        <p>Le projet doit avoir un impact positif clair (économique, social ou environnemental), notamment en RDC.</p>
                    </div>
                </div>
                
                <div class="temps-fort-item critere-item">
                    <div class="critere-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 20h.01"></path>
                            <path d="M7 20v-4"></path>
                            <path d="M12 20v-8"></path>
                            <path d="M17 20v-6"></path>
                            <path d="M22 20V8"></path>
                        </svg>
                    </div>
                    <div class="critere-content">
                        <h4>Faisabilité</h4>
                        <p>Le projet doit être techniquement et financièrement réalisable, avec un plan structuré.</p>
                    </div>
                </div>
                
                <div class="temps-fort-item critere-item">
                    <div class="critere-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"></path>
                        </svg>
                    </div>
                    <div class="critere-content">
                        <h4>Potentiel de croissance</h4>
                        <p>L'idée doit présenter une capacité à se développer à moyen ou long terme.</p>
                    </div>
                </div>
                
                <div class="temps-fort-item critere-item">
                    <div class="critere-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <div class="critere-content">
                        <h4>Leadership & Présentation</h4>
                        <p>L'entrepreneur ou l'équipe doit démontrer une vision claire, un bon pitch et une forte implication.</p>
                    </div>
                </div>
                
                <div class="temps-fort-item critere-item">
                    <div class="critere-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2v4"></path>
                            <path d="M12 18v4"></path>
                            <path d="M4.93 4.93l2.83 2.83"></path>
                            <path d="M16.24 16.24l2.83 2.83"></path>
                            <path d="M2 12h4"></path>
                            <path d="M18 12h4"></path>
                            <path d="M4.93 19.07l2.83-2.83"></path>
                            <path d="M16.24 7.76l2.83-2.83"></path>
                        </svg>
                    </div>
                    <div class="critere-content">
                        <h4>Maturité du projet</h4>
                        <p>Qu'il s'agisse d'un projet en phase d'idée, de démarrage ou déjà lancé, des critères adaptés seront appliqués.</p>
                    </div>
                </div>
            </div>
            
            <div class="highlight-box">
                <p><strong>NB.</strong> Les projets présentés publiquement lors du salon (stands, pitchs, ateliers) auront plus de chances d'être repérés par le jury.</p>
            </div>
        </section>
    </div>
    
    <!-- Pourquoi participer -->
    <div class="container">
        <section class="content-section">
            <div class="section-header">
                <h2>Pourquoi participer au Grand Salon Entrepreneurial ?</h2>
            </div>
            
            <div class="temps-forts-grid grid-layout criteres-grid">
                <div class="temps-fort-item critere-item">
                    <div class="critere-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                    </div>
                    <div class="critere-content">
                        <h4>Expertise Sconnect Plus</h4>
                        <p>Bénéficier de l'expertise et de l'accompagnement de Sconnect Plus, acteur clé de la transformation numérique en RDC</p>
                    </div>
                </div>
                
                <div class="temps-fort-item critere-item">
                    <div class="critere-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                        </svg>
                    </div>
                    <div class="critere-content">
                        <h4>Financement Equity BCDC</h4>
                        <p>Accéder aux opportunités de financement offertes par Equity BCDC</p>
                    </div>
                </div>
                
                <div class="temps-fort-item critere-item">
                    <div class="critere-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <div class="critere-content">
                        <h4>Réseau professionnel</h4>
                        <p>Rencontrer un réseau riche et diversifié de professionnels et mentors</p>
                    </div>
                </div>
                
                <div class="temps-fort-item critere-item">
                    <div class="critere-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                            <line x1="8" y1="21" x2="16" y2="21"></line>
                            <line x1="12" y1="17" x2="12" y2="21"></line>
                        </svg>
                    </div>
                    <div class="critere-content">
                        <h4>Visibilité médiatique</h4>
                        <p>Valoriser son projet devant un large public et les médias</p>
                    </div>
                </div>
                
                <div class="temps-fort-item critere-item">
                    <div class="critere-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                    </div>
                    <div class="critere-content">
                        <h4>Impact collectif</h4>
                        <p>Participer à une dynamique collective d'innovation et d'impact social</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <!-- Qui peut participer -->
    <div class="container">
        <section class="content-section">
            <div class="section-header">
                <h2>Qui peut participer ?</h2>
                <p>Le Grand Salon Entrepreneurial est ouvert à tous les acteurs de l'écosystème entrepreneurial</p>
            </div>
            
            <div class="participation-grid">
                <!-- Carte 1 : Entrepreneurs -->
                <div class="participation-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="participation-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <div class="participation-content">
                        <h4>Entrepreneurs & Startups</h4>
                        <p>Porteurs de projets innovants de tous secteurs, âgés entre 18 et 65 ans</p>
                    </div>
                </div>
                
                <!-- Carte 2 : Étudiants -->
                <div class="participation-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="participation-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="participation-content">
                        <h4>Étudiants</h4>
                        <p>Jeunes talents et porteurs de projets innovants en cours de formation</p>
                    </div>
                </div>
                
                <!-- Carte 3 : Associations -->
                <div class="participation-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="participation-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="participation-content">
                        <h4>Associations</h4>
                        <p>Collectifs entrepreneuriaux et organisations à impact social</p>
                    </div>
                </div>
                
                <!-- Carte 4 : Investisseurs -->
                <div class="participation-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="participation-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="participation-content">
                        <h4>Investisseurs</h4>
                        <p>Business angels, fonds d'investissement et partenaires financiers</p>
                    </div>
                </div>
            </div>
            
            <!-- Informations pratiques -->
            <div class="info-pratiques-section" data-aos="fade-up" data-aos-delay="500">
                <h3>Informations pratiques</h3>
                <div class="info-pratiques-grid">
                    <div class="info-pratique-item" data-aos="fade-up" data-aos-delay="550">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info-content">
                            <h4>Lieu</h4>
                            <p>Kinshasa, centre des congrès (lieu précisé chaque année)</p>
                        </div>
                    </div>
                    
                    <div class="info-pratique-item" data-aos="fade-up" data-aos-delay="600">
                        <div class="info-icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <div class="info-content">
                            <h4>Date</h4>
                            <p>Organisation annuelle (souvent au deuxième trimestre)</p>
                        </div>
                    </div>
                    
                    <div class="info-pratique-item" data-aos="fade-up" data-aos-delay="650">
                        <div class="info-icon">
                            <i class="fas fa-ticket-alt"></i>
                        </div>
                        <div class="info-content">
                            <h4>Entrée</h4>
                            <p>Gratuite pour les jeunes sur inscription préalable</p>
                        </div>
                    </div>
                    
                    <div class="info-pratique-item" data-aos="fade-up" data-aos-delay="700">
                        <div class="info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info-content">
                            <h4>Contact</h4>
                            <p>Via la plateforme officielle de Sconnect Plus</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="cta-container" data-aos="fade-up" data-aos-delay="900">
                <a href="#inscription" class="cta-button">Je m'inscris au GSE 2025</a>
            </div>
        </section>
    </div>
    
    <!-- Section Intervenants -->
    <div class="container">
        <section class="content-section intervenants-section">
            <div class="section-header">
                <h2>Equipe d'Organisation du Grand Salon Entrepreneurial | GSE 2025</h2>
                <p>Cette année, le Grand Salon Entrepreneurial 2025 est placé sous la coordination d'une équipe dynamique et expérimentée, composée de professionnels passionnées par l'entreprenariat et l'innovation. Leur mission est d'assurer une organisation impeccable, favorisant la rencontre entre entrepreneurs, investisseurs et acteurs  clés de l'ecosystème économique.</p>
            </div>
            
            <div class="intervenants-grid">
                <div class="intervenant-card">
                    <div class="intervenant-image">
                        <img src="{{ asset('images/interne/IMG_2406.JPG') }}" alt="Moise DIAFOUKA - Coordonnateur du Grand Salon Entrepreneurial">
                    </div>
                    <div class="intervenant-info">
                        <h3 class="intervenant-name">Moïse DIAFOUKA</h3>
                        <div class="intervenant-title">Coordonnateur</div>
                    </div>
                </div>


                <div class="intervenant-card">
                    <div class="intervenant-image">
                        <img src="{{ asset('images/interne/IMG_6050.JPG') }}" alt="San Juan Santiago LEVA - Conseiller Administratif du GSE 2025">
                    </div>
                    <div class="intervenant-info">
                        <h3 class="intervenant-name">San Juan Santiago LEYVA</h3>
                        <div class="intervenant-title">Conseiller Administratif</div>
                    </div>
                </div>
                
                <div class="intervenant-card">
                    <div class="intervenant-image">
                        <img src="{{ asset('images/interne/IMG_5386.JPG') }}" alt="Senior KALUNDA - Chargé des Relations Publiques du GSE 2025">
                    </div>
                    <div class="intervenant-info">
                        <h3 class="intervenant-name">Senior KALUNDA</h3>
                        <div class="intervenant-title">Chargé des Relations Publiques</div>
                    </div>
                </div>
                
                <div class="intervenant-card">
                    <div class="intervenant-image">
                        <img src="{{ asset('images/interne/IMG_6049.JPG') }}" alt="Vanessa KUPA - Responsable de Communication du GSE 2025">
                    </div>
                    <div class="intervenant-info">
                        <h3 class="intervenant-name">Vanessa KUPA</h3>
                        <div class="intervenant-title">Responsable de Communication</div>
                    </div>
                </div>
                
                
                
                <div class="intervenant-card">
                    <div class="intervenant-image">
                        <img src="{{ asset('images/interne/IMG_6053.JPG') }}" alt="Pamela MBONGO - Responsable du Contenu et des Partenariats du GSE 2025">
                    </div>
                    <div class="intervenant-info">
                        <h3 class="intervenant-name">Pamela MBONGO</h3>
                        <div class="intervenant-title">Responsable du Contenu et des Partenariats</div>
                    </div>
                </div>
                
                <div class="intervenant-card">
                    <div class="intervenant-image">
                        <img src="{{ asset('images/interne/IMG_6054.JPG') }}" alt="Obed MAVAKALA - Responsable Digital du GSE 2025">
                    </div>
                    <div class="intervenant-info">
                        <h3 class="intervenant-name">Obed MAVAKALA</h3>
                        <div class="intervenant-title">Responsable Digital</div>
                    </div>
                </div>
                
                <div class="intervenant-card">
                    <div class="intervenant-image">
                        <img src="{{ asset('images/interne/IMG_6055.JPG') }}" alt="Santifié KOUNOUNGA - Responsable Technique du GSE 2025">
                    </div>
                    <div class="intervenant-info">
                        <h3 class="intervenant-name">Santifié KOUNOUNGA</h3>
                        <div class="intervenant-title">Responsable Technique</div>
                    </div>
                </div>
                
               
            </div>
        </section>
    </div>
    
    <!-- Section Inscription -->
    <div class="container" id="inscription">
        <section class="gse-section gse-inscription-section">
            <div class="section-header">
                <h2>S'inscrire au Grand Salon Entrepreneurial 2025</h2>
                <p>Choisissez votre profil pour vous inscrire à l'événement</p>
            </div>
            
            <div class="inscription-options">
                <div class="inscription-option">
                    <div class="inscription-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Investisseur / Investisseuse</h3>
                    <p>Vous souhaitez découvrir des projets innovants et potentiellement investir dans des startups prometteuses</p>
                    <a href="{{ route('gse-inscription-investisseur') }}" class="cta-button">S'inscrire comme investisseur</a>
                </div>
                
                <div class="inscription-option">
                    <div class="inscription-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Entrepreneur / Entrepreneuse</h3>
                    <p>Vous avez un projet ou une startup et souhaitez la présenter, pitcher devant des investisseurs ou exposer vos produits</p>
                    <a href="{{ route('gse-inscription-entrepreneur') }}" class="cta-button">S'inscrire comme entrepreneur</a>
                </div>
            </div>
        </section>
    </div>
    
    <!-- Section des réseaux sociaux -->
    <div class="social-icons-container">
        <div class="container">
            <h3 class="social-title">Suivez-nous sur les réseaux sociaux</h3>
            <div class="social-icons">
                <a href="https://www.facebook.com/profile.php?id=61578260466706&mibextid=wwXIfr&mibextid=wwXIfr" target="_blank" class="social-icon facebook" aria-label="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/grandsalonentrepreneurial?igsh=MWh1ajVsNmplZzJ4aQ%3D%3D&utm_source=qr" target="_blank" class="social-icon instagram" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.tiktok.com/@grdsalonentrepreneurial?_t=ZM-8yqTTsT80Yw&_r=1" target="_blank" class="social-icon tiktok" aria-label="TikTok">
                    <i class="fab fa-tiktok"></i>
                </a>
                <a href="https://whatsapp.com/channel/0029VbB2QfC8PgsOpOVNpW2G" target="_blank" class="social-icon whatsapp" aria-label="WhatsApp">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="https://youtube.com/@grandsalonentrepreneurial?si=DNtCp26-qzLbBFqb" target="_blank" class="social-icon youtube" aria-label="YouTube">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>
    
    @include('includes._footer')
    
    <!-- Script pour le bouton flottant -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const floatingCta = document.querySelector('.floating-cta');
            const headerHeight = document.querySelector('.gse-header').offsetHeight;
            const staticCtaButton = document.querySelector('a[href="#inscription"].cta-button');
            
            // Fonction pour calculer la position du bouton statique
            function getStaticButtonPosition() {
                return staticCtaButton.closest('div').getBoundingClientRect().top + window.pageYOffset - 200; // Marge de 200px
            }
            
            // Fonction pour mettre à jour la visibilité du bouton flottant
            function updateFloatingButtonVisibility() {
                const scrollPosition = window.scrollY;
                const staticCtaSection = getStaticButtonPosition();
                
                // Afficher le bouton flottant uniquement lorsque l'utilisateur a défilé au-delà de l'en-tête
                // ET n'a pas encore atteint la section du bouton statique
                if (scrollPosition > headerHeight && scrollPosition < staticCtaSection) {
                    floatingCta.classList.add('visible');
                } else {
                    floatingCta.classList.remove('visible');
                }
            }
            
            // Écouter l'événement de défilement
            window.addEventListener('scroll', updateFloatingButtonVisibility);
            
            // Écouter les changements de taille de fenêtre pour recalculer les positions
            window.addEventListener('resize', updateFloatingButtonVisibility);
            
            // Vérifier la position initiale au chargement
            // Attendre un court instant pour s'assurer que tous les éléments sont correctement rendus
            setTimeout(updateFloatingButtonVisibility, 100);
        });
    </script>
    
    <!-- Script pour le menu mobile -->
    <script src="{{ asset('js/mobile-menu-fix.js') }}"></script>
    
    <!-- Script pour le slider automatique -->
    <script src="{{ asset('js/salon-slider.js') }}"></script>
    
    <!-- Style pour les icônes sociales -->
    <link rel="stylesheet" href="{{ asset('css/social-icons.css') }}">
</body>
</html>
