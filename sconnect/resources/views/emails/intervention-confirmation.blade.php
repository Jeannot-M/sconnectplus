<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de proposition d'intervention - Émission Jeune & Entrepreneur</title>
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
        .highlight-box {
            background-color: #f0f9ff;
            border-left: 4px solid #00AAE4;
            padding: 15px;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="{{ asset('images/logo.png') }}" alt="Sconnect Plus Logo">
        </div>
        
        <div class="content">
            <h1>Merci pour votre proposition d'intervention, {{ $nom }} !</h1>
            
            <p>Nous avons bien reçu votre proposition d'intervention pour l'émission <strong>Jeune & Entrepreneur</strong>.</p>
            
            <div class="highlight-box">
                <p>Notre équipe éditoriale va examiner votre proposition dans les plus brefs délais. Nous vous contacterons par email ou par téléphone pour vous informer de la suite du processus.</p>
            </div>
            
            <p>Voici les prochaines étapes :</p>
            <ol>
                <li>Examen de votre proposition (sous 14 jours)</li>
                <li>Entretien téléphonique ou visioconférence (si votre proposition est retenue)</li>
                <li>Planification de l'intervention (date, format, préparation)</li>
                <li>Enregistrement de l'émission</li>
            </ol>
            
            <p>Si vous avez des questions ou besoin d'informations complémentaires, n'hésitez pas à nous contacter à <a href="mailto:emission@sconnectplus.cd">emission@sconnectplus.cd</a> ou par téléphone au +243 821 887 423.</p>
            
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
            
            <p>Vous recevez cet email suite à votre proposition d'intervention à l'émission Jeune & Entrepreneur.</p>
        </div>
    </div>
</body>
</html>
