<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nouvelle Inscription Tech4School</title>
</head>
<body style="margin: 0; padding: 20px; background-color: #f4f9fc; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #2b2d42; -webkit-font-smoothing: antialiased;">
    <div style="max-width: 600px; margin: 0 auto; background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 1px solid #e2e8f0;">
        
        <!-- Header banner -->
        <div style="background: linear-gradient(135deg, #005B94 0%, #00AAE4 100%); padding: 25px 20px; text-align: center; color: white;">
            <h2 style="margin: 0; font-size: 22px; font-weight: 800; letter-spacing: 0.5px;">TECH4SCHOOL</h2>
            <p style="margin: 5px 0 0 0; font-size: 13px; opacity: 0.9; font-style: italic; font-weight: 500;">Nouvelle Inscription - Camp de Vacances 2026</p>
        </div>
        
        <!-- Main body content -->
        <div style="padding: 25px 20px;">
            <p style="margin-top: 0; font-size: 15px; font-weight: 700; color: #005B94; border-bottom: 2px solid #00AAE4; padding-bottom: 6px; margin-bottom: 20px;">
                Détails du Formulaire d'Inscription
            </p>
            
            <table style="width: 100%; border-collapse: collapse; margin-bottom: 10px; font-family: sans-serif; font-size: 13px; line-height: 1.5;">
                <!-- SECTION: CHILD INFO -->
                <tr>
                    <td colspan="2" style="background-color: #e6f7ff; padding: 10px 12px; font-weight: 800; color: #005b94; font-size: 12px; text-transform: uppercase; border: 1px solid #d9d9d9; letter-spacing: 0.5px;">
                        Informations de l'enfant / Child Information
                    </td>
                </tr>
                <tr>
                    <td style="width: 35%; padding: 12px; border: 1px solid #d9d9d9; font-weight: bold; color: #4a5568; background-color: #fafafa;">Nom de l'enfant / Name</td>
                    <td style="padding: 12px; border: 1px solid #d9d9d9; font-size: 14px; color: #1a202c; font-weight: 600;">{{ $data['child_name'] ?? 'Non spécifié' }}</td>
                </tr>
                <tr>
                    <td style="padding: 12px; border: 1px solid #d9d9d9; font-weight: bold; color: #4a5568; background-color: #fafafa;">Âge / Age</td>
                    <td style="padding: 12px; border: 1px solid #d9d9d9; font-size: 14px; color: #1a202c;">{{ $data['child_age'] ?? 'Non spécifié' }} ans</td>
                </tr>
                <tr>
                    <td style="padding: 12px; border: 1px solid #d9d9d9; font-weight: bold; color: #4a5568; background-color: #fafafa;">Sexe / Gender</td>
                    <td style="padding: 12px; border: 1px solid #d9d9d9; font-size: 14px; color: #1a202c;">{{ $data['child_gender'] ?? 'Non spécifié' }}</td>
                </tr>
                <tr>
                    <td style="padding: 12px; border: 1px solid #d9d9d9; font-weight: bold; color: #4a5568; background-color: #fafafa;">École / School</td>
                    <td style="padding: 12px; border: 1px solid #d9d9d9; font-size: 14px; color: #1a202c;">{{ $data['child_school'] ?? 'Non spécifié' }}</td>
                </tr>
                
                <!-- SECTION: PARENT INFO -->
                <tr>
                    <td colspan="2" style="background-color: #f7fee7; padding: 10px 12px; font-weight: 800; color: #3f6212; font-size: 12px; text-transform: uppercase; border: 1px solid #d9d9d9; border-top: 0; letter-spacing: 0.5px;">
                        Informations du parent / Parent Information
                    </td>
                </tr>
                <tr>
                    <td style="padding: 12px; border: 1px solid #d9d9d9; font-weight: bold; color: #4a5568; background-color: #fafafa;">Nom du parent / Name</td>
                    <td style="padding: 12px; border: 1px solid #d9d9d9; font-size: 14px; color: #1a202c; font-weight: 600;">{{ $data['parent_name'] ?? 'Non spécifié' }}</td>
                </tr>
                <tr>
                    <td style="padding: 12px; border: 1px solid #d9d9d9; font-weight: bold; color: #4a5568; background-color: #fafafa;">Téléphone / Phone</td>
                    <td style="padding: 12px; border: 1px solid #d9d9d9; font-size: 14px; color: #1a202c; font-weight: 600;">{{ $data['parent_phone'] ?? 'Non spécifié' }}</td>
                </tr>
                <tr>
                    <td style="padding: 12px; border: 1px solid #d9d9d9; font-weight: bold; color: #4a5568; background-color: #fafafa;">WhatsApp</td>
                    <td style="padding: 12px; border: 1px solid #d9d9d9; font-size: 14px; color: #1a202c;">{{ $data['parent_whatsapp'] ?? 'Non spécifié' }}</td>
                </tr>
                
                <!-- SECTION: CHOIX & CONFIG -->
                <tr>
                    <td colspan="2" style="background-color: #fff7ed; padding: 10px 12px; font-weight: 800; color: #9a3412; font-size: 12px; text-transform: uppercase; border: 1px solid #d9d9d9; border-top: 0; letter-spacing: 0.5px;">
                        Session & Programme / Session & Language
                    </td>
                </tr>
                <tr>
                    <td style="padding: 12px; border: 1px solid #d9d9d9; font-weight: bold; color: #4a5568; background-color: #fafafa;">Session choisie</td>
                    <td style="padding: 12px; border: 1px solid #d9d9d9; font-size: 13px; color: #1a202c; font-weight: 600;">{{ $data['session'] ?? 'Non spécifié' }}</td>
                </tr>
                <tr>
                    <td style="padding: 12px; border: 1px solid #d9d9d9; font-weight: bold; color: #4a5568; background-color: #fafafa;">Langue préférée</td>
                    <td style="padding: 12px; border: 1px solid #d9d9d9; font-size: 13px; color: #1a202c; font-weight: 600;">{{ $data['language'] ?? 'Non spécifié' }}</td>
                </tr>
                <tr>
                    <td style="padding: 12px; border: 1px solid #d9d9d9; font-weight: bold; color: #4a5568; background-color: #fafafa;">Commentaires</td>
                    <td style="padding: 12px; border: 1px solid #d9d9d9; font-size: 13px; color: #4a5568; font-style: italic; white-space: pre-line;">{{ $data['comment'] ?? 'Aucun' }}</td>
                </tr>
                <tr>
                    <td style="padding: 12px; border: 1px solid #d9d9d9; font-weight: bold; color: #4a5568; background-color: #fafafa;">Confirmation parent</td>
                    <td style="padding: 12px; border: 1px solid #d9d9d9; font-size: 13px; color: #15803d; font-weight: bold;">
                        {{ isset($data['confirmed']) && $data['confirmed'] ? 'Confirmée' : 'Non' }}
                    </td>
                </tr>
            </table>
        </div>
        
        <!-- Footer info -->
        <div style="background-color: #f8fafc; padding: 15px; text-align: center; font-size: 11px; color: #718096; border-top: 1px solid #e2e8f0; font-family: sans-serif;">
            Ce courriel de notification a été envoyé automatiquement par la plateforme <strong>Sconnect Plus</strong>.
        </div>
    </div>
</body>
</html>
