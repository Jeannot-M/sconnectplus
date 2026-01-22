/**
 * Animation des statistiques - Version 1.0.0
 * Script pour animer les compteurs de statistiques de manière élégante
 */
document.addEventListener('DOMContentLoaded', function() {
    const statsSection = document.querySelector('.stats-section');
    const statsGrid = document.querySelector('.stats-grid');
    const statItems = document.querySelectorAll('.stat-item');
    
    if (!statsSection || !statsGrid || statItems.length === 0) return;
    
    // Options pour l'Intersection Observer
    const options = {
        root: null,
        rootMargin: '0px',
        threshold: 0.3
    };
    
    // Fonction pour animer les compteurs
    function animateCounters() {
        statsGrid.classList.add('animate');
        
        statItems.forEach((item, index) => {
            const counter = item.querySelector('.stat-number');
            const target = parseInt(item.dataset.target, 10);
            
            if (!counter || isNaN(target)) return;
            
            // Réinitialiser le compteur
            counter.textContent = '0';
            
            // Déterminer la durée de l'animation en fonction de la valeur cible
            const duration = target > 1000 ? 2000 : 1500;
            const increment = target / (duration / 16); // 60fps
            
            let current = 0;
            const timer = setInterval(() => {
                current += increment;
                
                // Arrondir à l'entier pour l'affichage
                const value = Math.round(current);
                counter.textContent = value.toLocaleString();
                
                // Arrêter l'animation lorsque la cible est atteinte
                if (current >= target) {
                    counter.textContent = target.toLocaleString();
                    clearInterval(timer);
                }
            }, 16);
        });
    }
    
    // Créer l'observer pour déclencher l'animation au scroll
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters();
                observer.unobserve(entry.target); // Observer une seule fois
            }
        });
    }, options);
    
    // Observer la section de statistiques
    observer.observe(statsSection);
    
    // Fonction pour réinitialiser les animations lors du redimensionnement
    let resizeTimer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            // Vérifier si la section est visible
            const rect = statsSection.getBoundingClientRect();
            const isVisible = rect.top < window.innerHeight && rect.bottom >= 0;
            
            if (isVisible && !statsGrid.classList.contains('animate')) {
                animateCounters();
            }
        }, 250);
    });
});
