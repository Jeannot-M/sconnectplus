// form-loader.js
document.addEventListener('DOMContentLoaded', function() {
    // 1. Créer le HTML du loader et l'ajouter au body s'il n'existe pas déjà
    if (!document.getElementById('global-form-loader')) {
        const loaderHTML = `
            <div id="global-form-loader">
                <div class="form-loader-spinner"></div>
                <div class="form-loader-text">En chargement...</div>
            </div>
        `;
        document.body.insertAdjacentHTML('beforeend', loaderHTML);
    }

    const loaderElement = document.getElementById('global-form-loader');

    // 2. Écouter tous les événements "submit" sur le document
    document.addEventListener('submit', function(event) {
        const form = event.target;

        // Si ce n'est pas un formulaire, on ignore
        if (!form || form.tagName !== 'FORM') return;

        // Exclusion de la barre de recherche, des déconnexions et des formulaires Livewire
        if (
            form.id === 'site-search-form' || 
            form.classList.contains('search-form') || 
            form.id === 'logout-form' ||
            form.hasAttribute('wire:submit.prevent') || 
            form.hasAttribute('wire:submit')
        ) {
            return; // On ne fait rien pour ces formulaires
        }

        // Vérifier si le formulaire est valide (si la validation HTML5 est présente)
        if (form.checkValidity && !form.checkValidity()) {
            return; // Le navigateur empêchera la soumission, on n'affiche pas le loader
        }

        // Afficher le loader
        loaderElement.classList.add('active');

        // Désactiver le bouton de soumission pour éviter les doubles clics
        const submitButtons = form.querySelectorAll('button[type="submit"], input[type="submit"]');
        submitButtons.forEach(button => {
            // Un léger délai pour permettre à la soumission initiale de partir avant de désactiver le bouton
            setTimeout(() => {
                button.disabled = true;
                button.style.pointerEvents = 'none';
            }, 50);
        });
    });
});
