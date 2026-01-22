<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Politique de confidentialité de Sconnect Plus - Protection et traitement de vos données personnelles">
    <title>Politique de confidentialité - Sconnect Plus</title>
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
            font-weight: 700;
        }
        
        .legal-header .subtitle {
            color: #6c757d;
            font-size: 1.1rem;
            font-style: italic;
        }
        
        .legal-intro {
            background-color: #f8f9fa;
            padding: 25px;
            border-radius: 8px;
            margin-bottom: 30px;
            font-size: 1.1rem;
            color: #495057;
            text-align: justify;
        }
        
        .legal-section {
            margin-bottom: 30px;
            padding: 25px;
            background-color: #fff;
            border-radius: 8px;
            border: 1px solid #e9ecef;
        }
        
        .legal-section h2 {
            color: #00AAE4;
            font-size: 1.4rem;
            margin-bottom: 15px;
            font-weight: 600;
        }
        
        .legal-section p {
            margin-bottom: 12px;
            color: #495057;
            text-align: justify;
        }
        
        .legal-section ul {
            margin: 15px 0;
            padding-left: 20px;
        }
        
        .legal-section li {
            margin-bottom: 8px;
            color: #495057;
        }
        
        .contact-info {
            background-color: #f1f8ff;
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid #00AAE4;
            margin: 20px 0;
        }
        
        .contact-info h3 {
            color: #00AAE4;
            margin-bottom: 15px;
        }
        
        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(135deg, #00AAE4 0%, #0088cc 100%);
            color: white;
            padding: 12px 24px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 170, 228, 0.3);
            margin-top: 30px;
        }
        
        .back-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 170, 228, 0.4);
            text-decoration: none;
            color: white;
        }
        
        .back-button svg {
            width: 16px;
            height: 16px;
        }
        
        @media (max-width: 768px) {
            .legal-page {
                padding: 20px 15px;
            }
            
            .legal-header h1 {
                font-size: 2rem;
            }
            
            .legal-section {
                padding: 20px;
            }
            
            .legal-intro {
                padding: 20px;
                font-size: 1rem;
            }
        }
        
        @media (max-width: 480px) {
            .legal-header h1 {
                font-size: 1.8rem;
            }
            
            .legal-section {
                padding: 15px;
            }
            
            .legal-section h2 {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    @include('includes._header')
    
    <div class="legal-page">
        <div class="legal-header">
            <h1>🔐 Politique de confidentialité</h1>
            <p class="subtitle">Sconnect Plus</p>
        </div>
        
        <div class="legal-intro">
            Chez Sconnect Plus, la protection de vos données personnelles est une priorité.
            La présente politique a pour objectif de vous informer sur la manière dont nous collectons, utilisons et protégeons vos informations lorsque vous utilisez notre site web et nos services.
        </div>

        <div class="legal-section">
            <h2>1️⃣ Responsable du traitement des données</h2>
            <p><strong>Entreprise :</strong> STL-A CONNECT PLUS « Sconnect Plus »</p>
            <p><strong>Siège social :</strong> Kinshasa, République Démocratique du Congo</p>
            <p><strong>E-mail :</strong> contact@sconnectplus.cd</p>
            <p><strong>Téléphone :</strong> +243821887423 / +243999258836</p>
        </div>

        <div class="legal-section">
            <h2>2️⃣ Données collectées</h2>
            <p>Nous collectons uniquement les données nécessaires à l'amélioration de nos services et à la gestion de nos relations avec vous.</p>
            <p>Ces données peuvent inclure :</p>
            <ul>
                <li>Nom, prénom, entreprise ou organisation</li>
                <li>Adresse e-mail, numéro de téléphone</li>
                <li>Informations relatives à vos demandes ou commandes</li>
                <li>Données de navigation (adresse IP, pages consultées, cookies, etc.)</li>
            </ul>
        </div>

        <div class="legal-section">
            <h2>3️⃣ Finalités du traitement</h2>
            <p>Vos données sont utilisées exclusivement pour :</p>
            <ul>
                <li>Répondre à vos demandes et assurer le suivi de vos services</li>
                <li>Vous informer sur nos produits, offres et événements</li>
                <li>Gérer vos abonnements à nos newsletters (si vous y consentez)</li>
                <li>Améliorer l'expérience utilisateur de notre site web</li>
                <li>Assurer la sécurité de nos plateformes et prévenir les fraudes</li>
            </ul>
        </div>

        <div class="legal-section">
            <h2>4️⃣ Conservation des données</h2>
            <p>Les données collectées sont conservées uniquement pour la durée nécessaire à la réalisation des finalités énoncées ci-dessus, conformément à la réglementation applicable en RDC.</p>
            <p>Elles sont supprimées ou anonymisées une fois leur utilisation terminée.</p>
        </div>

        <div class="legal-section">
            <h2>5️⃣ Partage des données</h2>
            <p>Vos informations ne sont jamais vendues ni cédées à des tiers.</p>
            <p>Elles peuvent toutefois être transmises à des partenaires techniques ou prestataires de services uniquement lorsque cela est nécessaire au fonctionnement du site ou à l'exécution des services commandés.</p>
            <p>Ces tiers sont tenus de respecter la confidentialité et la protection de vos données.</p>
        </div>

        <div class="legal-section">
            <h2>6️⃣ Sécurité des données</h2>
            <p>Nous mettons en place des mesures techniques et organisationnelles appropriées pour protéger vos données contre :</p>
            <ul>
                <li>L'accès non autorisé</li>
                <li>La perte, l'altération ou la destruction accidentelle</li>
                <li>Tout traitement illégal ou non autorisé</li>
            </ul>
        </div>

        <div class="legal-section">
            <h2>7️⃣ Vos droits</h2>
            <p>Conformément à la réglementation en vigueur, vous disposez des droits suivants :</p>
            <ul>
                <li>Accès à vos données personnelles</li>
                <li>Rectification ou mise à jour des informations vous concernant</li>
                <li>Suppression de vos données lorsque cela est possible légalement</li>
                <li>Opposition à certains traitements ou à l'envoi de communications commerciales</li>
            </ul>
            <p>Pour exercer vos droits, contactez-nous à l'adresse : <strong>contact@sconnectplus.cd</strong></p>
        </div>

        <div class="legal-section">
            <h2>8️⃣ Cookies et technologies similaires</h2>
            <p>Notre site peut utiliser des cookies afin de :</p>
            <ul>
                <li>Faciliter la navigation</li>
                <li>Personnaliser l'expérience utilisateur</li>
                <li>Réaliser des statistiques de fréquentation</li>
            </ul>
            <p>Vous pouvez configurer votre navigateur pour refuser les cookies ou être averti lors de leur installation. Le refus de certains cookies peut cependant limiter certaines fonctionnalités du site.</p>
        </div>

        <div class="legal-section">
            <h2>9️⃣ Modifications de la politique</h2>
            <p>Sconnect Plus se réserve le droit de modifier la présente politique de confidentialité à tout moment.</p>
            <p>Toute mise à jour sera publiée sur cette page avec une nouvelle date de révision.</p>
        </div>

        <div class="contact-info">
            <h3>📩 Contact</h3>
            <p>Pour toute question ou demande concernant cette politique, veuillez nous écrire à :</p>
            <p><strong>📧 contact@sconnectplus.cd</strong></p>
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
