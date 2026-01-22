/**
 * Script pour améliorer le fonctionnement du menu mobile
 * Ce script s'assure que le menu mobile s'affiche correctement lorsque le bouton hamburger est cliqué
 * et gère les sous-menus pour une meilleure accessibilité
 * Version améliorée pour fonctionner sur toutes les pages du site
 * @version 1.2.0
 */
document.addEventListener('DOMContentLoaded', function() {
    // Éléments du menu mobile
    const mobileToggle = document.getElementById('mobile-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    let mobileOverlay = document.getElementById('mobile-overlay');
    
    // Vérifier si les éléments existent et les créer si nécessaire
    if (!mobileToggle) {
        console.warn('Élément #mobile-toggle non trouvé dans la page');
        return; // Le bouton toggle est essentiel, on ne peut pas continuer sans lui
    }
    
    if (!mobileMenu) {
        console.warn('Élément #mobile-menu non trouvé dans la page');
        return; // Le menu mobile est essentiel, on ne peut pas continuer sans lui
    }
    
    if (!mobileOverlay) {
        console.warn('Élément #mobile-overlay non trouvé dans la page, création automatique');
        // Créer l'overlay s'il n'existe pas
        const newOverlay = document.createElement('div');
        newOverlay.id = 'mobile-overlay';
        newOverlay.className = 'modern-mobile-overlay';
        // Ajouter les styles CSS essentiels directement à l'overlay pour garantir son fonctionnement
        newOverlay.style.position = 'fixed';
        newOverlay.style.top = '0';
        newOverlay.style.left = '0';
        newOverlay.style.width = '100%';
        newOverlay.style.height = '100%';
        newOverlay.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
        newOverlay.style.zIndex = '1000';
        newOverlay.style.opacity = '0';
        newOverlay.style.visibility = 'hidden';
        newOverlay.style.transition = 'opacity 0.3s ease, visibility 0.3s ease';
        document.body.appendChild(newOverlay);
        mobileOverlay = newOverlay;
    }
    
    // Vérifier si le menu mobile est déjà initialisé
    if (mobileMenu.getAttribute('data-initialized') === 'true') {
        console.log('Menu mobile déjà initialisé, éviter la double initialisation');
        return;
    }
    
    // Marquer le menu comme initialisé
    mobileMenu.setAttribute('data-initialized', 'true');
    
    // Initialisation du menu mobile
    console.log('Menu mobile détecté');
    
    // Assurer que le z-index est correct et initialiser les états
    mobileMenu.style.zIndex = '1001';
    // S'assurer que le menu est initialement fermé
    mobileMenu.classList.remove('active');
    mobileMenu.style.visibility = 'hidden';
    mobileMenu.style.opacity = '0';
    mobileMenu.style.transform = 'translateX(-100%)';
    
    if (mobileOverlay) {
        mobileOverlay.style.zIndex = '1000';
        mobileOverlay.style.pointerEvents = 'none';
        // S'assurer que l'overlay est initialement caché
        mobileOverlay.classList.remove('active');
        mobileOverlay.style.visibility = 'hidden';
        mobileOverlay.style.opacity = '0';
    }
        
    // Gérer le clic sur le bouton hamburger
    mobileToggle.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        console.log('Bouton hamburger cliqué');
        
        // Toggle des classes
        mobileToggle.classList.toggle('active');
        mobileMenu.classList.toggle('active');
        
        // Gérer l'état aria-expanded
        const isExpanded = mobileToggle.getAttribute('aria-expanded') === 'true';
        mobileToggle.setAttribute('aria-expanded', !isExpanded);
        
        // Gestion explicite des propriétés CSS pour le menu
        if (!isExpanded) {
            // Menu ouvert
            mobileMenu.style.visibility = 'visible';
            mobileMenu.style.opacity = '1';
            mobileMenu.style.transform = 'translateX(0)';
        } else {
            // Menu fermé
            mobileMenu.style.visibility = 'hidden';
            mobileMenu.style.opacity = '0';
            mobileMenu.style.transform = 'translateX(-100%)';
        }
            
        // Gérer l'overlay
        if (mobileOverlay) {
            mobileOverlay.classList.toggle('active');
            
            // Gestion explicite des propriétés CSS pour l'overlay
            if (!isExpanded) {
                // Menu ouvert - activer l'overlay
                mobileOverlay.style.visibility = 'visible';
                mobileOverlay.style.opacity = '1';
                mobileOverlay.style.pointerEvents = 'auto';
            } else {
                // Menu fermé - désactiver l'overlay
                mobileOverlay.style.visibility = 'hidden';
                mobileOverlay.style.opacity = '0';
                mobileOverlay.style.pointerEvents = 'none';
            }
        }
        
        // Bloquer le scroll du body quand le menu est ouvert
        document.body.style.overflow = isExpanded ? '' : 'hidden';
        
        console.log('État du menu mobile:', isExpanded ? 'fermé' : 'ouvert');
    });
        
    // Gérer le clic sur l'overlay pour fermer le menu
    if (mobileOverlay) {
        // Supprimer les éventuels écouteurs d'événements existants pour éviter les doublons
        const overlayClone = mobileOverlay.cloneNode(true);
        if (mobileOverlay.parentNode) {
            mobileOverlay.parentNode.replaceChild(overlayClone, mobileOverlay);
            mobileOverlay = overlayClone;
        }
        
        mobileOverlay.addEventListener('click', function() {
            console.log('Overlay mobile cliqué');
            
            mobileToggle.classList.remove('active');
            mobileMenu.classList.remove('active');
            mobileOverlay.classList.remove('active');
            
            // Gestion explicite des propriétés CSS pour l'overlay
            mobileOverlay.style.visibility = 'hidden';
            mobileOverlay.style.opacity = '0';
            mobileOverlay.style.pointerEvents = 'none';
            
            // Gestion explicite des propriétés CSS pour le menu
            mobileMenu.style.visibility = 'hidden';
            mobileMenu.style.opacity = '0';
            mobileMenu.style.transform = 'translateX(-100%)';
            
            mobileToggle.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
        });
    }
    
    // Gestion des sous-menus dans le menu mobile
    const dropdownLinks = document.querySelectorAll('.modern-mobile-nav-link.has-dropdown');
    if (dropdownLinks.length > 0) {
        dropdownLinks.forEach(function(link) {
            // Ajouter une icône de flèche pour indiquer qu'il y a un sous-menu
            const dropdownIcon = document.createElement('span');
            dropdownIcon.classList.add('dropdown-icon');
            dropdownIcon.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>';
            link.appendChild(dropdownIcon);
            
            // Ajouter l'attribut aria-expanded
            link.setAttribute('aria-expanded', 'false');
            
            // Gérer le clic sur le lien avec sous-menu
            link.addEventListener('click', function(e) {
                e.preventDefault(); // Empêcher la navigation
                
                // Trouver le sous-menu associé
                const submenu = this.nextElementSibling;
                if (submenu && submenu.classList.contains('modern-mobile-submenu')) {
                    // Toggle l'état du sous-menu
                    const isExpanded = this.getAttribute('aria-expanded') === 'true';
                    
                    // Fermer tous les autres sous-menus
                    dropdownLinks.forEach(function(otherLink) {
                        if (otherLink !== link) {
                            otherLink.classList.remove('active');
                            otherLink.setAttribute('aria-expanded', 'false');
                            const otherSubmenu = otherLink.nextElementSibling;
                            if (otherSubmenu && otherSubmenu.classList.contains('modern-mobile-submenu')) {
                                otherSubmenu.classList.remove('active');
                            }
                        }
                    });
                    
                    // Toggle le sous-menu actuel
                    this.classList.toggle('active');
                    submenu.classList.toggle('active');
                    this.setAttribute('aria-expanded', !isExpanded);
                    
                    console.log('Sous-menu mobile toggled:', !isExpanded ? 'ouvert' : 'fermé');
                }
            });
                
            // Support de la navigation au clavier
            link.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    
                    // Simuler un clic sur le lien
                    this.click();
                }
            });
        });
    }
        
    // Gestion des liens dans les sous-menus
    const submenuLinks = document.querySelectorAll('.modern-mobile-submenu-link');
    if (submenuLinks.length > 0) {
        submenuLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                console.log('Lien sous-menu mobile cliqué');
                
                // Fermer le menu mobile complet
                mobileToggle.classList.remove('active');
                mobileMenu.classList.remove('active');
                
                if (mobileOverlay) {
                    mobileOverlay.classList.remove('active');
                    mobileOverlay.style.visibility = 'hidden';
                    mobileOverlay.style.opacity = '0';
                    mobileOverlay.style.pointerEvents = 'none';
                }
                
                mobileMenu.style.visibility = 'hidden';
                mobileMenu.style.opacity = '0';
                mobileMenu.style.transform = 'translateX(-100%)';
                
                mobileToggle.setAttribute('aria-expanded', 'false');
                document.body.style.overflow = '';
            });
        });
    }
    
    // Ajouter des gestionnaires d'événements pour les liens du menu mobile
    const mobileNavLinks = document.querySelectorAll('.modern-mobile-nav-link:not(.has-dropdown)');
    mobileNavLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            // Fermer le menu mobile après avoir cliqué sur un lien
            setTimeout(function() {
                mobileToggle.classList.remove('active');
                mobileMenu.classList.remove('active');
                
                if (mobileOverlay) {
                    mobileOverlay.classList.remove('active');
                    mobileOverlay.style.visibility = 'hidden';
                    mobileOverlay.style.opacity = '0';
                    mobileOverlay.style.pointerEvents = 'none';
                }
                
                mobileMenu.style.visibility = 'hidden';
                mobileMenu.style.opacity = '0';
                mobileMenu.style.transform = 'translateX(-100%)';
                
                mobileToggle.setAttribute('aria-expanded', 'false');
                document.body.style.overflow = '';
            }, 100); // Petit délai pour permettre la navigation
        });
    });
});
