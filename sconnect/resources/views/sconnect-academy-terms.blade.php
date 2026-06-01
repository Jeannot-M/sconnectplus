@extends('layouts.app')

@section('title', 'Conditions Générales - Sconnect Academy')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/sconnect-academy-forms.css') }}">
@endsection

@section('content')
    <!-- Terms and Conditions Section -->
    <section class="academy-terms">
        <div class="academy-container">
            <div class="section-title">
                <h2>Conditions Générales</h2>
                <p>Veuillez lire attentivement les conditions générales de Sconnect Academy</p>
            </div>

            <div class="terms-container">
                <div class="terms-content">
                    <div class="terms-section">
                        <h3>1. Inscription et admission</h3>
                        <p>1.1. L'inscription aux formations de Sconnect Academy est ouverte à toute personne physique majeure ou mineure avec autorisation parentale.</p>
                        <p>1.2. L'admission définitive est soumise à l'étude du dossier de candidature et à la disponibilité des places.</p>
                        <p>1.3. Sconnect Academy se réserve le droit de refuser une candidature sans avoir à justifier sa décision.</p>
                        <p>1.4. L'inscription n'est définitive qu'après validation du dossier complet et règlement des frais d'inscription.</p>
                    </div>

                    <div class="terms-section">
                        <h3>2. Frais de formation</h3>
                        <p>2.1. Les frais de formation sont communiqués aux candidats avant l'inscription et peuvent varier selon les programmes.</p>
                        <p>2.2. Le paiement peut être effectué en une ou plusieurs fois selon les modalités définies lors de l'inscription.</p>
                        <p>2.3. En cas d'abandon de la formation par l'apprenant, aucun remboursement ne sera effectué sauf cas de force majeure dûment justifié.</p>
                        <p>2.4. Des frais supplémentaires peuvent être demandés pour certains supports pédagogiques ou activités spécifiques.</p>
                    </div>

                    <div class="terms-section">
                        <h3>3. Assiduité et ponctualité</h3>
                        <p>3.1. L'assiduité et la ponctualité sont obligatoires pour tous les cours et activités prévus dans le programme de formation.</p>
                        <p>3.2. Toute absence doit être justifiée par écrit dans un délai de 48 heures.</p>
                        <p>3.3. Au-delà de 20% d'absences, même justifiées, Sconnect Academy se réserve le droit d'exclure l'apprenant sans remboursement.</p>
                        <p>3.4. Les retards répétés peuvent entraîner des sanctions allant jusqu'à l'exclusion temporaire ou définitive.</p>
                    </div>

                    <div class="terms-section">
                        <h3>4. Comportement et discipline</h3>
                        <p>4.1. Les apprenants s'engagent à adopter un comportement respectueux envers le personnel, les formateurs et les autres apprenants.</p>
                        <p>4.2. Tout comportement perturbateur, violent ou discriminatoire pourra entraîner l'exclusion immédiate sans remboursement.</p>
                        <p>4.3. L'usage des téléphones portables est strictement limité pendant les heures de cours.</p>
                        <p>4.4. Les apprenants sont tenus de respecter les locaux et le matériel mis à leur disposition.</p>
                    </div>

                    <div class="terms-section">
                        <h3>5. Propriété intellectuelle</h3>
                        <p>5.1. Tous les supports pédagogiques fournis aux apprenants sont protégés par le droit d'auteur.</p>
                        <p>5.2. La reproduction, diffusion ou utilisation des supports de cours à des fins commerciales est strictement interdite.</p>
                        <p>5.3. Les apprenants autorisent Sconnect Academy à utiliser leurs travaux à des fins pédagogiques ou promotionnelles.</p>
                        <p>5.4. Les logiciels mis à disposition des apprenants doivent être utilisés conformément aux licences d'utilisation.</p>
                    </div>

                    <div class="terms-section">
                        <h3>6. Certification</h3>
                        <p>6.1. La délivrance des certificats est conditionnée par la réussite aux évaluations et le respect des conditions d'assiduité.</p>
                        <p>6.2. Les modalités d'évaluation sont communiquées aux apprenants en début de formation.</p>
                        <p>6.3. En cas d'échec, des sessions de rattrapage peuvent être proposées selon les modalités définies par Sconnect Academy.</p>
                        <p>6.4. Les certificats délivrés par Sconnect Academy ne constituent pas des diplômes d'État mais des attestations de compétences.</p>
                    </div>

                    <div class="terms-section">
                        <h3>7. Protection des données personnelles</h3>
                        <p>7.1. Les informations recueillies lors de l'inscription sont nécessaires pour la gestion administrative et pédagogique des formations.</p>
                        <p>7.2. Conformément à la législation en vigueur, les apprenants disposent d'un droit d'accès, de rectification et de suppression des données les concernant.</p>
                        <p>7.3. Sconnect Academy s'engage à ne pas communiquer ces informations à des tiers sans consentement préalable.</p>
                        <p>7.4. Les données sont conservées pendant une durée maximale de 5 ans après la fin de la formation.</p>
                    </div>

                    <div class="terms-section">
                        <h3>8. Modification ou annulation de la formation</h3>
                        <p>8.1. Sconnect Academy se réserve le droit de modifier le contenu, les horaires ou les intervenants d'une formation pour des raisons pédagogiques ou organisationnelles.</p>
                        <p>8.2. En cas d'annulation d'une formation par Sconnect Academy, les frais d'inscription seront intégralement remboursés.</p>
                        <p>8.3. Sconnect Academy ne pourra être tenu responsable des frais engagés par les apprenants (transport, hébergement) en cas d'annulation.</p>
                        <p>8.4. En cas de force majeure (catastrophe naturelle, épidémie, troubles sociaux), les cours pourront être dispensés à distance.</p>
                    </div>

                    <div class="terms-section">
                        <h3>9. Acceptation des conditions</h3>
                        <p>9.1. L'inscription à une formation de Sconnect Academy implique l'acceptation pleine et entière des présentes conditions générales.</p>
                        <p>9.2. Ces conditions générales peuvent être modifiées à tout moment, la version applicable étant celle en vigueur à la date d'inscription.</p>
                        <p>9.3. Tout litige relatif à l'interprétation ou à l'exécution des présentes conditions générales sera soumis aux tribunaux compétents de Kinshasa.</p>
                    </div>
                </div>

                <div class="terms-contact">
                    <h3>Besoin d'informations supplémentaires ?</h3>
                    <p>Pour toute question concernant nos conditions générales, n'hésitez pas à nous contacter :</p>
                    <div class="contact-info">
                        <p><i class="fas fa-envelope"></i> training@sconnectplus.cd</p>
                        <p><i class="fas fa-phone"></i> +243 821 887 423</p>
                    </div>
                    <a href="{{ route('sconnect-academy') }}" class="btn-back">Retour à Sconnect Academy</a>
                </div>
            </div>
        </div>
    </section>
@endsection
