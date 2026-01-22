/**
 * Script pour le slider automatique de la page carrière
 * Gère la transition automatique entre les images du slider
 */
document.addEventListener('DOMContentLoaded', function() {
    // Sélectionner toutes les slides
    const slides = document.querySelectorAll('.career-slide');
    
    // Si aucune slide n'est trouvée, ne pas continuer
    if (slides.length === 0) return;
    
    let currentSlide = 0;
    const slideCount = slides.length;
    
    // Fonction pour passer à la slide suivante
    function nextSlide() {
        // Retirer la classe active de la slide actuelle
        slides[currentSlide].classList.remove('active');
        
        // Passer à la slide suivante ou revenir à la première
        currentSlide = (currentSlide + 1) % slideCount;
        
        // Ajouter la classe active à la nouvelle slide
        slides[currentSlide].classList.add('active');
        
        console.log('Slide changed to:', currentSlide);
    }
    
    // Changer de slide toutes les 5 secondes
    setInterval(nextSlide, 5000);
    
    console.log('Career slider initialized with', slideCount, 'slides');
});
