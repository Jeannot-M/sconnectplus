<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez Sconnect Plus - Acteur majeur de la transformation numérique en RDC depuis 2022">
    <title>Qui sommes-nous - Sconnect Plus</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modern-header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/minimal-footer.css') }}">
    <style>
        .about-page {
            max-width: 900px;
            margin: 0 auto;
            padding: 40px 20px;
            line-height: 1.6;
            color: #333;
        }
        
        .about-header {
            text-align: center;
            margin-bottom: 40px;
            padding: 30px 20px;
            background: linear-gradient(135deg, #00AAE4 0%, #0088cc 100%);
            color: white;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0, 170, 228, 0.3);
        }
        
        .about-header h1 {
            font-size: 2rem;
            margin-bottom: 15px;
            font-weight: 600;
            line-height: 1.3;
        }
        
        .about-header .subtitle {
            font-size: 1.1rem;
            opacity: 0.95;
            font-weight: 400;
            line-height: 1.4;
            max-width: 700px;
            margin: 0 auto;
        }
        
        .main-content {
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            margin-bottom: 30px;
        }
        
        .main-content p {
            font-size: 1.1rem;
            color: #495057;
            text-align: justify;
            line-height: 1.8;
            margin-bottom: 25px;
        }
        
        .main-content p:last-child {
            margin-bottom: 0;
        }
        
        .main-content strong {
            color: #00AAE4;
            font-weight: 600;
        }
        

        
        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(135deg, #6c757d 0%, #495057 100%);
            color: white;
            padding: 12px 24px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(108, 117, 125, 0.3);
        }
        
        .back-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(108, 117, 125, 0.4);
            text-decoration: none;
            color: white;
        }
        
        .back-button svg {
            width: 16px;
            height: 16px;
        }
        
        @media (max-width: 768px) {
            .about-page {
                padding: 20px 15px;
            }
            
            .about-header {
                padding: 25px 15px;
                margin-bottom: 30px;
            }
            
            .about-header h1 {
                font-size: 1.6rem;
            }
            
            .about-header .subtitle {
                font-size: 1rem;
            }
            
            .content-section {
                padding: 20px;
            }
            
            .intro-section {
                padding: 20px;
            }
            
            .values-grid {
                grid-template-columns: 1fr;
                gap: 15px;
            }
            
            .services-grid {
                grid-template-columns: 1fr;
                gap: 12px;
            }
            
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }
            
            .vision-section {
                padding: 25px;
            }
        }
        
        @media (max-width: 480px) {
            .about-header h1 {
                font-size: 1.4rem;
            }
            
            .content-section h2 {
                font-size: 1.2rem;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
            }
        }

        .ko {
            margin-bottom: 30px;
            text-align: center;
        }
    </style>
</head>
<body>
    @include('includes._header')
    
    <div class="about-page">
        <!-- En-tête -->
        <div class="about-headerj ko">
            <h1>Qui sommes-nous ?</h1>
            <p class="subtitle">Transformer l'avenir grâce à la technologie et à l'innovation</p>
        </div>
<div class="quote-header-image" style="background-image: url('{{ asset('images/slides/slides_acceuil/carriere/IMG_6117.JPG') }}'); background-size: cover; background-position: center; height: 400px; border-radius: 12px; margin-bottom: 30px; "></div>
        <!-- Contenu principal -->
        <div class="main-content">
            <p>
                Chez <strong>Sconnect Plus</strong>, nous croyons que la technologie est un puissant levier de développement et de transformation sociale. 
                Depuis notre création en <strong>2022</strong>, nous nous engageons à offrir aux entreprises, institutions et entrepreneurs congolais 
                des solutions numériques innovantes, fiables et accessibles.
            </p>
            
            <p>
                Notre mission est d'accompagner la transformation digitale en République Démocratique du Congo. 
                Nous déployons des solutions informatiques performantes, proposons des formations professionnelles 
                pour renforcer les compétences dans les TIC, et promouvons l'entrepreneuriat en accompagnant 
                les jeunes porteurs de projets.
            </p>
            
            <p>
                Nos valeurs fondamentales sont l'<strong>innovation</strong> - nous explorons chaque jour de nouvelles solutions 
                pour répondre aux besoins évolutifs de nos clients, le <strong>professionnalisme</strong> - nous garantissons 
                des services de qualité et un accompagnement personnalisé, et l'<strong>impact social</strong> - nous croyons 
                en une technologie au service du progrès humain et du développement local.
            </p>
            
            <p>
                Concrètement, nous fournissons des équipements informatiques et téléphoniques, créons des applications 
                mobiles et des logiciels sur mesure, organisons des formations certifiantes en TIC et entrepreneuriat. 
                Nous organisons également des forums, salons, conférences et expositions. Nos expertises incluent 
                les solutions de téléphonie IP, l'installation de réseaux sécurisés, la gestion de parcs informatiques 
                et la protection des données de nos clients.
            </p>
            
            <p>
                Notre vision est de faire de Sconnect Plus un acteur majeur de la transformation numérique en RDC 
                et en Afrique, en créant un écosystème où les entreprises et les jeunes entrepreneurs prospèrent 
                grâce à la technologie. Nous travaillons chaque jour pour bâtir un avenir numérique inclusif 
                et durable pour notre continent.
            </p>
        </div>

        <a href="{{ url('/') }}" class="back-button">
            <svg fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
            </svg>
            Revenir à l'Accueil
        </a>
    </div>
    
    @include('includes._footer')
    {{-- Script pour le menu mobile --}}
        <script src="{{ asset('js/modern-header.js') }}"></script>
</body>
</html>
