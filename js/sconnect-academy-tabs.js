document.addEventListener('DOMContentLoaded', function() {
    console.log('Script de gestion des onglets chargé');
    
    // Sélectionner tous les onglets et les contenus
    const tabs = document.querySelectorAll('.category-tab');
    const contents = document.querySelectorAll('.category-content');
    const tabsContainer = document.querySelector('.program-categories');
    
    console.log('Nombre d\'onglets trouvés:', tabs.length);
    console.log('Nombre de contenus trouvés:', contents.length);
    
    // Vérifier l'état initial
    const activeTab = document.querySelector('.category-tab.active');
    const activeContent = document.querySelector('.category-content.active');
    console.log('Onglet actif initial:', activeTab ? activeTab.getAttribute('data-category') : 'aucun');
    console.log('Contenu actif initial:', activeContent ? activeContent.id : 'aucun');
    
    // Fonction pour faire défiler l'onglet actif dans la vue
    function scrollTabIntoView(tab) {
        if (window.innerWidth <= 768 && tabsContainer) {
            // Calculer la position de défilement pour centrer l'onglet
            const containerWidth = tabsContainer.offsetWidth;
            const tabWidth = tab.offsetWidth;
            const tabLeft = tab.offsetLeft;
            const scrollPosition = tabLeft - (containerWidth / 2) + (tabWidth / 2);
            
            // Faire défiler en douceur
            tabsContainer.scrollTo({
                left: scrollPosition,
                behavior: 'smooth'
            });
        }
    }
    
    // Ajouter un écouteur d'événement à chaque onglet
    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const category = this.getAttribute('data-category');
            console.log('Onglet cliqué:', category);
            
            // Retirer la classe active de tous les onglets
            tabs.forEach(t => t.classList.remove('active'));
            
            // Ajouter la classe active à l'onglet cliqué
            this.classList.add('active');
            console.log('Classe active ajoutée à l\'onglet:', category);
            
            // Faire défiler l'onglet actif dans la vue sur mobile
            scrollTabIntoView(this);
            
            // Masquer tous les contenus
            contents.forEach(content => {
                content.classList.remove('active');
                content.style.display = 'none';
                console.log('Contenu masqué:', content.id);
            });
            
            // Afficher le contenu correspondant
            const targetContent = document.getElementById(category + '-programs');
            if (targetContent) {
                targetContent.classList.add('active');
                targetContent.style.display = 'grid';
                console.log('Contenu affiché:', targetContent.id);
            } else {
                console.error('Contenu cible non trouvé pour la catégorie:', category);
            }
        });
    });
    
    // Faire défiler l'onglet actif initial dans la vue si nécessaire
    if (activeTab) {
        scrollTabIntoView(activeTab);
    }
});
