<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mentions légales de Sconnect Plus - Informations légales et réglementaires">
    <title>Mentions légales - Sconnect Plus</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modern-header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/minimal-footer.css') }}">
    <style>
        .legal-page {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px 20px;
            line-height: 1.6;
            color: #333;
        }
        
        .legal-header {
            text-align: center;
            margin-bottom: 40px;
            padding-bottom: 20px;
        }
        
        .legal-header h1 {
            color: #00AAE4;
            font-size: 2.5rem;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }
        
        .legal-section {
            margin-bottom: 35px;
            padding: 25px 0;
        }
        
        .legal-section h2 {
            color: #00AAE4;
            font-size: 1.3rem;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .legal-section p {
            margin-bottom: 12px;
        }
        
        .legal-section ul {
            margin: 15px 0;
            padding-left: 20px;
        }
        
        .legal-section li {
            margin-bottom: 8px;
        }
        
        .company-info {
            padding: 20px 0;
            margin-bottom: 30px;
        }
        
        .company-info h3 {
            margin-bottom: 15px;
            font-size: 1.2rem;
            color: #00AAE4;
        }
        
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
            margin-top: 15px;
        }
        
        .info-item {
            padding: 10px 0;
            border-bottom: 1px solid #e9ecef;
        }
        
        .info-item strong {
            display: block;
            margin-bottom: 5px;
        }
        
        .back-button {
            text-align: center;
            margin-top: 40px;
        }
        
        .btn-back {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: #00AAE4;
            color: white;
            padding: 12px 25px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 170, 228, 0.3);
        }
        
        .btn-back:hover {
            background: #0088cc;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 170, 228, 0.4);
            color: white;
            text-decoration: none;
        }
        
        .btn-back svg {
            width: 18px;
            height: 18px;
        }
        
        @media (max-width: 768px) {
            .legal-page {
                padding: 20px 15px;
            }
            
            .legal-header h1 {
                font-size: 2rem;
                flex-direction: column;
                gap: 10px;
            }
            
            .legal-section {
                padding: 20px 15px;
            }
            
            .info-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    @include('includes._header')
    
    <main class="legal-page">
        <div class="legal-header">
            <h1>
                📜 Mentions légales
            </h1>
        </div>
        
        <div class="company-info">
            <h3>STL-A CONNECT PLUS « Sconnect Plus »</h3>
            <p>Entreprise informatique congolaise spécialisée dans les solutions technologiques innovantes</p>
            <div class="info-grid">
                <div class="info-item">
                    <strong>Date de création</strong>
                    2022
                </div>
                <div class="info-item">
                    <strong>Siège social</strong>
                    Kinshasa, République Démocratique du Congo
                </div>
                <div class="info-item">
                    <strong>Téléphone</strong>
                    +243821887423 / +243999258836
                </div>
                <div class="info-item">
                    <strong>Email</strong>
                    contact@sconnectplus.cd
                </div>
                <div class="info-item">
                    <strong>Directeur de publication</strong>
                    Jenn BIWA
                </div>
            </div>
        </div>

        <div class="legal-section">
            <h2>1️⃣ Informations générales</h2>
            <p><strong>Raison sociale :</strong> STL-A CONNECT PLUS « Sconnect Plus en sigle »</p>
            <p><strong>Forme juridique :</strong> Entreprise informatique congolaise</p>
            <p><strong>Date de création :</strong> 2022</p>
            <p><strong>Siège social :</strong> Kinshasa, République Démocratique du Congo</p>
            <p><strong>Téléphone :</strong> +243821887423 / +243999258836</p>
            <p><strong>Adresse e-mail :</strong> contact@sconnectplus.cd</p>
            <p><strong>Directeur de publication :</strong> Jenn BIWA</p>
        </div>

        <div class="legal-section">
            <h2>2️⃣ Base légale</h2>
            <div class="info-grid">
                <div class="info-item">
                    <strong>RCCM :</strong> CD/KNG/RCCM/22-B-02548
                </div>
                <div class="info-item">
                    <strong>IDNAT :</strong> 01-F4300-N15150Q
                </div>
                <div class="info-item">
                    <strong>INPP :</strong> Certificat n°111239
                </div>
                <div class="info-item">
                    <strong>CNSS :</strong> 1018057200
                </div>
                <div class="info-item">
                    <strong>Certificat ONEM :</strong> 026874C22
                </div>
                <div class="info-item">
                    <strong>Numéro d'impôt :</strong> A2217431X
                </div>
            </div>
        </div>

        <div class="legal-section">
            <h2>3️⃣ Objet du site</h2>
            <p>Le site Sconnect Plus a pour objectif de présenter les services et solutions proposés par l'entreprise, notamment :</p>
            <ul>
                <li>La commercialisation d'équipements informatiques et téléphoniques</li>
                <li>La création d'applications mobiles et logiciels sur mesure</li>
                <li>La formation dans les TIC et l'entrepreneuriat</li>
                <li>L'organisation d'événements professionnels (forums, salons, conférences)</li>
                <li>Les prestations liées aux réseaux, téléphonie IP, gestion et sécurisation de parcs informatiques</li>
            </ul>
        </div>

        <div class="legal-section">
            <h2>4️⃣ Propriété intellectuelle</h2>
            <p>L'ensemble du contenu du site (textes, images, logos, éléments graphiques, vidéos, bases de données, etc.) est la propriété exclusive de Sconnect Plus ou fait l'objet d'une licence d'utilisation.</p>
            <p>Toute reproduction, représentation, modification, diffusion ou exploitation partielle ou totale de ces contenus, sans autorisation écrite préalable, est strictement interdite et expose l'auteur à des poursuites judiciaires.</p>
        </div>

        <div class="legal-section">
            <h2>5️⃣ Responsabilité</h2>
            <p>Sconnect Plus s'efforce d'assurer la fiabilité des informations présentes sur son site. Toutefois :</p>
            <ul>
                <li>L'entreprise ne peut être tenue responsable d'erreurs ou d'omissions.</li>
                <li>L'utilisation des informations ou services disponibles sur le site se fait sous la responsabilité exclusive de l'utilisateur.</li>
                <li>Le site peut contenir des liens vers d'autres sites externes, pour lesquels Sconnect Plus décline toute responsabilité concernant leur contenu ou leur politique de confidentialité.</li>
            </ul>
        </div>

        <div class="legal-section">
            <h2>6️⃣ Protection des données personnelles</h2>
            <p>Conformément aux réglementations en vigueur, Sconnect Plus s'engage à :</p>
            <ul>
                <li>Collecter uniquement les données nécessaires à la bonne exécution de ses services</li>
                <li>Protéger la confidentialité et la sécurité des informations fournies par les utilisateurs</li>
                <li>Ne pas céder ni vendre les données personnelles à des tiers sans accord préalable</li>
            </ul>
            <p>L'utilisateur dispose d'un droit d'accès, de rectification ou de suppression de ses données, qu'il peut exercer en adressant une demande à : <a href="mailto:contact@sconnectplus.cd" style="color: #00AAE4;">contact@sconnectplus.cd</a>.</p>
        </div>

        <div class="legal-section">
            <h2>7️⃣ Cookies</h2>
            <p>Le site Sconnect Plus peut utiliser des cookies afin d'améliorer l'expérience utilisateur, faciliter la navigation et réaliser des statistiques de visite.</p>
            <p>L'utilisateur peut à tout moment désactiver l'usage de cookies dans les paramètres de son navigateur.</p>
        </div>

        <div class="legal-section">
            <h2>8️⃣ Droit applicable et juridiction compétente</h2>
            <p>Les présentes mentions légales sont régies par la législation en vigueur en République Démocratique du Congo.</p>
            <p>En cas de litige, et à défaut de solution amiable, les tribunaux compétents de Kinshasa seront seuls habilités à statuer.</p>
        </div>

        <div class="back-button">
            <a href="{{ route('welcome') }}" class="btn-back">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M19 12H5"></path>
                    <path d="M12 19l-7-7 7-7"></path>
                </svg>
                Revenir à l'Accueil
            </a>
        </div>
    </main>
    
    @include('includes._footer')
    {{-- Script pour le menu mobile --}}
    <script src="{{ asset('js/modern-header.js') }}"></script>
</body>
</html>
