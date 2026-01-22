<header class="modern-header" id="modern-header">
    <!-- Navigation principale -->
    <nav class="modern-nav">
        <!-- Logo -->
        <a href="/" class="modern-logo">
            <img src="{{ asset('images/logo/logosite.png') }}" alt="Logo" loading="lazy">
        </a>

        <!-- Liens de navigation -->
        <ul class="modern-nav-links">
           

            <li class="modern-nav-item">
                <a href="{{ route('programme-jeune-entrepreneur') }}" class="modern-nav-link">
                    {{ __('Programme Jeune & Entrepreneur') }}
                </a>
            </li>
            <li class="modern-nav-item">
                <a href="{{ route('grand-salon-entrepreneurial') }}" class="modern-nav-link">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg> -->
                    {{ __('Grand Salon Entrepreneurial') }}
                </a>
            </li>
            <li class="modern-nav-item">
                <a href="{{ route('sconnect-academy') }}" class="modern-nav-link">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                    </svg> -->
                    {{ __('Sconnect Academy') }}
                </a>
            </li>
            <li class="modern-nav-item">
                <a href="{{ route('carriere') }}" class="modern-nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                    </svg>
                    {{ __('Sconnect Carrière') }}
                </a>
            </li>
        </ul>

        <!-- Actions utilisateur -->
        <div class="modern-user-actions">
            <!-- Espace vide pour maintenir la structure du header -->
        </div>

        <!-- Bouton menu mobile -->
        <button class="modern-mobile-toggle" aria-controls="mobile-menu" aria-expanded="false" id="mobile-toggle">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <!-- Overlay pour menu mobile -->
        <div class="modern-mobile-overlay" id="mobile-overlay"></div>
        
        <!-- Menu mobile -->
        <div class="modern-mobile-menu" id="mobile-menu">
            <!-- Logo en haut du menu mobile -->
           
            
            <ul class="modern-mobile-nav">
                <li class="modern-mobile-nav-item">
                    <a href="/" class="modern-mobile-nav-link">{{ __('Accueil') }}</a>
                </li>

                <li class="modern-mobile-nav-item">
                    <a href="{{ route('programme-jeune-entrepreneur') }}" class="modern-mobile-nav-link">{{ __('Programme Jeune & Entrepreneur') }}</a>
                </li>
                <li class="modern-mobile-nav-item">
                    <a href="{{ route('grand-salon-entrepreneurial') }}" class="modern-mobile-nav-link">{{ __('Grand Salon Entrepreneurial') }}</a>
                </li>
                <li class="modern-mobile-nav-item">
                    <a href="{{ route('sconnect-academy') }}" class="modern-mobile-nav-link">{{ __('Sconnect Academy') }}</a>
                </li>
                <li class="modern-mobile-nav-item">
                    <a href="{{ route('carriere') }}" class="modern-mobile-nav-link">{{ __('Sconnect Carrière') }}</a>
                </li>
                <li class="modern-mobile-nav-item">
                    <a href="{{ route('contact.index') }}" class="modern-mobile-nav-link">{{ __('Contact') }}</a>
                </li>
                <!-- Liens de connexion supprimés -->
            </ul>

            <div class="modern-mobile-logo" style="margin-top:50%;">
                <img src="{{ asset('images/logo/logosite.png') }}" alt="Logo" loading="lazy">
            </div>
        </div>
    </nav>


</header>

<script>
// Le script du header a été déplacé vers le fichier modern-header.js
</script>