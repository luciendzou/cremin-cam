@extends('layouts.app')

@section('title', 'CREMIN-CAM | Projet Agricole')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cremin_cam_projects.css') }}">
@endpush

@section('content')
    <div class="stripe"></div>

    <main class="projects-page">
        <section class="hero">
            <div class="hero-in reveal">
                <div class="hero-tag">Projet 02 - Agriculture</div>
                <h1>Financer l'agriculture,<br><span>nourrir la croissance</span></h1>
                <p class="hero-sub">
                    CREMIN-CAM accompagne les exploitants, cooperatives et filieres agricoles avec des
                    solutions de financement, un appui terrain et des partenariats a fort impact.
                </p>

                <div class="hero-pills">
                    <a href="{{ route('projects') }}" class="pill">Tous les projets</a>
                    <a href="{{ route('projects.immobilier') }}" class="pill">Projet Immobilier</a>
                    <a href="{{ route('contact') }}" class="pill active">Nous contacter</a>
                </div>
            </div>
        </section>

        <section class="proj-section alt">
            <div class="proj-in">
                <div class="reveal">
                    <div class="stag">Projet 02 - Agriculture</div>
                    <h2 class="stitle">Financer l'agriculture,<br><span class="gr">nourrir la croissance</span></h2>
                    <p class="ssub">
                        En partenariat avec le FODECC, CREMIN-CAM accompagne les agriculteurs camerounais
                        dans la modernisation et le developpement de leurs exploitations.
                    </p>
                </div>

                <div class="agri-hero-band reveal d1">
                    <div>
                        <div class="agri-band-tag">Partenariat strategique</div>
                        <h3>CREMIN-CAM x FODECC</h3>
                        <p>
                            Le FODECC soutient les filieres cacao, cafe et autres productions agricoles a
                            fort impact. Ensemble, nous facilitons l'acces aux financements, a l'encadrement
                            technique et a une meilleure structuration des exploitations.
                        </p>
                    </div>
                    <div class="fodecc-badge">
                        <div class="fodecc-badge-logo">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M12 3v18M3 12h18M6.5 6.5l11 11M17.5 6.5l-11 11" />
                            </svg>
                        </div>
                        <div class="fodecc-name">FODECC</div>
                        <div class="fodecc-label">Partenaire officiel</div>
                    </div>
                </div>

                <div class="agri-grid">
                    <div class="agri-card reveal d1">
                        <div class="agri-card-icon">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M12 21c4-2.5 7-6.6 7-11a7 7 0 1 0-14 0c0 4.4 3 8.5 7 11Z" />
                                <path d="M12 9c2 1 3 3 3 6" />
                            </svg>
                        </div>
                        <div class="agri-card-title">Financement d'exploitation</div>
                        <div class="agri-card-desc">Soutien pour developper les cultures, renforcer les capacites de production et equiper l'exploitation.</div>
                        <div class="agri-tag-chip">Cacao &middot; Cafe &middot; Vivrier</div>
                    </div>
                    <div class="agri-card reveal d2">
                        <div class="agri-card-icon">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M4 7h16v10H4zM8 11h8M8 15h5" />
                            </svg>
                        </div>
                        <div class="agri-card-title">Credit de campagne</div>
                        <div class="agri-card-desc">Financement saisonnier adapte aux besoins en intrants, main-d'oeuvre et logistique de production.</div>
                        <div class="agri-tag-chip">Remboursement sur recolte</div>
                    </div>
                    <div class="agri-card reveal d3">
                        <div class="agri-card-icon">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M7 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM17 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM3 19a4 4 0 0 1 8 0M13 19a4 4 0 0 1 8 0" />
                            </svg>
                        </div>
                        <div class="agri-card-title">Accompagnement collectif</div>
                        <div class="agri-card-desc">Solutions pensees pour les cooperatives, GIC et regroupements qui souhaitent se structurer durablement.</div>
                        <div class="agri-tag-chip">Cooperatives &middot; GIC</div>
                    </div>
                    <div class="agri-card reveal d1">
                        <div class="agri-card-icon">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M4 19h16M6 17V8l6-4 6 4v9M10 11h4M10 15h4" />
                            </svg>
                        </div>
                        <div class="agri-card-title">Formation & conseil</div>
                        <div class="agri-card-desc">Appui technique pour ameliorer les rendements, la gestion et les bonnes pratiques agricoles.</div>
                        <div class="agri-tag-chip">Appui technique inclus</div>
                    </div>
                    <div class="agri-card reveal d2">
                        <div class="agri-card-icon">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M12 21s8-4 8-10V6l-8-3-8 3v5c0 6 8 10 8 10Z" />
                                <path d="m9 12 2 2 4-4" />
                            </svg>
                        </div>
                        <div class="agri-card-title">Assurance recolte</div>
                        <div class="agri-card-desc">Couverture adaptee pour proteger les producteurs face aux aleas et mieux securiser les investissements.</div>
                        <div class="agri-tag-chip">Via FODECC & partenaires</div>
                    </div>
                    <div class="agri-card reveal d3">
                        <div class="agri-card-icon">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M3 12h18M12 3v18M5 7h14M5 17h14" />
                            </svg>
                        </div>
                        <div class="agri-card-title">Acces aux marches</div>
                        <div class="agri-card-desc">Mise en relation et facilitation de la commercialisation vers les circuits locaux et a l'export.</div>
                        <div class="agri-tag-chip">Export & marche local</div>
                    </div>
                </div>

                <div class="partnership-section reveal d2">
                    <div class="part-text">
                        <div class="stag">Pourquoi ce partenariat</div>
                        <h3>Pourquoi le FODECC<br>change tout pour vous</h3>
                        <p>
                            Ce partenariat ouvre l'acces a des conditions plus favorables, a des dispositifs
                            d'accompagnement concret et a des opportunites reelles pour accelerer la croissance
                            des activites agricoles.
                        </p>

                        <div class="part-list" style="margin-top:24px;">
                            <div class="part-item">
                                <div class="part-dot">
                                    <svg viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="m5 12 5 5L20 7" />
                                    </svg>
                                </div>
                                <span>Financement a taux preferentiels grace au fonds FODECC</span>
                            </div>
                            <div class="part-item">
                                <div class="part-dot">
                                    <svg viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="m5 12 5 5L20 7" />
                                    </svg>
                                </div>
                                <span>Acces aux agrements et certifications pour la filiere cacao-cafe</span>
                            </div>
                            <div class="part-item">
                                <div class="part-dot">
                                    <svg viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="m5 12 5 5L20 7" />
                                    </svg>
                                </div>
                                <span>Suivi terrain par des techniciens agricoles qualifies</span>
                            </div>
                            <div class="part-item">
                                <div class="part-dot">
                                    <svg viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="m5 12 5 5L20 7" />
                                    </svg>
                                </div>
                                <span>Prise en charge partielle des intrants dans certains programmes</span>
                            </div>
                            <div class="part-item">
                                <div class="part-dot">
                                    <svg viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="m5 12 5 5L20 7" />
                                    </svg>
                                </div>
                                <span>Remboursement flexible aligne sur les cycles de recolte</span>
                            </div>
                        </div>
                    </div>

                    <div class="part-visual">
                        <div class="part-logo-row">
                            <div class="part-logo-box blue-box">
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M12 3 5 7v10l7 4 7-4V7l-7-4Z" />
                                </svg>
                            </div>
                            <div class="part-plus">+</div>
                            <div class="part-logo-box">
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M12 3v18M3 12h18M6.5 6.5l11 11M17.5 6.5l-11 11" />
                                </svg>
                            </div>
                        </div>
                        <div class="part-caption"><strong>1 200+</strong><br>Agriculteurs soutenus</div>
                        <div class="part-caption"><strong>5</strong><br>Regions couvertes</div>
                        <div class="part-caption"><strong>3</strong><br>Filieres financees</div>
                    </div>
                </div>

                <div class="cta-agri reveal d3">
                    <div>
                        <h4>Vous etes agriculteur ou membre d'une cooperative ?</h4>
                        <p>Parlons de votre exploitation, de vos besoins de financement et des solutions disponibles avec CREMIN-CAM et ses partenaires.</p>
                    </div>
                    <a href="{{ route('contact') }}" class="btn-white">Soumettre mon projet</a>
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

            document.querySelectorAll('.projects-page .reveal').forEach((element) => revealObserver.observe(element));
        });
    </script>
@endpush
