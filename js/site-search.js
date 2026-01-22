/**
 * Système de recherche côté client pour Sconnect Plus
 * Ce script permet de rechercher du contenu sur le site sans base de données
 */

document.addEventListener('DOMContentLoaded', function() {
    // Éléments du DOM
    const searchForm = document.getElementById('site-search-form');
    const searchInput = document.getElementById('site-search-input');
    const searchResults = document.getElementById('search-results');
    
    // Contenu indexé du site (à remplir manuellement)
    const siteContent = [
        {
            title: "Accueil",
            url: "/",
            content: "Sconnect Plus votre partenaire technologique de confiance en RDC Solutions IT Télécommunications Formation Accompagnement Sécurité",
            keywords: "accueil, home, sconnect plus, technologie, rdc"
        },
        {
            title: "Qui sommes-nous",
            url: "/#qui-sommes-nous",
            content: "Sconnect Plus est une entreprise spécialisée dans les solutions informatiques et télécommunications en République Démocratique du Congo depuis 2022.",
            keywords: "à propos, entreprise, histoire, mission, vision"
        },
        {
            title: "Nos Services",
            url: "/#nos-services",
            content: "Solutions Télécommunications, Connectivité Internet, Solutions Informatiques, Support & Assistance, Formation Professionnelle, Partenariats",
            keywords: "services, solutions, télécommunications, internet, informatique, support, formation"
        },
        {
            title: "Solutions Télécommunications",
            url: "/#nos-services",
            content: "Radiofréquence, Microwave, VSAT, réseaux, communication",
            keywords: "télécommunications, radio, microwave, vsat, réseaux"
        },
        {
            title: "Connectivité Internet",
            url: "/#nos-services",
            content: "4G/5G, Fibre, Sconnect Plus, connexion internet haut débit",
            keywords: "internet, 4G, 5G, fibre, connectivité, haut débit"
        },
        {
            title: "Solutions Informatiques",
            url: "/#nos-services",
            content: "Développement, Digitalisation, logiciels, applications, systèmes",
            keywords: "informatique, développement, logiciels, applications, digitalisation"
        },
        {
            title: "Support & Assistance",
            url: "/#nos-services",
            content: "Support 24/7, Assistance voyage, aide technique, dépannage",
            keywords: "support, assistance, aide, dépannage, technique"
        },
        {
            title: "Formation Professionnelle",
            url: "/#nos-services",
            content: "Alternance, Certifications, formation continue, développement compétences",
            keywords: "formation, certifications, alternance, compétences, professionnelle"
        },
        {
            title: "Partenariats",
            url: "/#nos-services",
            content: "Collaborations stratégiques, partenaires commerciaux, alliances",
            keywords: "partenariats, collaborations, alliances, stratégiques"
        },
        {
            title: "Programme Jeune & Entrepreneur",
            url: "/programme-jeune-entrepreneur",
            content: "Programme de formation et accompagnement pour jeunes entrepreneurs en RDC",
            keywords: "jeunes, entrepreneurs, formation, accompagnement, programme"
        },
        {
            title: "Grand Salon Entrepreneurial",
            url: "/grand-salon-entrepreneurial",
            content: "Événement annuel dédié à l'entrepreneuriat et l'innovation en RDC",
            keywords: "salon, entrepreneuriat, événement, innovation, networking"
        },
        {
            title: "Sconnect Academy",
            url: "/sconnect-academy",
            content: "Centre de formation aux métiers du numérique et des technologies",
            keywords: "academy, formation, numérique, technologies, éducation"
        },
        {
            title: "Sconnect Carrière",
            url: "/carriere",
            content: "Opportunités d'emploi et de carrière chez Sconnect Plus",
            keywords: "carrière, emploi, recrutement, jobs, opportunités"
        },
        {
            title: "Contact",
            url: "/contact",
            content: "Contactez-nous pour toute demande d'information ou de devis",
            keywords: "contact, email, téléphone, adresse, formulaire"
        },
        {
            title: "FAQ",
            url: "/faq",
            content: "Questions fréquemment posées sur nos services et solutions",
            keywords: "faq, questions, réponses, aide, support"
        },
        {
            title: "Mentions légales",
            url: "/mentions-legales",
            content: "Informations légales sur Sconnect Plus",
            keywords: "mentions légales, juridique, entreprise"
        },
        {
            title: "Conditions Générales d'Utilisation",
            url: "/cgu",
            content: "Conditions générales d'utilisation du site et des services Sconnect Plus",
            keywords: "cgu, conditions, utilisation, règles"
        },
        {
            title: "Politique de confidentialité",
            url: "/politique-confidentialite",
            content: "Informations sur la collecte et le traitement des données personnelles",
            keywords: "confidentialité, données personnelles, rgpd, protection"
        }
    ];
    
    // Fonction pour effectuer la recherche
    function performSearch(query) {
        // Nettoyer et normaliser la requête
        query = query.toLowerCase().trim();
        
        if (query.length < 2) {
            hideResults();
            return;
        }
        
        // Rechercher dans le contenu indexé
        const results = siteContent.filter(item => {
            const titleMatch = item.title.toLowerCase().includes(query);
            const contentMatch = item.content.toLowerCase().includes(query);
            const keywordsMatch = item.keywords.toLowerCase().includes(query);
            
            return titleMatch || contentMatch || keywordsMatch;
        });
        
        // Afficher les résultats
        displayResults(results, query);
    }
    
    // Fonction pour afficher les résultats
    function displayResults(results, query) {
        // Vider les résultats précédents
        searchResults.innerHTML = '';
        
        if (results.length === 0) {
            // Aucun résultat
            searchResults.innerHTML = `
                <div class="no-results" style="text-align: center; padding: 20px;">
                    <p>Aucun résultat trouvé pour <strong>"${query}"</strong></p>
                    <p>Essayez avec d'autres mots-clés ou consultez notre <a href="/faq">FAQ</a>.</p>
                </div>
            `;
        } else {
            // Créer la liste des résultats
            const resultsList = document.createElement('div');
            resultsList.className = 'results-list';
            
            results.forEach(result => {
                const resultItem = document.createElement('div');
                resultItem.className = 'result-item';
                resultItem.style.padding = '15px';
                resultItem.style.borderBottom = '1px solid #e9ecef';
                resultItem.style.transition = 'background-color 0.2s';
                
                // Mettre en évidence les termes de recherche
                let highlightedContent = result.content;
                if (highlightedContent.length > 150) {
                    highlightedContent = highlightedContent.substring(0, 150) + '...';
                }
                
                resultItem.innerHTML = `
                    <h5 style="margin: 0 0 8px; font-size: 14px;">
                        <a href="${result.url}" style="color: #00AAE4; text-decoration: none;">
                            ${result.title}
                        </a>
                    </h5>
                    <p style="margin: 0; color: #6c757d; font-size: 13px;">${highlightedContent}</p>
                `;
                
                // Effet hover
                resultItem.addEventListener('mouseenter', function() {
                    this.style.backgroundColor = '#f8f9fa';
                });
                
                resultItem.addEventListener('mouseleave', function() {
                    this.style.backgroundColor = 'transparent';
                });
                
                resultsList.appendChild(resultItem);
            });
            
            searchResults.appendChild(resultsList);
        }
        
        // Afficher les résultats
        searchResults.style.display = 'block';
        
        // Styles pour les résultats
        searchResults.style.backgroundColor = '#fff';
        searchResults.style.border = '1px solid #e9ecef';
        searchResults.style.borderRadius = '8px';
        searchResults.style.boxShadow = '0 4px 6px rgba(0, 0, 0, 0.05)';
        searchResults.style.maxHeight = '400px';
        searchResults.style.overflowY = 'auto';
    }
    
    // Fonction pour cacher les résultats
    function hideResults() {
        searchResults.style.display = 'none';
    }
    
    // Événements
    if (searchForm) {
        searchForm.addEventListener('submit', function(e) {
            e.preventDefault();
            performSearch(searchInput.value);
        });
    }
    
    if (searchInput) {
        // Recherche en temps réel après 300ms d'inactivité
        let debounceTimer;
        searchInput.addEventListener('input', function() {
            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(() => {
                performSearch(this.value);
            }, 300);
        });
        
        // Cacher les résultats quand on clique ailleurs
        document.addEventListener('click', function(e) {
            if (!searchForm.contains(e.target)) {
                hideResults();
            }
        });
    }
    
    // Fonction pour ajouter dynamiquement du contenu à l'index
    window.addToSearchIndex = function(item) {
        if (item && item.title && item.url && item.content) {
            siteContent.push(item);
        }
    };
});
