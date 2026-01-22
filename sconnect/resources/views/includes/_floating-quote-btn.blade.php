{{-- Bouton flottant WhatsApp --}}
<a href="https://wa.me/+243821887423" 
   class="floating-quote-btn delayed-entrance" 
   id="floating-quote-btn"
   data-tooltip="{{ __('Contactez-nous sur WhatsApp') }}"
   aria-label="{{ __('Contactez-nous sur WhatsApp') }}"
   target="_blank"
   role="button">
    
    <div class="btn-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.5027 3.48912C18.2579 1.24599 15.2568 0 12.0916 0C5.4866 0 0.1835 5.29732 0.1835 11.8926C0.1835 13.9956 0.7461 16.0397 1.8172 17.8391L0.0835 24L6.3857 22.2969C8.1213 23.2702 10.0863 23.7893 12.0863 23.7893H12.0916C18.6913 23.7893 24 18.4919 24 11.8979C24 8.73935 22.7475 5.73224 20.5027 3.48912ZM12.0916 21.7799C10.3053 21.7799 8.5538 21.2821 7.0435 20.3354L6.6709 20.1152L2.8992 21.1305L3.9344 17.4602L3.6937 17.0717C2.6463 15.4952 2.0997 13.7225 2.0997 11.8926C2.0997 6.40615 6.5991 1.91472 12.0969 1.91472C14.7262 1.91472 17.1972 2.96484 19.0384 4.80475C20.8797 6.64466 21.9341 9.11195 21.9288 11.8979C21.9288 17.3896 17.5841 21.7799 12.0916 21.7799ZM17.5629 14.3821C17.2715 14.2361 15.8119 13.5182 15.5471 13.4242C15.2822 13.3302 15.0881 13.2842 14.8941 13.5755C14.7 13.8669 14.1374 14.5315 13.9646 14.7255C13.7972 14.9196 13.6245 14.9409 13.3331 14.7949C11.6775 14.0023 10.5771 13.3782 9.4714 11.4995C9.1747 10.9957 9.8081 11.0363 10.4 9.85283C10.4941 9.65878 10.448 9.49144 10.3807 9.34541C10.3133 9.19937 9.6959 7.74191 9.4554 7.15889C9.2202 6.59183 8.9797 6.67052 8.8016 6.6599C8.6342 6.64929 8.4401 6.64929 8.2461 6.64929C8.052 6.64929 7.7339 6.7166 7.469 7.00796C7.2042 7.29932 6.4387 8.01722 6.4387 9.47468C6.4387 10.9321 7.4904 12.3416 7.6311 12.5356C7.7765 12.7297 9.6692 15.6408 12.5742 16.9136C14.5339 17.7642 15.2981 17.8338 16.2661 17.6771C16.8607 17.5844 18.0004 16.9562 18.2409 16.2796C18.4814 15.603 18.4814 15.0199 18.414 14.9196C18.352 14.8086 18.158 14.7469 17.8666 14.6009L17.5629 14.3821Z"/>
        </svg>
    </div>
    
    <span class="btn-text">{{ __('WhatsApp') }}</span>
</a>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const floatingBtn = document.getElementById('floating-quote-btn');
    
    if (floatingBtn) {
        // Animation d'entrée après un délai
        setTimeout(() => {
            floatingBtn.classList.add('animate-in');
        }, 1000);
        
        // Gestion du clic
        floatingBtn.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Add loading state
            floatingBtn.style.transform = 'scale(0.95)';
            setTimeout(() => {
                floatingBtn.style.transform = 'scale(1)';
            }, 150);
            
            // Redirect to quote request page
            window.location.href = 'https://wa.me/+243821887423';
        });
        
        // Masquer/afficher selon le scroll (optionnel)
        let lastScrollY = window.scrollY;
        let ticking = false;
        
        function updateButtonVisibility() {
            const currentScrollY = window.scrollY;
            
            // Masquer si on scroll vers le bas rapidement
            if (currentScrollY > lastScrollY && currentScrollY > 200) {
                floatingBtn.style.transform = 'translateY(100px)';
                floatingBtn.style.opacity = '0';
            } else {
                floatingBtn.style.transform = 'translateY(0)';
                floatingBtn.style.opacity = '1';
            }
            
            lastScrollY = currentScrollY;
            ticking = false;
        }
        
        window.addEventListener('scroll', function() {
            if (!ticking) {
                requestAnimationFrame(updateButtonVisibility);
                ticking = true;
            }
        });
        
        // Afficher une notification après un certain temps (optionnel)
        setTimeout(() => {
            floatingBtn.classList.add('show-notification');
            
            // Retirer la notification après quelques secondes
            setTimeout(() => {
                floatingBtn.classList.remove('show-notification');
            }, 5000);
        }, 10000); // Après 10 secondes sur la page
        
        // Gestion responsive - version compacte sur mobile
        function handleResponsive() {
            if (window.innerWidth <= 480) {
                floatingBtn.classList.add('compact');
            } else {
                floatingBtn.classList.remove('compact');
            }
        }
        
        handleResponsive();
        window.addEventListener('resize', handleResponsive);
        
        // Accessibilité - gestion du clavier
        floatingBtn.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                floatingBtn.click();
            }
        });
    }
});
</script>
