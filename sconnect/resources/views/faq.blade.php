<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="FAQ Sconnect Plus - Questions fréquentes sur nos services, tarifs et conditions">
    <title>FAQ - Questions fréquentes - Sconnect Plus</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modern-header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/minimal-footer.css') }}">
    <style>
        .faq-page {
            max-width: 900px;
            margin: 0 auto;
            padding: 40px 20px;
            color: #333;
        }
        
        .faq-header {
            text-align: center;
            margin-bottom: 50px;
        }
        
        .faq-header h1 {
            color: #00AAE4;
            font-size: 2.5rem;
            margin-bottom: 15px;
        }
        
        .faq-header .subtitle {
            color: #6c757d;
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 25px;
        }
        
        .cta-button {
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
        
        .cta-button:hover {
            background: #0088cc;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 170, 228, 0.4);
            color: white;
            text-decoration: none;
        }
        
        .search-bar {
            max-width: 500px;
            margin: 0 auto 40px;
            position: relative;
        }
        
        .search-bar input {
            width: 100%;
            padding: 15px 50px 15px 20px;
            border: 2px solid #e9ecef;
            border-radius: 25px;
            font-size: 1rem;
            outline: none;
            transition: border-color 0.3s ease;
        }
        
        .search-bar input:focus {
            border-color: #00AAE4;
        }
        
        .search-bar .search-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
            width: 20px;
            height: 20px;
        }
        
        .faq-categories {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 40px;
        }
        
        .category-btn {
            padding: 10px 20px;
            background: #f8f9fa;
            border: 2px solid #e9ecef;
            border-radius: 20px;
            color: #495057;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .category-btn:hover,
        .category-btn.active {
            background: #00AAE4;
            border-color: #00AAE4;
            color: white;
            text-decoration: none;
        }
        
        .faq-section {
            margin-bottom: 40px;
        }
        
        .section-title {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #00AAE4;
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #e9ecef;
        }
        
        .faq-item {
            margin-bottom: 15px;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .faq-item:hover {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        
        .faq-question {
            background: #f8f9fa;
            padding: 20px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
            color: #495057;
            transition: all 0.3s ease;
        }
        
        .faq-question:hover {
            background: #e9ecef;
        }
        
        .faq-question.active {
            background: #00AAE4;
            color: white;
        }
        
        .faq-toggle {
            width: 20px;
            height: 20px;
            transition: transform 0.3s ease;
        }
        
        .faq-question.active .faq-toggle {
            transform: rotate(180deg);
        }
        
        .faq-answer {
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: all 0.3s ease;
            background: white;
        }
        
        .faq-answer.active {
            padding: 20px;
            max-height: 200px;
        }
        
        .faq-answer p {
            margin: 0;
            line-height: 1.6;
            color: #495057;
        }
        
        .final-cta {
            background: linear-gradient(135deg, #00AAE4 0%, #0088cc 100%);
            color: white;
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            margin: 50px 0;
        }
        
        .final-cta h3 {
            margin-bottom: 15px;
            font-size: 1.5rem;
        }
        
        .final-cta p {
            margin-bottom: 25px;
            opacity: 0.9;
        }
        
        .final-cta .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        
        .final-cta .cta-button {
            background: white;
            color: #00AAE4;
        }
        
        .final-cta .cta-button:hover {
            background: #f8f9fa;
            color: #0088cc;
        }
        
        .back-button {
            text-align: center;
            margin-top: 40px;
        }
        
        .btn-back {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: #6c757d;
            color: white;
            padding: 12px 25px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-back:hover {
            background: #5a6268;
            transform: translateY(-2px);
            color: white;
            text-decoration: none;
        }
        
        .btn-back svg {
            width: 18px;
            height: 18px;
        }
        
        @media (max-width: 768px) {
            .faq-page {
                padding: 20px 15px;
            }
            
            .faq-header h1 {
                font-size: 2rem;
            }
            
            .faq-categories {
                flex-direction: column;
                align-items: center;
            }
            
            .category-btn {
                width: 200px;
                text-align: center;
            }
            
            .final-cta {
                padding: 30px 20px;
            }
            
            .final-cta .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>
    @include('includes._header')
    
    <main class="faq-page">
        <div class="faq-header">
            <h1>FAQ – Tout savoir avant de souscrire à nos services</h1>
            <p class="subtitle">
                Vous avez une question sur nos offres, nos tarifs ou nos conditions ? 
                Retrouvez ici toutes les réponses pour souscrire en toute sérénité.
            </p>
            <a href="{{ route('quote-request.index') }}" class="cta-button">
                Demander un devis
            </a>
        </div>
        
        <div class="search-bar">
            <input type="text" id="faqSearch" placeholder="Rechercher dans la FAQ...">
            <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="11" cy="11" r="8"></circle>
                <path d="m21 21-4.35-4.35"></path>
            </svg>
        </div>
        
        <div class="faq-categories">
            <button class="category-btn active" data-category="all">Toutes</button>
            <button class="category-btn" data-category="souscription">Souscription</button>
            <button class="category-btn" data-category="tarifs">Tarifs</button>
            <button class="category-btn" data-category="securite">Sécurité</button>
            <button class="category-btn" data-category="flexibilite">Flexibilité</button>
            <button class="category-btn" data-category="support">Support</button>
        </div>
        
        <div class="faq-section" data-category="souscription">
            <h2 class="section-title">Section 1 : Souscription et démarrage</h2>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>Comment puis-je souscrire à vos services ?</span>
                    <svg class="faq-toggle" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="6,9 12,15 18,9"></polyline>
                    </svg>
                </div>
                <div class="faq-answer">
                    <p>Vous pouvez souscrire en ligne via notre formulaire sécurisé, par e-mail (contact@sconnectplus.cd) ou par téléphone au +243…. Un conseiller vous guide jusqu'à l'activation.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>Dois-je me déplacer pour signer un contrat ?</span>
                    <svg class="faq-toggle" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="6,9 12,15 18,9"></polyline>
                    </svg>
                </div>
                <div class="faq-answer">
                    <p>Pas nécessairement. Nous proposons une signature électronique sécurisée pour plus de confort.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>Proposez-vous une période d'essai ?</span>
                    <svg class="faq-toggle" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="6,9 12,15 18,9"></polyline>
                    </svg>
                </div>
                <div class="faq-answer">
                    <p>Oui, pour certains services (logiciels, téléphonie IP, formation), une démonstration gratuite est disponible avant engagement.</p>
                </div>
            </div>
        </div>
        
        <div class="faq-section" data-category="tarifs">
            <h2 class="section-title">Section 2 : Tarifs et paiements</h2>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>Quels modes de paiement acceptez-vous ?</span>
                    <svg class="faq-toggle" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="6,9 12,15 18,9"></polyline>
                    </svg>
                </div>
                <div class="faq-answer">
                    <p>Mobile money (M-Pesa, Airtel Money, Orange Money), virement bancaire, espèces dans nos bureaux.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>Peut-on payer en plusieurs fois ?</span>
                    <svg class="faq-toggle" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="6,9 12,15 18,9"></polyline>
                    </svg>
                </div>
                <div class="faq-answer">
                    <p>Oui, des facilités de paiement sont disponibles pour les abonnements annuels ou les solutions sur mesure.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>Offrez-vous des tarifs préférentiels ?</span>
                    <svg class="faq-toggle" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="6,9 12,15 18,9"></polyline>
                    </svg>
                </div>
                <div class="faq-answer">
                    <p>Oui, nous proposons des réductions pour startups, jeunes entrepreneurs et partenariats longue durée.</p>
                </div>
            </div>
        </div>
        
        <div class="faq-section" data-category="securite">
            <h2 class="section-title">Section 3 : Sécurité et fiabilité</h2>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>Mes données sont-elles protégées ?</span>
                    <svg class="faq-toggle" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="6,9 12,15 18,9"></polyline>
                    </svg>
                </div>
                <div class="faq-answer">
                    <p>Oui, nous appliquons un haut niveau de sécurité (cryptage, sauvegarde, pare-feu) pour protéger vos informations.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>Quelle est votre garantie de disponibilité ?</span>
                    <svg class="faq-toggle" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="6,9 12,15 18,9"></polyline>
                    </svg>
                </div>
                <div class="faq-answer">
                    <p>Pour Internet et téléphonie IP, nous garantissons une disponibilité jusqu'à 99 %, avec assistance rapide en cas de panne.</p>
                </div>
            </div>
        </div>
        
        <div class="faq-section" data-category="flexibilite">
            <h2 class="section-title">Section 4 : Flexibilité et résiliation</h2>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>Puis-je modifier mon offre en cours de contrat ?</span>
                    <svg class="faq-toggle" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="6,9 12,15 18,9"></polyline>
                    </svg>
                </div>
                <div class="faq-answer">
                    <p>Oui, vous pouvez upgrader ou ajuster votre formule à tout moment.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>Comment résilier mon abonnement ?</span>
                    <svg class="faq-toggle" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="6,9 12,15 18,9"></polyline>
                    </svg>
                </div>
                <div class="faq-answer">
                    <p>Une demande écrite 15 jours avant la fin de votre période de facturation suffit. Aucun frais caché.</p>
                </div>
            </div>
        </div>
        
        <div class="faq-section" data-category="support">
            <h2 class="section-title">Section 5 : Support client</h2>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>Quels sont vos horaires d'assistance ?</span>
                    <svg class="faq-toggle" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="6,9 12,15 18,9"></polyline>
                    </svg>
                </div>
                <div class="faq-answer">
                    <p>Lundi à samedi, 8h–20h. Assistance 24h/24 pour clients premium.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>Intervenez-vous à distance ?</span>
                    <svg class="faq-toggle" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="6,9 12,15 18,9"></polyline>
                    </svg>
                </div>
                <div class="faq-answer">
                    <p>Oui, nos techniciens peuvent résoudre 80 % des problèmes via assistance en ligne.</p>
                </div>
            </div>
        </div>
        
        <div class="final-cta">
            <h3>Vous n'avez pas trouvé la réponse à votre question ?</h3>
            <p>Notre équipe commerciale est disponible pour vous conseiller et vous proposer une solution sur mesure.</p>
            <div class="cta-buttons">
                <a href="{{route('contact.index')}}" class="cta-button"> Contactez-nous</a>
                <a href="/demander-devis" class="cta-button">Demander un devis</a>
            </div>
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
    
    <script>
        // Gestion des accordéons
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const answer = question.nextElementSibling;
                const isActive = question.classList.contains('active');
                
                // Fermer tous les autres accordéons
                document.querySelectorAll('.faq-question').forEach(q => {
                    q.classList.remove('active');
                    q.nextElementSibling.classList.remove('active');
                });
                
                // Ouvrir/fermer l'accordéon cliqué
                if (!isActive) {
                    question.classList.add('active');
                    answer.classList.add('active');
                }
            });
        });
        
        // Gestion des catégories
        document.querySelectorAll('.category-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const category = btn.dataset.category;
                
                // Mettre à jour les boutons actifs
                document.querySelectorAll('.category-btn').forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                
                // Afficher/masquer les sections
                document.querySelectorAll('.faq-section').forEach(section => {
                    if (category === 'all' || section.dataset.category === category) {
                        section.style.display = 'block';
                    } else {
                        section.style.display = 'none';
                    }
                });
            });
        });
        
        // Recherche dans la FAQ
        document.getElementById('faqSearch').addEventListener('input', (e) => {
            const searchTerm = e.target.value.toLowerCase();
            const faqItems = document.querySelectorAll('.faq-item');
            
            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question span').textContent.toLowerCase();
                const answer = item.querySelector('.faq-answer p').textContent.toLowerCase();
                
                if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                    item.style.display = 'block';
                    item.parentElement.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
            
            // Masquer les sections vides
            document.querySelectorAll('.faq-section').forEach(section => {
                const visibleItems = section.querySelectorAll('.faq-item[style="display: block;"], .faq-item:not([style])');
                if (visibleItems.length === 0 && searchTerm !== '') {
                    section.style.display = 'none';
                } else if (searchTerm === '') {
                    section.style.display = 'block';
                }
            });
        });
    </script>
    {{-- Script pour le menu mobile --}}
    <script src="{{ asset('js/modern-header.js') }}"></script>
</body>
</html>
