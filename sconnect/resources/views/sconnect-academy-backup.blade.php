@extends('layouts.app')

@section('title', 'Sconnect Academy')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/sconnect-academy.css') }}">
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="academy-hero">
        <div class="academy-container">
            <h1>Sconnect Academy</h1>
            <p>Centre de formation professionnelle et d'accompagnement pour les jeunes entrepreneurs et professionnels</p>
        </div>
    </section>

    <!-- About Academy Section -->
    <section class="academy-about">
        <div class="academy-container">
            <div class="section-title">
                <h2>À propos de Sconnect Academy</h2>
                <p>Un programme complet pour développer vos compétences professionnelles</p>
            </div>

            <div class="about-content">
                <p>Sconnect Academy est un centre de formation professionnelle et d'accompagnement pour les jeunes entrepreneurs et professionnels. Notre mission est de fournir une formation de qualité dans les domaines de l'informatique, des télécommunications, de l'administration et de la gestion, ainsi que des compétences complémentaires essentielles pour réussir dans le monde professionnel d'aujourd'hui.</p>
                
                <p>Notre engagement est de vous offrir :</p>
                <ul>
                    <li>Des formations pratiques et adaptées aux besoins du marché</li>
                    <li>Un accompagnement personnalisé tout au long de votre parcours</li>
                    <li>Des formateurs expérimentés et passionnés</li>
                    <li>Un environnement d'apprentissage stimulant et collaboratif</li>
                    <li>Des certifications reconnues par l'industrie</li>
                </ul>
                
                <p>Que vous soyez un étudiant, un professionnel en reconversion, ou un entrepreneur en herbe, Sconnect Academy vous offre les outils et les connaissances nécessaires pour atteindre vos objectifs professionnels.</p>
            </div>

            <div class="academy-features">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Formation de qualité</h3>
                    <p>Des programmes de formation conçus par des experts du domaine pour répondre aux besoins actuels du marché.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Accompagnement personnalisé</h3>
                    <p>Un suivi individuel pour vous aider à développer vos compétences et atteindre vos objectifs professionnels.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Certifications reconnues</h3>
                    <p>Des certifications reconnues par l'industrie pour valoriser votre parcours et booster votre carrière.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section class="academy-programs">
        <div class="academy-container">
            <div class="section-title">
                <h2>Nos programmes de formation</h2>
                <p>Découvrez nos formations professionnelles dans différentes spécialités</p>
            </div>

            <div class="program-categories">
                <div class="category-tab active" data-category="it">IT</div>
                <div class="category-tab" data-category="english">Anglais</div>
                <div class="category-tab" data-category="management">Administration & Gestion</div>
                <div class="category-tab" data-category="telecom">Télécommunications</div>
                <div class="category-tab" data-category="skills">Compétences complémentaires</div>
            </div>

            <!-- IT Programs -->
            <div class="programs-grid category-content active" id="it-programs">
                <div class="program-card">
                    <div class="program-header">
                        <h3>Développement Web</h3>
                    </div>
                    <div class="program-body">
                        <div class="program-modules">
                            <h4>Modules</h4>
                            <ul class="module-list">
                                <li>HTML5, CSS3, JavaScript</li>
                                <li>PHP, MySQL</li>
                                <li>Frameworks (Laravel, React)</li>
                                <li>Responsive Design</li>
                                <li>Sécurité Web</li>
                            </ul>
                        </div>
                        <div class="program-details">
                            <div class="program-duration">
                                <span class="detail-label">Durée</span>
                                <span class="detail-value">3 mois</span>
                            </div>
                            <div class="program-price">
                                <span class="detail-label">Prix</span>
                                <span class="detail-value">450$</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="program-card">
                    <div class="program-header">
                        <h3>Développement Mobile</h3>
                    </div>
                    <div class="program-body">
                        <div class="program-modules">
                            <h4>Modules</h4>
                            <ul class="module-list">
                                <li>Java, Kotlin (Android)</li>
                                <li>Swift (iOS)</li>
                                <li>React Native</li>
                                <li>Flutter</li>
                                <li>Publication sur les stores</li>
                            </ul>
                        </div>
                        <div class="program-details">
                            <div class="program-duration">
                                <span class="detail-label">Durée</span>
                                <span class="detail-value">3 mois</span>
                            </div>
                            <div class="program-price">
                                <span class="detail-label">Prix</span>
                                <span class="detail-value">450$</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="program-card">
                    <div class="program-header">
                        <h3>Administration Système</h3>
                    </div>
                    <div class="program-body">
                        <div class="program-modules">
                            <h4>Modules</h4>
                            <ul class="module-list">
                                <li>Linux, Windows Server</li>
                                <li>Virtualisation</li>
                                <li>Cloud Computing</li>
                                <li>Sécurité des systèmes</li>
                                <li>Scripting</li>
                            </ul>
                        </div>
                        <div class="program-details">
                            <div class="program-duration">
                                <span class="detail-label">Durée</span>
                                <span class="detail-value">3 mois</span>
                            </div>
                            <div class="program-price">
                                <span class="detail-label">Prix</span>
                                <span class="detail-value">450$</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- English Programs -->
            <div class="programs-grid category-content" id="english-programs" style="display: none;">
                <div class="program-card">
                    <div class="program-header">
                        <h3>Anglais Général</h3>
                    </div>
                    <div class="program-body">
                        <div class="program-modules">
                            <h4>Modules</h4>
                            <ul class="module-list">
                                <li>Grammaire et vocabulaire</li>
                                <li>Compréhension orale et écrite</li>
                                <li>Expression orale et écrite</li>
                                <li>Conversation pratique</li>
                                <li>Culture anglophone</li>
                            </ul>
                        </div>
                        <div class="program-details">
                            <div class="program-duration">
                                <span class="detail-label">Durée</span>
                                <span class="detail-value">3 mois</span>
                            </div>
                            <div class="program-price">
                                <span class="detail-label">Prix</span>
                                <span class="detail-value">300$</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="program-card">
                    <div class="program-header">
                        <h3>Anglais des Affaires</h3>
                    </div>
                    <div class="program-body">
                        <div class="program-modules">
                            <h4>Modules</h4>
                            <ul class="module-list">
                                <li>Vocabulaire professionnel</li>
                                <li>Communication d'entreprise</li>
                                <li>Négociation et présentation</li>
                                <li>Rédaction professionnelle</li>
                                <li>Réunions et conférences</li>
                            </ul>
                        </div>
                        <div class="program-details">
                            <div class="program-duration">
                                <span class="detail-label">Durée</span>
                                <span class="detail-value">3 mois</span>
                            </div>
                            <div class="program-price">
                                <span class="detail-label">Prix</span>
                                <span class="detail-value">350$</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="program-card">
                    <div class="program-header">
                        <h3>Préparation TOEFL/IELTS</h3>
                    </div>
                    <div class="program-body">
                        <div class="program-modules">
                            <h4>Modules</h4>
                            <ul class="module-list">
                                <li>Structure des examens</li>
                                <li>Techniques de réponse</li>
                                <li>Exercices pratiques</li>
                                <li>Tests blancs</li>
                                <li>Stratégies d'examen</li>
                            </ul>
                        </div>
                        <div class="program-details">
                            <div class="program-duration">
                                <span class="detail-label">Durée</span>
                                <span class="detail-value">2 mois</span>
                            </div>
                            <div class="program-price">
                                <span class="detail-label">Prix</span>
                                <span class="detail-value">400$</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Management Programs -->
            <div class="programs-grid category-content" id="management-programs" style="display: none;">
                <div class="program-card">
                    <div class="program-header">
                        <h3>Gestion de Projet</h3>
                    </div>
                    <div class="program-body">
                        <div class="program-modules">
                            <h4>Modules</h4>
                            <ul class="module-list">
                                <li>Méthodologies (Agile, Scrum)</li>
                                <li>Planification et budgétisation</li>
                                <li>Gestion des risques</li>
                                <li>Leadership d'équipe</li>
                                <li>Outils de gestion de projet</li>
                            </ul>
                        </div>
                        <div class="program-details">
                            <div class="program-duration">
                                <span class="detail-label">Durée</span>
                                <span class="detail-value">2 mois</span>
                            </div>
                            <div class="program-price">
                                <span class="detail-label">Prix</span>
                                <span class="detail-value">400$</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="program-card">
                    <div class="program-header">
                        <h3>Comptabilité et Finance</h3>
                    </div>
                    <div class="program-body">
                        <div class="program-modules">
                            <h4>Modules</h4>
                            <ul class="module-list">
                                <li>Principes comptables</li>
                                <li>Analyse financière</li>
                                <li>Fiscalité</li>
                                <li>Gestion de trésorerie</li>
                                <li>Logiciels comptables</li>
                            </ul>
                        </div>
                        <div class="program-details">
                            <div class="program-duration">
                                <span class="detail-label">Durée</span>
                                <span class="detail-value">3 mois</span>
                            </div>
                            <div class="program-price">
                                <span class="detail-label">Prix</span>
                                <span class="detail-value">400$</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="program-card">
                    <div class="program-header">
                        <h3>Ressources Humaines</h3>
                    </div>
                    <div class="program-body">
                        <div class="program-modules">
                            <h4>Modules</h4>
                            <ul class="module-list">
                                <li>Recrutement et sélection</li>
                                <li>Gestion des performances</li>
                                <li>Droit du travail</li>
                                <li>Formation et développement</li>
                                <li>SIRH</li>
                            </ul>
                        </div>
                        <div class="program-details">
                            <div class="program-duration">
                                <span class="detail-label">Durée</span>
                                <span class="detail-value">2 mois</span>
                            </div>
                            <div class="program-price">
                                <span class="detail-label">Prix</span>
                                <span class="detail-value">350$</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Telecom Programs -->
            <div class="programs-grid category-content" id="telecom-programs" style="display: none;">
                <div class="program-card">
                    <div class="program-header">
                        <h3>Réseaux et Télécommunications</h3>
                    </div>
                    <div class="program-body">
                        <div class="program-modules">
                            <h4>Modules</h4>
                            <ul class="module-list">
                                <li>Fondamentaux des réseaux</li>
                                <li>Protocoles TCP/IP</li>
                                <li>Configuration des équipements</li>
                                <li>Sécurité réseau</li>
                                <li>Dépannage</li>
                            </ul>
                        </div>
                        <div class="program-details">
                            <div class="program-duration">
                                <span class="detail-label">Durée</span>
                                <span class="detail-value">3 mois</span>
                            </div>
                            <div class="program-price">
                                <span class="detail-label">Prix</span>
                                <span class="detail-value">450$</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="program-card">
                    <div class="program-header">
                        <h3>Téléphonie IP</h3>
                    </div>
                    <div class="program-body">
                        <div class="program-modules">
                            <h4>Modules</h4>
                            <ul class="module-list">
                                <li>VoIP et SIP</li>
                                <li>Installation de PBX</li>
                                <li>Configuration Asterisk</li>
                                <li>QoS pour la voix</li>
                                <li>Dépannage VoIP</li>
                            </ul>
                        </div>
                        <div class="program-details">
                            <div class="program-duration">
                                <span class="detail-label">Durée</span>
                                <span class="detail-value">2 mois</span>
                            </div>
                            <div class="program-price">
                                <span class="detail-label">Prix</span>
                                <span class="detail-value">400$</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="program-card">
                    <div class="program-header">
                        <h3>Fibre Optique</h3>
                    </div>
                    <div class="program-body">
                        <div class="program-modules">
                            <h4>Modules</h4>
                            <ul class="module-list">
                                <li>Principes de la fibre optique</li>
                                <li>Installation et raccordement</li>
                                <li>Tests et mesures</li>
                                <li>Maintenance</li>
                                <li>Normes et standards</li>
                            </ul>
                        </div>
                        <div class="program-details">
                            <div class="program-duration">
                                <span class="detail-label">Durée</span>
                                <span class="detail-value">2 mois</span>
                            </div>
                            <div class="program-price">
                                <span class="detail-label">Prix</span>
                                <span class="detail-value">400$</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Complementary Skills Programs -->
            <div class="programs-grid category-content" id="skills-programs" style="display: none;">
                <div class="program-card">
                    <div class="program-header">
                        <h3>Communication Professionnelle</h3>
                    </div>
                    <div class="program-body">
                        <div class="program-modules">
                            <h4>Modules</h4>
                            <ul class="module-list">
                                <li>Expression orale et écrite</li>
                                <li>Techniques de présentation</li>
                                <li>Communication interpersonnelle</li>
                                <li>Gestion des conflits</li>
                                <li>Communication digitale</li>
                            </ul>
                        </div>
                        <div class="program-details">
                            <div class="program-duration">
                                <span class="detail-label">Durée</span>
                                <span class="detail-value">1 mois</span>
                            </div>
                            <div class="program-price">
                                <span class="detail-label">Prix</span>
                                <span class="detail-value">250$</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="program-card">
                    <div class="program-header">
                        <h3>Entrepreneuriat</h3>
                    </div>
                    <div class="program-body">
                        <div class="program-modules">
                            <h4>Modules</h4>
                            <ul class="module-list">
                                <li>Business model canvas</li>
                                <li>Étude de marché</li>
                                <li>Plan d'affaires</li>
                                <li>Financement de startup</li>
                                <li>Marketing digital</li>
                            </ul>
                        </div>
                        <div class="program-details">
                            <div class="program-duration">
                                <span class="detail-label">Durée</span>
                                <span class="detail-value">2 mois</span>
                            </div>
                            <div class="program-price">
                                <span class="detail-label">Prix</span>
                                <span class="detail-value">350$</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="program-card">
                    <div class="program-header">
                        <h3>Leadership et Management</h3>
                    </div>
                    <div class="program-body">
                        <div class="program-modules">
                            <h4>Modules</h4>
                            <ul class="module-list">
                                <li>Styles de leadership</li>
                                <li>Motivation d'équipe</li>
                                <li>Délégation efficace</li>
                                <li>Prise de décision</li>
                                <li>Gestion du changement</li>
                            </ul>
                        </div>
                        <div class="program-details">
                            <div class="program-duration">
                                <span class="detail-label">Durée</span>
                                <span class="detail-value">1 mois</span>
                            </div>
                            <div class="program-price">
                                <span class="detail-label">Prix</span>
                                <span class="detail-value">300$</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
