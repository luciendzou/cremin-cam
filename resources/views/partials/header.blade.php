<div class="topbar">
    <div class="topbar-inner">
        <div class="topbar-contact">
            <a href="mailto:info.cremincam@cremincam.com" class="topbar-link">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                    <polyline points="22,6 12,13 2,6"></polyline>
                </svg>
                <span>info.cremincam@cremincam.com</span>
            </a>
            <a href="tel:+237697046925" class="topbar-link">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 3.07 8.81 2 2 0 0 1 5.09 3h3a2 2 0 0 1 2 1.72"></path>
                </svg>
                <span>(+237) 697 04 69 25</span>
            </a>
        </div>

        <div class="topbar-social">
            <a href="#" aria-label="Facebook">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M15 8h3V4h-3c-2.2 0-4 1.8-4 4v2H8v4h3v6h4v-6h3l1-4h-4V8c0-.55.45-1 1-1z"></path>
                </svg>
            </a>
            <a href="#" aria-label="Instagram">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <rect x="3" y="3" width="18" height="18" rx="5"></rect>
                    <circle cx="12" cy="12" r="4"></circle>
                    <circle cx="17.5" cy="6.5" r="1"></circle>
                </svg>
            </a>
            <a href="#" aria-label="LinkedIn">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4V9h4v2"></path>
                    <rect x="2" y="9" width="4" height="12"></rect>
                    <circle cx="4" cy="4" r="2"></circle>
                </svg>
            </a>
            <a href="#" aria-label="YouTube">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M22.5 6.5a3 3 0 0 0-2.1-2.1C18.5 4 12 4 12 4s-6.5 0-8.4.4a3 3 0 0 0-2.1 2.1C1 8.4 1 12 1 12s0 3.6.5 5.5a3 3 0 0 0 2.1 2.1C5.5 20 12 20 12 20s6.5 0 8.4-.4a3 3 0 0 0 2.1-2.1C23 15.6 23 12 23 12s0-3.6-.5-5.5z"></path>
                    <polygon points="10 9 16 12 10 15 10 9"></polygon>
                </svg>
            </a>
        </div>
    </div>
</div>

<nav>
    <div class="nav-inner">
        <a href="{{ route('home') }}" class="nav-logo">
            <img
                src="{{asset('logo/cremincam.png')}}"
                alt="CREMIN-CAM"
                onerror="this.style.display='none';this.nextElementSibling.style.display='flex'"
            >
            <span class="nav-logo-fallback">
                <span class="nav-logo-mark">
                    <svg width="18" height="18" viewBox="0 0 20 20" fill="#F5A020" aria-hidden="true">
                        <path d="M10 2L3 7v11h4v-5h6v5h4V7z" />
                    </svg>
                </span>
                <span class="nav-logo-text">CREMIN-CAM</span>
            </span>
        </a>

        <div class="nav-links">
            <a href="{{ route('solutions') }}">Solutions</a>
            <a href="{{ route('services') }}">Services</a>
            <a href="{{ route('projects') }}">Projets</a>
            <a href="{{ route('branches') }}">Agences</a>
            <div class="nav-dropdown">
                <button type="button" class="nav-dropdown-toggle" aria-haspopup="true">
                    Microfinance
                    <svg viewBox="0 0 12 12" aria-hidden="true">
                        <path d="M2 4l4 4 4-4" />
                    </svg>
                </button>
                <div class="nav-dropdown-menu">
                    <a href="{{ route('about') }}">À propos</a>
                    <a href="{{ route('history') }}">Notre histoire</a>
                    <a href="{{ route('governance') }}">Nos organes</a>
                    <a href="#">L'équipe</a>
                    <a href="#">Carrières</a>
                </div>
            </div>
            <a href="{{ route('contact') }}">Contacts</a>
        </div>

        <a href="{{ route('open-account') }}" class="nav-cta">Ouvrir un compte</a>
    </div>
</nav>
