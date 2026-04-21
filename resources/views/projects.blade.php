@extends('layouts.app')

@section('title', 'CREMIN-CAM | Nos Projets')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cremin_cam_projects.css') }}">
@endpush

@section('content')
    <h1 class="sr-only">Nos projets phares CREMIN-CAM</h1>

    <div class="stripe"></div>

    <main class="projects-page">
        <section class="hero">
            <div class="hero-in reveal">
                <div class="hero-tag">Nos Projets phares</div>
                <h1>Financer vos projets,<br><span>construire votre avenir</span></h1>
                <p class="hero-sub">
                    De l'acquisition d'un terrain a la modernisation d'une exploitation agricole -
                    CREMIN-CAM s'engage a vos cotes avec des financements concrets, accessibles et
                    adaptes a votre realite.
                </p>

                <div class="hero-pills">
                    <a href="{{ route('projects.immobilier') }}" class="pill active">
                        Projet Immobilier
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 5l7 7-7 7M5 12h14" />
                        </svg>
                    </a>
                    <a href="{{ route('projects.agricole') }}" class="pill">
                        Projet Agricole
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 5l7 7-7 7M5 12h14" />
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <section class="stat-row">
            <div class="stat-row-in">
                <div class="stat-cell reveal d1">
                    <div class="stat-num"><span class="counter" data-target="500">0</span><sup>+</sup></div>
                    <div class="stat-label">Terrains finances</div>
                </div>
                <div class="stat-cell reveal d2">
                    <div class="stat-num"><span class="counter" data-target="1200">0</span><sup>+</sup></div>
                    <div class="stat-label">Agriculteurs soutenus</div>
                </div>
                <div class="stat-cell reveal d3">
                    <div class="stat-num"><span class="counter" data-target="20">0</span><sup>+</sup></div>
                    <div class="stat-label">Annees d'experience</div>
                </div>
                <div class="stat-cell reveal d4">
                    <div class="stat-num"><span class="counter" data-target="98">0</span><sup>%</sup></div>
                    <div class="stat-label">Taux de satisfaction</div>
                </div>
            </div>
        </section>

        <section class="project-overview" style="margin-bottom: 4rem;">
            <div class="proj-in">
                <div class="reveal">
                    <div class="stag">Nos projets</div>
                    <h2 class="stitle">Deux projets phares, <span class="bl">un impact concret</span></h2>
                    <p class="ssub">
                        CREMIN-CAM accompagne des projets de vie et de croissance réelle, avec une approche terrain, des critères clairs et un suivi durable.
                    </p>
                </div>

                <div class="project-grid">
                    <a href="{{ route('projects.immobilier') }}" class="project-card reveal d1">
                        <div class="project-card-media project-card-media-blue">
                            <div class="project-card-chip">Projet 01</div>
                            <h3>Un membre,<br>un terrain</h3>
                        </div>
                        <div class="project-card-body">
                            <div class="project-card-title">Projet immobilier</div>
                            <div class="project-card-desc">Accession à la propriété foncière pour les membres avec étude du dossier, accompagnement et financement structuré.</div>
                            <span class="project-card-link">Voir le projet immobilier</span>
                        </div>
                    </a>

                    <a href="{{ route('projects.agricole') }}" class="project-card reveal d2">
                        <div class="project-card-media project-card-media-green">
                            <div class="project-card-chip">Projet 02</div>
                            <h3>Développer les exploitations,<br>soutenir les récoltes</h3>
                        </div>
                        <div class="project-card-body">
                            <div class="project-card-title">Projet agricole</div>
                            <div class="project-card-desc">Financements, campagnes agricoles, accompagnement collectif et appui terrain en lien avec les partenaires du secteur.</div>
                            <span class="project-card-link">Voir le projet agricole</span>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <section class="global-cta">
            <div class="global-cta-in reveal">
                <h2>Votre projet merite<br><span>le meilleur soutien</span></h2>
                <p>
                    Terrain, agriculture ou autre - si vous avez un projet, CREMIN-CAM a la
                    solution. Parlons-en des aujourd'hui.
                </p>
                <div class="global-cta-btns">
                    <a href="#footer-contact" class="btn-orange2">Demarrer mon projet</a>
                    <a href="#footer-contact" class="btn-outline-w2">Nous contacter</a>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        revealObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.08 });

            document.querySelectorAll('.reveal').forEach((element) => revealObserver.observe(element));

            const counterObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (!entry.isIntersecting) {
                        return;
                    }

                    const element = entry.target;
                    const target = Number(element.dataset.target || 0);
                    const duration = 1200;
                    const startTime = performance.now();

                    const update = (timestamp) => {
                        const progress = Math.min((timestamp - startTime) / duration, 1);
                        element.textContent = Math.floor(progress * target).toLocaleString('fr-FR');

                        if (progress < 1) {
                            requestAnimationFrame(update);
                        } else {
                            element.textContent = target.toLocaleString('fr-FR');
                        }
                    };

                    requestAnimationFrame(update);
                    counterObserver.unobserve(element);
                });
            }, { threshold: 0.5 });

            document.querySelectorAll('.counter').forEach((element) => counterObserver.observe(element));

            document.querySelectorAll('.pill').forEach((pill) => {
                pill.addEventListener('click', () => {
                    document.querySelectorAll('.pill').forEach((item) => item.classList.remove('active'));
                    pill.classList.add('active');
                });
            });
        });
    </script>
@endpush
