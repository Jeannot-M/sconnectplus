/**
 * Système de recherche globale côté client pour Sconnect Plus
 * Permet une recherche en autocomplétion dans un overlay plein écran
 */

document.addEventListener('DOMContentLoaded', function() {
    // Éléments du DOM d'origine (sur la page d'accueil)
    const initialSearchForm = document.getElementById('site-search-form');
    const initialSearchInput = document.getElementById('site-search-input');
    
    // Éléments du DOM de l'overlay (modal plein écran)
    const searchOverlay = document.getElementById('search-overlay-modal');
    const closeSearchOverlay = document.getElementById('close-search-overlay');
    const overlaySearchInput = document.getElementById('overlay-search-input');
    const overlaySearchResults = document.getElementById('overlay-search-results');

    // Index du contenu du site avec mots-clés et icônes
    const siteContent = [
        {
            title: "Accueil - Sconnect Plus",
            url: "/",
            content: "Sconnect Plus votre partenaire technologique de confiance en RDC. Nous offrons des solutions informatiques innovantes, télécommunications, connectivité internet de pointe, formation, accompagnement entrepreneurial et sécurité.",
            keywords: "accueil, home, sconnect plus, technologie, rdc, entreprise, solutions, vitrine",
            icon: "fas fa-home"
        },
        {
            title: "Qui sommes-nous / Présentation",
            url: "/qui-sommes-nous",
            content: "Sconnect Plus est une entreprise innovante spécialisée dans les solutions informatiques, réseaux, électricité, formation et télécommunications en République Démocratique du Congo depuis 2022.",
            keywords: "à propos, entreprise, histoire, mission, vision, qui sommes nous, équipe, jenn biwa, stl-a connect plus",
            icon: "fas fa-info-circle"
        },
        {
            title: "Nos Services Professionnels",
            url: "/#nos-services",
            content: "Solutions IT, Télécommunications, Connectivité Internet haut débit, Réseaux privés, Téléphonie IP (VoIP), Gestion de parcs informatiques, Sécurisation et audit des données, Accompagnement entrepreneurial.",
            keywords: "services, solutions, télécommunications, internet, informatique, support, formation, voip, réseaux, scobox, connectivité, fibre optique, hébergement, électricité, caméra de surveillance, sécurité",
            icon: "fas fa-cogs"
        },
        {
            title: "Sconnect Tech4School (Kit Robotique & VR/AR)",
            url: "/tech4school",
            content: "Tech4School (Technology for School) est un programme éducatif after-school qui initie les enfants et les jeunes (3 à 18 ans) à la robotique, au coding, à la programmation et à la réalité virtuelle (VR/AR) à travers des expériences amusantes.",
            keywords: "tech4school, robotique, coding, programmation, école, camp de vacances, enfants, jeunes, STEM, après-école, VR, AR, réalité virtuelle, réalité augmentée, technologie pour école, devis tech4school",
            icon: "fas fa-robot"
        },
        {
            title: "Sconnect Academy (Formations & Certifications)",
            url: "/sconnect-academy",
            content: "Sconnect Academy forme aux métiers du numérique et des technologies. Apprenez le développement web, le design graphique, l'infographie, les télécoms, le marketing digital, les réseaux et le cloud.",
            keywords: "academy, formation, certifications, cours, étude, école, étudiant, professionnel, développeur, infographie, télécom, numérique, formation professionnelle, cloud, sécurité, programmation, coding",
            icon: "fas fa-graduation-cap"
        },
        {
            title: "Inscription Sconnect Academy",
            url: "/sconnect-academy/inscription",
            content: "Formulaire d'inscription pour rejoindre le programme de formation intensive à la Sconnect Academy. Formations en présentiel ou distanciel avec stage professionnel.",
            keywords: "inscription academy, postuler academy, candidature academy, sconnect academy, cours, rentrée, inscription formation, formulaire d'inscription academy",
            icon: "fas fa-user-plus"
        },
        {
            title: "Conditions Générales - Sconnect Academy",
            url: "/sconnect-academy/conditions",
            content: "Conditions générales de formation à Sconnect Academy. Règles d'inscription, admission, frais de formation, assiduité, ponctualité, comportement, discipline, propriété intellectuelle et certification.",
            keywords: "conditions academy, conditions générales academy, termes academy, réglement academy, admission, frais de formation, assiduité, certification academy",
            icon: "fas fa-book"
        },
        {
            title: "Grand Salon Entrepreneurial (GSE)",
            url: "/grand-salon-entrepreneurial",
            content: "Événement annuel majeur d'innovation et d'entrepreneuriat en RDC. Rencontrez des investisseurs, participez à des conférences et découvrez les start-ups les plus innovantes.",
            keywords: "grand salon entrepreneurial, gse, salon, entrepreneuriat, événement, innovation, investisseurs, rdc, start-up, conférence, réseautage, pitch, salon de l'entrepreneuriat",
            icon: "fas fa-users"
        },
        {
            title: "GSE - Inscription Investisseur",
            url: "/gse-inscription-investisseur",
            content: "Participez au Grand Salon Entrepreneurial en tant qu'investisseur. Accédez aux opportunités d'investissement, financez des projets prometteurs et collaborez avec des start-ups.",
            keywords: "investisseur gse, financement, investissement, salon, fonds, investisseur, partenaire, s'inscrire investisseur gse",
            icon: "fas fa-hand-holding-usd"
        },
        {
            title: "GSE - Inscription Entrepreneur",
            url: "/gse-inscription-entrepreneur",
            content: "Inscrivez votre projet ou start-up au Grand Salon Entrepreneurial. Présentez votre innovation à un jury, trouvez des financements et accédez au réseau professionnel.",
            keywords: "entrepreneur gse, projet gse, start-up gse, pitch, concours, stand, exposer, salon, s'inscrire entrepreneur gse",
            icon: "fas fa-rocket"
        },
        {
            title: "Programme Jeune & Entrepreneur",
            url: "/programme-jeune-entrepreneur",
            content: "Programme d'accompagnement, d'incubation et de formation pour les jeunes entrepreneurs de la RDC. Propulsez votre idée d'entreprise avec des experts.",
            keywords: "programme jeune entrepreneur, jeune, incubation, mentorat, idée, création entreprise, coaching, accompagnement, pje",
            icon: "fas fa-user-tie"
        },
        {
            title: "Inscription au Programme Jeune & Entrepreneur",
            url: "/formulaire-inscription-programme",
            content: "Formulaire d'inscription pour rejoindre le Programme Jeune & Entrepreneur. Soumettez votre idée, votre projet ou votre start-up pour un accompagnement personnalisé en RDC.",
            keywords: "inscription programme jeune entrepreneur, postuler programme jeune, candidature pje, formulaire inscription programme, incubation jeune",
            icon: "fas fa-clipboard-list"
        },
        {
            title: "Intervenir à l'émission - Jeune & Entrepreneur",
            url: "/formulaire-intervention-emission",
            content: "Partagez votre parcours d'entrepreneur, d'expert ou de leader. Remplissez le formulaire d'intervention pour participer à l'émission TV/média du Programme Jeune & Entrepreneur.",
            keywords: "intervenir émission, émission jeune entrepreneur, participer émission, passage média, interview entrepreneur, intervention émission, radio, tv, podcast",
            icon: "fas fa-microphone"
        },
        {
            title: "Sconnect Carrière (Emplois & Stages)",
            url: "/carriere",
            content: "Rejoignez l'équipe Sconnect Plus. Nous recrutons régulièrement des profils ambitieux, des stagiaires académiques et des jeunes talents dans les domaines de la tech, des réseaux et de l'énergie.",
            keywords: "carrière, recrutement, emploi, stage, job, opportunité, drh, postuler, cv, lettre de motivation, travailler chez sconnect, recrutement rdc, offre d'emploi, offre de stage",
            icon: "fas fa-briefcase"
        },
        {
            title: "Demander un devis personnalisé",
            url: "/demander-devis",
            content: "Obtenez un devis gratuit et rapide pour nos services : connectivité internet Scobox, installation fibre, réseaux, VoIP, support informatique, caméra de surveillance ou kit robotique Tech4School.",
            keywords: "devis, prix, tarif, demande, offre, scobox, box internet, fibre, réseau, devis gratuit, devis sur mesure, estimation prix",
            icon: "fas fa-file-invoice-dollar"
        },
        {
            title: "Contactez-nous / Support client",
            url: "/contact",
            content: "Besoin d'aide ou de renseignements ? Contactez Sconnect Plus par e-mail à contact@sconnectplus.cd, par téléphone au +243 821 887 423 ou visitez nos bureaux à Kinshasa.",
            keywords: "contact, support, assistance, téléphone, email, bureau, adresse, rdc, kinshasa, nous écrire, service client, réclamation",
            icon: "fas fa-envelope"
        },
        {
            title: "FAQ (Foire Aux Questions)",
            url: "/faq",
            content: "Retrouvez toutes les réponses à vos questions concernant la connectivité Scobox, les formations Sconnect Academy, l'installation de la fibre et le support technique.",
            keywords: "faq, foire aux questions, aide, questions, réponses, support client, informations, scobox faq, aide internet",
            icon: "fas fa-question-circle"
        },
        {
            title: "Conditions Générales d'Utilisation (CGU)",
            url: "/cgu",
            content: "Règles, conditions générales d'utilisation du site sconnectplus.cd et obligations de l'utilisateur.",
            keywords: "cgu, mentions, conditions, contrat, légal, conditions d'utilisation",
            icon: "fas fa-gavel"
        },
        {
            title: "Politique de Confidentialité",
            url: "/politique-confidentialite",
            content: "Charte de protection des données personnelles, cookies et respect de la vie privée chez Sconnect Plus.",
            keywords: "confidentialité, rgpd, données privées, cookies, sécurité, données personnelles, protection de la vie privée",
            icon: "fas fa-shield-alt"
        },
        {
            title: "Mentions Légales",
            url: "/mentions-legales",
            content: "Mentions légales de Sconnect Plus (STL-A CONNECT PLUS). Registres RCCM, IDNAT, INPP, CNSS, ONEM et mentions d'identification de l'éditeur du site.",
            keywords: "mentions légales, rccm, idnat, cnss, onem, impôt, jenn biwa, stl-a connect plus, éditeur, hébergement, légal",
            icon: "fas fa-file-signature"
        }
    ];

    // Ouvrir l'overlay
    function openSearchOverlay(initialText = '') {
        if (!searchOverlay) return;
        searchOverlay.classList.add('active');
        document.body.style.overflow = 'hidden'; // Empêcher le scroll en arrière-plan
        
        if (overlaySearchInput) {
            overlaySearchInput.value = initialText;
            overlaySearchInput.focus();
            if (initialText.trim().length >= 2) {
                performSearch(initialText);
            }
        }
    }

    // Fermer l'overlay
    function closeSearchOverlayModal() {
        if (!searchOverlay) return;
        searchOverlay.classList.remove('active');
        document.body.style.overflow = ''; // Restaurer le scroll
        
        if (overlaySearchInput) {
            overlaySearchInput.value = '';
        }
        if (overlaySearchResults) {
            overlaySearchResults.innerHTML = '';
        }
    }

    // Écouter les interactions sur les champs initiaux
    if (initialSearchInput) {
        initialSearchInput.addEventListener('click', function(e) {
            e.preventDefault();
            openSearchOverlay(this.value);
        });
        
        initialSearchInput.addEventListener('focus', function(e) {
            e.preventDefault();
            openSearchOverlay(this.value);
            this.blur();
        });
    }

    if (initialSearchForm) {
        initialSearchForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const val = initialSearchInput ? initialSearchInput.value : '';
            openSearchOverlay(val);
        });
    }

    // Écouter le bouton fermer
    if (closeSearchOverlay) {
        closeSearchOverlay.addEventListener('click', closeSearchOverlayModal);
    }

    // Écouter le clic à l'extérieur de la boîte de recherche pour fermer
    if (searchOverlay) {
        searchOverlay.addEventListener('click', function(e) {
            if (e.target === searchOverlay) {
                closeSearchOverlayModal();
            }
        });
    }

    // Fermeture avec la touche Échap
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' || e.keyCode === 27) {
            closeSearchOverlayModal();
        }
    });

    // Recherche en temps réel (Debounce de 200ms)
    let debounceTimer;
    if (overlaySearchInput) {
        overlaySearchInput.addEventListener('input', function() {
            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(() => {
                performSearch(this.value);
            }, 200);
        });
    }

    // Fonction de recherche
    function performSearch(query) {
        query = query.toLowerCase().trim();
        
        if (query.length < 2) {
            if (overlaySearchResults) {
                overlaySearchResults.innerHTML = '';
            }
            return;
        }

        // Filtrer les contenus
        const results = siteContent.filter(item => {
            const titleMatch = item.title.toLowerCase().includes(query);
            const contentMatch = item.content.toLowerCase().includes(query);
            const keywordsMatch = item.keywords.toLowerCase().includes(query);
            return titleMatch || contentMatch || keywordsMatch;
        });

        displayResults(results, query);
    }

    // Affichage des résultats
    function displayResults(results, query) {
        if (!overlaySearchResults) return;
        overlaySearchResults.innerHTML = '';

        if (results.length === 0) {
            overlaySearchResults.innerHTML = `
                <div class="overlay-no-results">
                    <i class="fas fa-search-minus"></i>
                    <p>Aucun résultat trouvé pour <strong>"${query}"</strong></p>
                    <p style="font-size: 13px; color: #64748b; margin-top: 5px;">Essayez d'autres mots-clés (ex: robotique, academy, devis, etc.)</p>
                </div>
            `;
            return;
        }

        const resultsList = document.createElement('div');
        resultsList.className = 'overlay-results-list';

        results.forEach(result => {
            const itemLink = document.createElement('a');
            itemLink.href = result.url;
            itemLink.className = 'overlay-result-item';

            // Tronquer la description
            let desc = result.content;
            if (desc.length > 110) {
                desc = desc.substring(0, 110) + '...';
            }

            itemLink.innerHTML = `
                <div class="overlay-result-details">
                    <h4 class="overlay-result-title">${result.title}</h4>
                    <p class="overlay-result-desc">${desc}</p>
                </div>
                <div class="overlay-result-arrow">
                    <i class="fas fa-chevron-right"></i>
                </div>
            `;

            resultsList.appendChild(itemLink);
        });

        overlaySearchResults.appendChild(resultsList);
    }

    // Exposer une fonction globale d'ajout dynamique si nécessaire
    window.addToSearchIndex = function(item) {
        if (item && item.title && item.url && item.content) {
            siteContent.push(item);
        }
    };
});
