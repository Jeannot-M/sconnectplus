<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nouveau message de contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #00AAE4;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .content {
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-top: none;
            border-radius: 0 0 5px 5px;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
            text-align: center;
            color: #666;
        }
        .message-box {
            background-color: white;
            border: 1px solid #eee;
            padding: 15px;
            margin: 15px 0;
            border-radius: 5px;
        }
        .label {
            font-weight: bold;
            margin-bottom: 5px;
            color: #00AAE4;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Nouveau message de contact</h1>
    </div>
    
    <div class="content">
        <p>Un nouveau message a été envoyé depuis le formulaire de contact du site Sconnect Plus.</p>
        
        <div class="message-box">
            <div class="label">Nom:</div>
            <p>{{ $data['name'] }}</p>
            
            <div class="label">Email:</div>
            <p>{{ $data['email'] }}</p>
            
            <div class="label">Message:</div>
            <p>{{ $data['message'] }}</p>
        </div>
        
        <p>Pour répondre à ce message, vous pouvez simplement répondre à cet email ou contacter directement l'expéditeur à l'adresse: {{ $data['email'] }}</p>
    </div>
    
    <div class="footer">
        <p>&copy; {{ date('Y') }} Sconnect Plus. Tous droits réservés.</p>
        <p>Ce message est automatique, merci de ne pas y répondre directement.</p>
    </div>
    <script src="{{ asset('js/modern-header.js') }}"></script>
</body>
</html>
