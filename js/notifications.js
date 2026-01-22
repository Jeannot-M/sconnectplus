/**
 * Script de gestion des notifications flash
 * Pour le Programme Jeune & Entrepreneur
 * Sconnect Plus - 2025
 */

document.addEventListener('DOMContentLoaded', function() {
    // Sélectionner toutes les notifications flash
    const notifications = document.querySelectorAll('.flash-notification');
    
    // Pour chaque notification
    notifications.forEach(notification => {
        // Ajouter un gestionnaire d'événement au bouton de fermeture
        const closeButton = notification.querySelector('.close-notification');
        if (closeButton) {
            closeButton.addEventListener('click', function() {
                closeNotification(notification);
            });
        }
        
        // Fermer automatiquement après 5 secondes
        setTimeout(() => {
            closeNotification(notification);
        }, 5000);
    });
    
    // Fonction pour fermer une notification avec animation
    function closeNotification(notification) {
        notification.style.animation = 'fadeOut 0.5s ease forwards';
        
        // Supprimer l'élément après l'animation
        setTimeout(() => {
            notification.remove();
        }, 500);
    }
});
