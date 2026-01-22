/**
 * Footer Mobile Accordion
 * Script pour gérer le comportement d'accordéon dans le footer sur mobile
 */
document.addEventListener('DOMContentLoaded', function() {
    // Sélectionner les éléments nécessaires
    const accordionToggle = document.querySelector('.accordion-toggle');
    const footerLinksContainer = document.querySelector('.footer-links-container');
    const footerLinks = document.getElementById('footer-links-accordion');
    
    // Vérifier si les éléments existent
    if (!accordionToggle || !footerLinksContainer || !footerLinks) {
        console.error('Éléments d\'accordéon manquants:', { 
            accordionToggle: !!accordionToggle, 
            footerLinksContainer: !!footerLinksContainer, 
            footerLinks: !!footerLinks 
        });
        return;
    }
    
    // Log pour débogage
    console.log('Accordéon du footer initialisé', { 
        accordionToggle, 
        footerLinksContainer, 
        footerLinks 
    });
    
    // Fonction pour gérer le clic sur le bouton d'accordéon
    function toggleAccordion() {
        // Inverser l'état d'expansion
        const isExpanded = accordionToggle.getAttribute('aria-expanded') === 'true';
        accordionToggle.setAttribute('aria-expanded', !isExpanded);
        
        // Ajouter ou supprimer la classe active
        if (!isExpanded) {
            footerLinksContainer.classList.add('active');
        } else {
            footerLinksContainer.classList.remove('active');
        }
    }
    
    // Ajouter l'écouteur d'événement pour le clic
    accordionToggle.addEventListener('click', toggleAccordion);
    
    // Gérer l'accessibilité clavier
    accordionToggle.addEventListener('keydown', function(e) {
        // Activer sur Entrée ou Espace
        if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            toggleAccordion();
        }
    });
    
    // Fonction pour vérifier la taille de l'écran et réinitialiser l'accordéon sur desktop
    function checkScreenSize() {
        if (window.innerWidth > 480) {
            // Sur desktop, s'assurer que les liens sont toujours visibles
            accordionToggle.setAttribute('aria-expanded', 'true');
            footerLinksContainer.classList.add('active');
        } else {
            // Sur mobile, réinitialiser à l'état fermé par défaut
            accordionToggle.setAttribute('aria-expanded', 'false');
            footerLinksContainer.classList.remove('active');
        }
    }
    
    // Vérifier la taille de l'écran au chargement
    checkScreenSize();
    
    // Vérifier la taille de l'écran lors du redimensionnement
    window.addEventListener('resize', checkScreenSize);
});
