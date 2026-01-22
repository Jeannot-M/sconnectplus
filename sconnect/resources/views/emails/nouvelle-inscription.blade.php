<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle inscription - Programme Jeune & Entrepreneur</title>
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
            max-width: 700px;
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
        .info-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        .info-table th {
            background-color: #f2f2f2;
            text-align: left;
            padding: 10px;
            border: 1px solid #ddd;
            width: 30%;
        }
        .info-table td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        .status-badge {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 4px;
            background-color: #FFC107;
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="{{ asset('images/logo.png') }}" alt="Sconnect Plus Logo">
        </div>
        
        <div class="content">
            <h1>Nouvelle inscription au Programme Jeune & Entrepreneur</h1>
            
            <p>Une nouvelle candidature a été soumise pour le Programme Jeune & Entrepreneur.</p>
            
            <div class="status-badge">En attente de traitement</div>
            
            <h2>Informations du candidat</h2>
            
            <table class="info-table">
                <tr>
                    <th>Nom complet</th>
                    <td>{{ $inscription->nom }} {{ $inscription->prenom }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $inscription->email }}</td>
                </tr>
                <tr>
                    <th>Téléphone</th>
                    <td>{{ $inscription->telephone }}</td>
                </tr>
                <tr>
                    <th>Date de naissance</th>
                    <td>{{ $inscription->date_naissance->format('d/m/Y') }}</td>
                </tr>
                <tr>
                    <th>Niveau d'études</th>
                    <td>{{ $inscription->niveau_etudes }}</td>
                </tr>
                <tr>
                    <th>Institution</th>
                    <td>{{ $inscription->institution ?: 'Non spécifié' }}</td>
                </tr>
                <tr>
                    <th>Ville</th>
                    <td>{{ $inscription->ville }}</td>
                </tr>
                <tr>
                    <th>Pays</th>
                    <td>{{ $inscription->pays }}</td>
                </tr>
            </table>
            
            <h2>Projet et motivation</h2>
            
            <table class="info-table">
                <tr>
                    <th>Description du projet</th>
                    <td>{{ $inscription->projet_description }}</td>
                </tr>
                <tr>
                    <th>Motivation</th>
                    <td>{{ $inscription->motivation }}</td>
                </tr>
                <tr>
                    <th>Attentes</th>
                    <td>{{ $inscription->attentes }}</td>
                </tr>
            </table>
            
            <h2>Documents</h2>
            
            <table class="info-table">
                <tr>
                    <th>CV</th>
                    <td>
                        <a href="{{ asset('storage/' . $inscription->cv_path) }}" target="_blank">Télécharger le CV</a>
                    </td>
                </tr>
                @if($inscription->lettre_motivation_path)
                <tr>
                    <th>Lettre de motivation</th>
                    <td>
                        <a href="{{ asset('storage/' . $inscription->lettre_motivation_path) }}" target="_blank">Télécharger la lettre</a>
                    </td>
                </tr>
                @endif
            </table>
            
            <div style="text-align: center; margin-top: 30px;">
                <a href="{{ route('control.index') }}" class="btn">Accéder au tableau de bord</a>
            </div>
        </div>
        
        <div class="footer">
            <p>© {{ date('Y') }} Sconnect Plus. Tous droits réservés.</p>
            <p>Ce message est automatique, merci de ne pas y répondre directement.</p>
        </div>
    </div>
</body>
</html>
