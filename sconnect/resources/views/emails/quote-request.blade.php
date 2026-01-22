
<h1>Nouvelle demande de devis</h1>

<table style="width:100%; border-collapse:collapse; margin:20px 0;">
    <tr><td colspan="2" style="padding:10px; background:#f5f5f5;"><strong>Informations client</strong></td></tr>
    <tr>
        <td style="padding:10px; width:30%; font-weight:bold;">Nom complet:</td>
        <td style="padding:10px;">{{ $data['first_name'] }} {{ $data['last_name'] }}</td>
    </tr>
    <tr>
        <td style="padding:10px; font-weight:bold;">Entreprise:</td>
        <td style="padding:10px;">{{ $data['company'] ?? 'Non spécifié' }}</td>
    </tr>
    <tr>
        <td style="padding:10px; font-weight:bold;">Email:</td>
        <td style="padding:10px;">{{ $data['email'] }}</td>
    </tr>
    <tr>
        <td style="padding:10px; font-weight:bold;">Téléphone:</td>
        <td style="padding:10px;">{{ $data['phone'] }}</td>
    </tr>
    <tr>
        <td style="padding:10px; font-weight:bold;">Méthode de contact:</td>
        <td style="padding:10px;">{{ $data['contact_method'] }}</td>
    </tr>
    
    <tr><td colspan="2" style="padding:10px; background:#f5f5f5;"><strong>Détails de la demande</strong></td></tr>
    <tr>
        <td style="padding:10px; font-weight:bold;">Service demandé:</td>
        <td style="padding:10px;">{{ $data['service'] }}</td>
    </tr>
    <tr>
        <td style="padding:10px; font-weight:bold; vertical-align:top;">Détails:</td>
        <td style="padding:10px;">{{ $data['details'] }}</td>
    </tr>
</table>

@if(isset($data['attachment']) && $data['attachment'])
<div style="margin-top:20px;">
    <strong>Pièce jointe:</strong> Un fichier a été joint à cette demande
</div>
@endif


