document.addEventListener('DOMContentLoaded', function() {
    // Éléments du header
    const mobileToggle = document.getElementById('mobile-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileOverlay = document.getElementById('mobile-overlay');
    const searchToggle = document.querySelector('.modern-search-toggle');
    const searchDropdown = document.querySelector('.modern-search-dropdown');
    const submenu = document.querySelector('.modern-submenu');
    const header = document.querySelector('.modern-header');
    const translateSelect = document.getElementById('google_translate_element');
    const searchInput = document.getElementById('search-input');
    const searchClose = document.getElementById('search-close');
    
    // Variables pour détecter le scroll
    let lastScrollTop = 0;
    const scrollThreshold = 10;
    
    // Effet de scroll sur le header
    window.addEventListener('scroll', function() {
        if (!header) return;
        
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        // Ajouter/enlever la classe scrolled
        if (scrollTop > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
        
        // Fermer le menu mobile lors du défilement vers le bas
        if (mobileMenu && mobileMenu.classList.contains('active')) {
            // Détection de la direction du scroll
            if (scrollTop > lastScrollTop + scrollThreshold) {
                // Scroll vers le bas
                mobileMenu.classList.remove('active');
                if (mobileToggle) mobileToggle.classList.remove('active');
                if (mobileToggle) mobileToggle.setAttribute('aria-expanded', 'false');
                if (mobileOverlay) mobileOverlay.classList.remove('active');
                document.body.style.overflow = '';
                console.log('Menu fermé par scroll vers le bas');
            }
        }
        
        lastScrollTop = scrollTop;
    });
    
    // Gestion de la recherche déroulante
    if (searchToggle && searchDropdown) {
        searchToggle.addEventListener('click', function() {
            searchDropdown.classList.add('active');
            setTimeout(() => {
                if (searchInput) {
                    searchInput.focus();
                }
            }, 100);
        });
        
        if (searchClose) {
            searchClose.addEventListener('click', function() {
                searchDropdown.classList.remove('active');
                if (searchInput) {
                    searchInput.value = '';
                }
            });
        }
        
        // Fermer la recherche avec Escape
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape' && searchDropdown.classList.contains('active')) {
                searchDropdown.classList.remove('active');
                if (searchInput) {
                    searchInput.value = '';
                }
            }
        });
        
        // Fermer la recherche en cliquant à l'extérieur
        document.addEventListener('click', function(event) {
            if (!searchToggle.contains(event.target) && !searchDropdown.contains(event.target)) {
                searchDropdown.classList.remove('active');
            }
        });
    }
    
    // Toggle menu mobile
    
    if (mobileToggle && mobileMenu) {
        mobileToggle.addEventListener('click', function() {
            const isExpanded = mobileToggle.getAttribute('aria-expanded') === 'true';
            
            mobileToggle.setAttribute('aria-expanded', !isExpanded);
            mobileToggle.classList.toggle('active');
            mobileMenu.classList.toggle('active');
            
            // Gérer l'overlay
            if (mobileOverlay) {
                mobileOverlay.classList.toggle('active');
            }
            
            // Bloquer le scroll du body quand le menu est ouvert
            if (!isExpanded) {
                document.body.style.overflow = 'hidden';
                console.log('Menu mobile ouvert');
            } else {
                document.body.style.overflow = '';
                console.log('Menu mobile fermé');
            }
            
            // Fermer la recherche si ouverte
            if (searchDropdown && searchDropdown.classList.contains('active')) {
                searchDropdown.classList.remove('active');
            }
        });
        
        // Fermer le menu en cliquant sur l'overlay
        if (mobileOverlay) {
            mobileOverlay.addEventListener('click', function() {
                mobileMenu.classList.remove('active');
                mobileToggle.classList.remove('active');
                mobileToggle.setAttribute('aria-expanded', 'false');
                mobileOverlay.classList.remove('active');
                document.body.style.overflow = '';
            });
        }
        
        // Fermer le menu mobile en cliquant sur les liens
        const mobileNavLinks = document.querySelectorAll('.modern-mobile-nav-link');
        if (mobileNavLinks.length > 0) {
            mobileNavLinks.forEach(function(link) {
                link.addEventListener('click', function() {
                    mobileMenu.classList.remove('active');
                    mobileToggle.classList.remove('active');
                    mobileToggle.setAttribute('aria-expanded', 'false');
                    if (mobileOverlay) {
                        mobileOverlay.classList.remove('active');
                    }
                    document.body.style.overflow = '';
                    console.log('Menu fermé via lien');
                });
            });
        }
    }
    
    // Afficher/masquer le sous-menu
    if (submenu) {
        // Afficher le sous-menu par défaut
        submenu.classList.add('active');
        
        // Optionnel: masquer/afficher selon le scroll
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 200) {
                submenu.classList.remove('active');
            } else {
                submenu.classList.add('active');
            }
        });
    }
    
    // Fermer le menu mobile en cliquant à l'extérieur
    document.addEventListener('click', function(event) {
        if (mobileMenu && mobileToggle) {
            if (!mobileMenu.contains(event.target) && !mobileToggle.contains(event.target)) {
                mobileMenu.classList.remove('active');
                mobileToggle.classList.remove('active');
                mobileToggle.setAttribute('aria-expanded', 'false');
            }
        }
    });
});
