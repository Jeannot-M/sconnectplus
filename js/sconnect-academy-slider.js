/**
 * Sconnect Academy - Slider JavaScript
 * Script pour gérer le slider automatique de la section hero
 */

document.addEventListener('DOMContentLoaded', function() {
    // Sélectionner les éléments du slider
    const slides = document.querySelectorAll('.academy-slide');
    const sliderContainer = document.querySelector('.academy-slider-container');
    
    if (!slides.length || !sliderContainer) {
        console.error('Éléments du slider non trouvés');
        return;
    }
    
    console.log('Initialisation du slider avec', slides.length, 'slides');
    
    let currentSlide = 0;
    const slideInterval = 5000; // Intervalle de 5 secondes entre les slides
    
    // Fonction pour passer au slide suivant
    function nextSlide() {
        // Retirer la classe active du slide actuel
        slides[currentSlide].classList.remove('active');
        
        // Passer au slide suivant (ou revenir au premier)
        currentSlide = (currentSlide + 1) % slides.length;
        
        // Ajouter la classe active au nouveau slide
        slides[currentSlide].classList.add('active');
        
        // Animation de transition
        slides[currentSlide].style.animation = 'fadeIn 1s ease forwards';
        
        console.log('Passage au slide', currentSlide + 1);
    }
    
    // Fonction pour passer au slide précédent
    function prevSlide() {
        // Retirer la classe active du slide actuel
        slides[currentSlide].classList.remove('active');
        
        // Passer au slide précédent (ou aller au dernier)
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        
        // Ajouter la classe active au nouveau slide
        slides[currentSlide].classList.add('active');
        
        // Animation de transition
        slides[currentSlide].style.animation = 'fadeIn 1s ease forwards';
        
        console.log('Passage au slide', currentSlide + 1);
    }
    
    // Ajouter des boutons de navigation
    function addNavigationButtons() {
        // Créer les boutons
        const prevButton = document.createElement('button');
        prevButton.className = 'slider-nav prev-slide';
        prevButton.innerHTML = '<i class="fas fa-chevron-left"></i>';
        prevButton.setAttribute('aria-label', 'Slide précédent');
        
        const nextButton = document.createElement('button');
        nextButton.className = 'slider-nav next-slide';
        nextButton.innerHTML = '<i class="fas fa-chevron-right"></i>';
        nextButton.setAttribute('aria-label', 'Slide suivant');
        
        // Ajouter les boutons au conteneur
        sliderContainer.appendChild(prevButton);
        sliderContainer.appendChild(nextButton);
        
        // Ajouter les écouteurs d'événements
        prevButton.addEventListener('click', function(e) {
            e.preventDefault();
            clearInterval(slideTimer); // Arrêter le défilement automatique
            prevSlide();
            slideTimer = setInterval(nextSlide, slideInterval); // Redémarrer le défilement
        });
        
        nextButton.addEventListener('click', function(e) {
            e.preventDefault();
            clearInterval(slideTimer); // Arrêter le défilement automatique
            nextSlide();
            slideTimer = setInterval(nextSlide, slideInterval); // Redémarrer le défilement
        });
    }
    
    // Ajouter des indicateurs de slide
    function addSlideIndicators() {
        // Créer le conteneur d'indicateurs
        const indicatorsContainer = document.createElement('div');
        indicatorsContainer.className = 'slide-indicators';
        
        // Créer un indicateur pour chaque slide
        for (let i = 0; i < slides.length; i++) {
            const indicator = document.createElement('button');
            indicator.className = 'slide-indicator';
            if (i === currentSlide) {
                indicator.classList.add('active');
            }
            indicator.setAttribute('aria-label', `Aller au slide ${i + 1}`);
            indicator.dataset.slideIndex = i;
            
            // Ajouter l'écouteur d'événement
            indicator.addEventListener('click', function() {
                const slideIndex = parseInt(this.dataset.slideIndex);
                
                // Ne rien faire si on clique sur l'indicateur actif
                if (slideIndex === currentSlide) return;
                
                // Retirer la classe active du slide et de l'indicateur actuels
                slides[currentSlide].classList.remove('active');
                document.querySelector('.slide-indicator.active').classList.remove('active');
                
                // Mettre à jour le slide actuel
                currentSlide = slideIndex;
                
                // Ajouter la classe active au nouveau slide et indicateur
                slides[currentSlide].classList.add('active');
                this.classList.add('active');
                
                // Animation de transition
                slides[currentSlide].style.animation = 'fadeIn 1s ease forwards';
                
                // Réinitialiser le timer
                clearInterval(slideTimer);
                slideTimer = setInterval(nextSlide, slideInterval);
            });
            
            // Ajouter l'indicateur au conteneur
            indicatorsContainer.appendChild(indicator);
        }
        
        // Ajouter le conteneur d'indicateurs au slider
        sliderContainer.appendChild(indicatorsContainer);
    }
    
    // Mettre à jour les indicateurs lors du changement de slide
    function updateIndicators() {
        const indicators = document.querySelectorAll('.slide-indicator');
        indicators.forEach((indicator, index) => {
            if (index === currentSlide) {
                indicator.classList.add('active');
            } else {
                indicator.classList.remove('active');
            }
        });
    }
    
    // Fonction pour mettre à jour les indicateurs à chaque changement de slide
    const originalNextSlide = nextSlide;
    nextSlide = function() {
        originalNextSlide();
        updateIndicators();
    };
    
    const originalPrevSlide = prevSlide;
    prevSlide = function() {
        originalPrevSlide();
        updateIndicators();
    };
    
    // Ajouter les éléments de navigation
    addNavigationButtons();
    addSlideIndicators();
    
    // Démarrer le défilement automatique
    let slideTimer = setInterval(nextSlide, slideInterval);
    
    // Arrêter le défilement au survol
    sliderContainer.addEventListener('mouseenter', function() {
        clearInterval(slideTimer);
    });
    
    // Reprendre le défilement à la sortie du survol
    sliderContainer.addEventListener('mouseleave', function() {
        slideTimer = setInterval(nextSlide, slideInterval);
    });
    
    // Gérer les événements tactiles pour le swipe
    let touchStartX = 0;
    let touchEndX = 0;
    
    sliderContainer.addEventListener('touchstart', function(e) {
        touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });
    
    sliderContainer.addEventListener('touchend', function(e) {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    }, { passive: true });
    
    function handleSwipe() {
        // Seuil de swipe (en pixels)
        const swipeThreshold = 50;
        
        // Calculer la distance de swipe
        const swipeDistance = touchEndX - touchStartX;
        
        // Si la distance est suffisante, changer de slide
        if (Math.abs(swipeDistance) > swipeThreshold) {
            clearInterval(slideTimer);
            
            if (swipeDistance > 0) {
                // Swipe vers la droite -> slide précédent
                prevSlide();
            } else {
                // Swipe vers la gauche -> slide suivant
                nextSlide();
            }
            
            slideTimer = setInterval(nextSlide, slideInterval);
        }
    }
});
