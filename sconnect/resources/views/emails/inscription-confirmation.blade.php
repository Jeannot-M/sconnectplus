<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation d'inscription - Programme Jeune & Entrepreneur</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            padding: 20px 0;
            border-bottom: 1px solid #eee;
        }
        .header img {
            max-width: 200px;
            height: auto;
        }
        .content {
            padding: 30px 20px;
        }
        .footer {
            text-align: center;
            padding: 20px;
            font-size: 12px;
            color: #666;
            border-top: 1px solid #eee;
        }
        h1 {
            color: #00AAE4;
            margin-bottom: 20px;
        }
        .btn {
            display: inline-block;
            background-color: #00AAE4;
            color: white;
            text-decoration: none;
            padding: 12px 25px;
            border-radius: 4px;
            margin-top: 20px;
            font-weight: bold;
        }
        .social-links {
            margin-top: 20px;
        }
        .social-links a {
            display: inline-block;
            margin: 0 10px;
            color: #00AAE4;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="{{ asset('images/logo.png') }}" alt="Sconnect Plus Logo">
        </div>
        
        <div class="content">
            <h1>Merci pour votre inscription, {{ $nom }} !</h1>
            
            <p>Nous avons bien reçu votre demande d'inscription au <strong>Programme Jeune & Entrepreneur</strong>.</p>
            
            <p>Votre candidature va être examinée par notre équipe dans les plus brefs délais. Nous vous contacterons par email ou par téléphone pour vous informer de la suite du processus.</p>
            
            <p>Voici les prochaines étapes :</p>
            <ol>
                <li>Examen de votre dossier (sous 7 jours)</li>
                <li>Entretien téléphonique (si votre candidature est présélectionnée)</li>
                <li>Confirmation finale de participation</li>
                <li>Début du programme</li>
            </ol>
            
            <p>Si vous avez des questions ou besoin d'informations complémentaires, n'hésitez pas à nous contacter à <a href="mailto:programme@sconnectplus.cd">programme@sconnectplus.cd</a> ou par téléphone au +243 821 887 423.</p>
            
            <div style="text-align: center;">
                <a href="{{ route('programme-jeune-entrepreneur') }}" class="btn">Retour au Programme</a>
            </div>
        </div>
        
        <div class="footer">
            <p>© {{ date('Y') }} Sconnect Plus. Tous droits réservés.</p>
            <p>STL-A CONNECT PLUS, Kinshasa, République Démocratique du Congo</p>
            
            <div class="social-links">
                <a href="https://www.facebook.com/sconnectplus">Facebook</a> |
                <a href="https://www.linkedin.com/company/sconnectplus">LinkedIn</a> |
                <a href="https://www.instagram.com/sconnectplus">Instagram</a>
            </div>
            
            <p>Vous recevez cet email suite à votre inscription au Programme Jeune & Entrepreneur.</p>
        </div>
    </div>
    <script src="{{ asset('js/modern-header.js') }}"></script>
</body>
</html>
