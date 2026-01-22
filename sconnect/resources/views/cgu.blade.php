<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Conditions Générales d'Utilisation de Sconnect Plus - Modalités d'accès et d'utilisation du site">
    <title>Conditions Générales d'Utilisation - Sconnect Plus</title>
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
            font-size: 2.2rem;
            margin-bottom: 10px;
        }
        
        .legal-header .subtitle {
            color: #6c757d;
            font-size: 1.1rem;
            font-weight: 600;
            margin-top: 10px;
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
        
        .contact-section {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 8px;
            text-align: center;
            margin: 30px 0;
        }
        
        .contact-section h3 {
            color: #00AAE4;
            margin-bottom: 15px;
        }
        
        .contact-section p {
            margin-bottom: 10px;
        }
        
        .contact-section a {
            color: #00AAE4;
            text-decoration: none;
            font-weight: 600;
        }
        
        .contact-section a:hover {
            text-decoration: underline;
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
                font-size: 1.8rem;
            }
            
            .legal-section {
                padding: 20px 0;
            }
            
            .contact-section {
                padding: 20px 15px;
            }
        }
    </style>
</head>
<body>
    @include('includes._header')
    
    <main class="legal-page">
        <div class="legal-header">
            <h1>Conditions Générales d'Utilisation (CGU)</h1>
            <p class="subtitle">Sconnect Plus</p>
        </div>

        <div class="legal-section">
            <h2>1️⃣ Objet</h2>
            <p>Les présentes Conditions Générales d'Utilisation (ci-après "CGU") ont pour objet de définir les modalités d'accès et d'utilisation du site internet www.sconnectplus.cd (ci-après "le Site"), édité par STL-A CONNECT PLUS, entreprise informatique congolaise spécialisée dans la transformation numérique et le développement des compétences.</p>
            <p>Tout accès ou utilisation du Site implique l'acceptation sans réserve des présentes CGU par l'utilisateur.</p>
        </div>

        <div class="legal-section">
            <h2>2️⃣ Informations légales</h2>
            <p><strong>Raison sociale :</strong> STL-A CONNECT PLUS « Sconnect Plus »</p>
            <p><strong>Siège social :</strong> Kinshasa, République Démocratique du Congo</p>
        </div>

        <div class="legal-section">
            <h2>3️⃣ Accès au site</h2>
            <p>L'accès au Site est gratuit et ouvert à tout utilisateur disposant d'une connexion Internet.</p>
            <p>L'éditeur se réserve le droit de suspendre, restreindre ou interrompre l'accès au Site, sans préavis, pour des raisons techniques, de maintenance ou de sécurité.</p>
            <p>L'utilisateur est seul responsable de son équipement informatique et de sa connexion Internet.</p>
        </div>

        <div class="legal-section">
            <h2>4️⃣ Services proposés</h2>
            <p>Le Site Sconnect Plus présente :</p>
            <ul>
                <li>Les services et solutions proposés par l'entreprise (informatique, téléphonie, formation, accompagnement entrepreneurial).</li>
                <li>Des formulaires de contact et de demande d'informations.</li>
                <li>Des contenus informatifs et actualités liés aux technologies et à l'entrepreneuriat.</li>
            </ul>
            <p>Ces informations sont fournies à titre indicatif et peuvent être modifiées à tout moment par l'éditeur.</p>
        </div>

        <div class="legal-section">
            <h2>5️⃣ Obligations de l'utilisateur</h2>
            <p>En accédant au Site, l'utilisateur s'engage à :</p>
            <ul>
                <li>Utiliser le Site conformément aux lois en vigueur en RDC et aux présentes CGU.</li>
                <li>Ne pas tenter d'accéder frauduleusement à tout ou partie du Site ou d'entraver son bon fonctionnement.</li>
                <li>Ne pas transmettre de contenu illicite, diffamatoire, frauduleux, malveillant ou contraire à l'ordre public.</li>
            </ul>
            <p>Tout manquement à ces obligations peut entraîner une suspension ou une interdiction d'accès au Site, sans préjudice d'éventuelles actions judiciaires.</p>
        </div>

        <div class="legal-section">
            <h2>6️⃣ Propriété intellectuelle</h2>
            <p>L'ensemble des contenus du Site (textes, images, logos, chartes graphiques, vidéos, codes sources, etc.) est protégé par les lois relatives à la propriété intellectuelle.</p>
            <p>Toute reproduction, diffusion, modification ou utilisation non autorisée est strictement interdite.</p>
            <p>L'utilisation de tout ou partie du contenu du Site sans autorisation écrite de Sconnect Plus constitue une violation pouvant donner lieu à des poursuites judiciaires.</p>
        </div>

        <div class="legal-section">
            <h2>7️⃣ Responsabilité</h2>
            <p>L'éditeur met tout en œuvre pour assurer l'exactitude et l'accessibilité du Site, mais ne garantit pas l'absence d'erreurs, d'omissions ou d'interruptions.</p>
            <p>L'utilisation des informations fournies sur le Site se fait sous l'entière responsabilité de l'utilisateur.</p>
            <p>Sconnect Plus ne pourra être tenu responsable de tout dommage direct ou indirect résultant de l'utilisation du Site ou de l'impossibilité d'y accéder.</p>
        </div>

        <div class="legal-section">
            <h2>8️⃣ Données personnelles</h2>
            <p>Les données collectées via le Site sont traitées conformément à notre Politique de confidentialité.</p>
            <p>L'utilisateur dispose de droits d'accès, de rectification et de suppression de ses données, qu'il peut exercer en écrivant à : <a href="mailto:contact@sconnectplus.cd" style="color: #00AAE4;">contact@sconnectplus.cd</a></p>
        </div>

        <div class="legal-section">
            <h2>9️⃣ Liens externes</h2>
            <p>Le Site peut contenir des liens vers d'autres sites tiers.</p>
            <p>Sconnect Plus décline toute responsabilité quant au contenu, à l'exactitude ou à la sécurité de ces sites externes, qui sont soumis à leurs propres conditions d'utilisation.</p>
        </div>

        <div class="legal-section">
            <h2>🔟 Cookies</h2>
            <p>Le Site utilise des cookies pour améliorer l'expérience utilisateur et collecter des données statistiques.</p>
            <p>L'utilisateur peut configurer son navigateur pour refuser les cookies, mais certaines fonctionnalités pourraient alors être limitées.</p>
        </div>

        <div class="legal-section">
            <h2>1️⃣1️⃣ Modification des CGU</h2>
            <p>Sconnect Plus se réserve le droit de modifier ou d'actualiser à tout moment les présentes CGU.</p>
            <p>Les nouvelles versions seront applicables dès leur mise en ligne et opposables à tout utilisateur.</p>
        </div>

        <div class="legal-section">
            <h2>1️⃣2️⃣ Droit applicable et juridiction compétente</h2>
            <p>Les présentes CGU sont régies par le droit en vigueur en République Démocratique du Congo.</p>
            <p>En cas de litige, et après échec d'une résolution amiable, les tribunaux compétents de Kinshasa seront seuls habilités à statuer.</p>
        </div>

        <div class="contact-section">
            <h3>📩 Contact</h3>
            <p>Pour toute question relative aux présentes CGU, vous pouvez nous écrire à :</p>
            <p><a href="mailto:contact@sconnectplus.cd">contact@sconnectplus.cd</a></p>
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
</body>
</html>
