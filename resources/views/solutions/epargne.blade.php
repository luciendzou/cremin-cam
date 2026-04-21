@extends('layouts.app')

@section('title', 'CREMIN-CAM | Comptes d\'Epargne')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cremin_cam_solo_visa.css') }}">
@endpush

@section('content')
    <main class="sv-page">
        <section class="sv-hero sv-hero--solo">
            <div class="sv-container sv-hero-in">
                <div class="reveal">
                    <div class="sv-tag">Solution d'epargne</div>
                    <h1>Pourquoi <span>epargner</span> ?</h1>
                    <p class="sv-sub">L'epargne est une partie du revenu qui n'est pas consommee. Elle peut etre utilisee pour realiser des projets, faire face aux imprevus ou preparer sa retraite. Pour vous permettre de mieux epargner, CREMIN-CAM vous offre plusieurs possibilites adaptees a votre avenir.</p>

                    <div class="sv-perks">
                        <div class="sv-perk">
                            <svg viewBox="0 0 24 24"><path d="M9 11l3 3L22 4"></path></svg>
                            Epargner pour vos projets personnels et familiaux
                        </div>
                        <div class="sv-perk">
                            <svg viewBox="0 0 24 24"><path d="M9 11l3 3L22 4"></path></svg>
                            Faire face aux imprévus avec plus de serenite
                        </div>
                        <div class="sv-perk">
                            <svg viewBox="0 0 24 24"><path d="M9 11l3 3L22 4"></path></svg>
                            Choisir un compte adapte a votre objectif
                        </div>
                    </div>

                    <div class="sv-btn-row">
                        <a href="{{ route('open-account') }}" class="sv-btn-primary">Je veux epargner</a>
                        <a href="#epargne-procedures" class="sv-btn-secondary">Voir les procedures</a>
                    </div>
                </div>

                <div class="reveal d1">
                    <div class="sv-saving-visual">
                        <div class="sv-saving-circle"></div>
                        <div class="sv-saving-card sv-saving-card--main">
                            <div class="sv-saving-card-head">Votre futur</div>
                            <div class="sv-saving-card-title">Construire une epargne utile</div>
                            <div class="sv-saving-card-copy">Des comptes penses pour preparer vos projets, vos enfants, votre retraite ou vos objectifs a long terme.</div>
                        </div>
                        <div class="sv-saving-card sv-saving-card--accent">
                            <div class="sv-saving-badge">4+</div>
                            <div class="sv-saving-small">Formules d'epargne disponibles</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="sv-stats">
            <div class="sv-container sv-stats-in">
                <div class="sv-stat reveal d1">
                    <div class="sv-stat-num">6<span>+</span></div>
                    <div class="sv-stat-label">Types d'epargne disponibles</div>
                </div>
                <div class="sv-stat reveal d2">
                    <div class="sv-stat-num">10<span>k</span></div>
                    <div class="sv-stat-label">Solde minimum en compte</div>
                </div>
                <div class="sv-stat reveal d3">
                    <div class="sv-stat-num">0<span>F</span></div>
                    <div class="sv-stat-label">Frais d'inscription</div>
                </div>
                <div class="sv-stat reveal d4">
                    <div class="sv-stat-num">6<span>+</span></div>
                    <div class="sv-stat-label">Types d'epargne disponibles</div>
                </div>
            </div>
        </div>

        <section class="sv-section" id="epargne-procedures">
            <div class="sv-container">
                <div class="sv-split-intro reveal">
                    <div>
                        <div class="sv-kicker">Ouverture</div>
                        <h2 class="sv-title">Comment ouvrir un <span>compte d'epargne</span></h2>
                        <p class="sv-copy">Les procedures d'ouverture sont simples et vous permettent de commencer a epargner rapidement avec un cadre clair.</p>
                    </div>

                    <div class="sv-opening-visual" aria-hidden="true">
                        <div class="sv-opening-visual-card">
                            <img src="{{ asset('products/epargne-1.png') }}" alt="Ouverture d'un compte d'epargne CREMIN-CAM">
                        </div>
                    </div>
                </div>

                <div class="sv-grid-3">
                    <article class="sv-card reveal d1">
                        <h3>Pieces a fournir</h3>
                        <ul class="sv-list">
                            <li>Une photocopie d'une piece d'identite officielle</li>
                            <li>Deux photos d'identite</li>
                            <li>Un plan de localisation</li>
                        </ul>
                    </article>
                    <article class="sv-card reveal d2">
                        <h3>Conditions de depart</h3>
                        <ul class="sv-list">
                            <li>0F frais d'inscription</li>
                            <li>Solde minimum en compte 10 000 FCFA</li>
                        </ul>
                    </article>
                    <article class="sv-card reveal d3">
                        <h3>Prochaine etape</h3>
                        <p>Une fois le dossier constitue, notre equipe vous accompagne pour choisir le compte qui correspond le mieux a votre objectif d'epargne.</p>
                        <div class="sv-card-actions">
                            <a href="{{ route('open-account') }}" class="sv-inline-link">J'ouvre mon compte</a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="sv-section sv-section--off">
            <div class="sv-container">
                <div class="sv-center reveal">
                    <div class="sv-kicker">Quel compte avez-vous besoin ?</div>
                    <h2 class="sv-title">Des comptes d'epargne pour <span>chaque besoin</span></h2>
                    <p class="sv-copy">Que vous epargniez pour vos enfants, vos projets, votre retraite, la rentree scolaire ou un objectif contractuel, CREMIN-CAM vous propose plusieurs formules.</p>
                </div>

                <div class="sv-grid-4">
                    <article class="sv-card reveal d1">
                        <h3>Depot a Terme (DAT)</h3>
                        <p>Beneficiez d'un taux d'interet plus eleve qu'une epargne classique, en contrepartie du blocage des sommes deposees pendant une certaine duree.</p>
                    </article>
                    <article class="sv-card reveal d2">
                        <h3>Epargne VIP</h3>
                        <p>Une solution pratique pour epargner ou que vous soyez, sans avoir a vous rendre dans les bureaux de la cooperative.</p>
                    </article>
                    <article class="sv-card reveal d3">
                        <h3>Epargne Membre</h3>
                        <p>Une formule reservee aux membres qui souhaitent construire une epargne a long terme avec des avantages utiles.</p>
                    </article>
                    <article class="sv-card reveal d4">
                        <h3>Epargne Junior</h3>
                        <p>Constituez une epargne pour votre ou vos enfants mineurs, a votre convenance, et disposez-en sans formalites particulieres.</p>
                    </article>
                    <article class="sv-card reveal d5">
                        <h3>Epargne rentree scolaire</h3>
                        <p>Preparez plus sereinement les depenses liees a la rentree scolaire grace a une epargne anticipee et progressive.</p>
                    </article>
                    <article class="sv-card reveal d6">
                        <h3>Epargne Libre</h3>
                        <p>Constituez une epargne selon votre convenance pour realiser vos projets les plus chers : maison, retraite ou objectifs personnels.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="sv-section">
            <div class="sv-container">
                <div class="sv-vip-band reveal">
                    <div>
                        <div class="sv-kicker">Epargne VIP</div>
                        <h2 class="sv-title">L'epargne dont vous avez toujours <span>reve</span> !</h2>
                        <p class="sv-copy">CREMIN-CAM a mis en place cette formule pour aider ses membres a epargner tout ce qu'ils veulent et ou qu'ils se trouvent, sans avoir a se rendre dans les bureaux de la cooperative.</p>
                    </div>
                    <div class="sv-btn-row">
                        <a href="{{ route('contact') }}" class="sv-btn-primary">En savoir davantage</a>
                        <a href="{{ route('open-account') }}" class="sv-btn-secondary sv-btn-secondary--blue">Je veux epargner</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="sv-cta">
            <div class="sv-container sv-center sv-cta-in reveal">
                <h2>Pret a commencer votre<br><span>epargne des aujourd'hui ?</span></h2>
                <p>Notre equipe peut vous guider vers le bon compte selon votre besoin, votre horizon et votre capacite d'epargne.</p>
                <div class="sv-btn-row" style="justify-content:center;">
                    <a href="{{ route('open-account') }}" class="sv-btn-primary">J'ouvre mon compte</a>
                    <a href="{{ route('contact') }}" class="sv-btn-secondary">Nous contacter</a>
                </div>
            </div>
        </section>

        <section class="sv-section sv-related">
            <div class="sv-container">
                <div class="reveal">
                    <div class="sv-kicker">Solutions & Services associees</div>
                    <h2 class="sv-title">Explorez aussi</h2>
                </div>

                <div class="sv-related-grid">
                    <a href="{{ route('solutions.solo') }}" class="sv-related-card reveal d1">
                        <h3>SOLO Mobile Banking</h3>
                        <p>Gardez votre compte a portee de main avec l'application mobile de CREMIN-CAM.</p>
                        <span class="sv-related-link">Decouvrir <svg viewBox="0 0 14 14"><path d="M1 7h12M8 3l5 4-5 4"></path></svg></span>
                    </a>
                    <a href="{{ route('solutions.visa') }}" class="sv-related-card reveal d2">
                        <h3>Carte Visa Prepayee</h3>
                        <p>Une carte rechargeable pour vos paiements et retraits au Cameroun et a l'international.</p>
                        <span class="sv-related-link">Decouvrir <svg viewBox="0 0 14 14"><path d="M1 7h12M8 3l5 4-5 4"></path></svg></span>
                    </a>
                    <a href="{{ route('open-account') }}" class="sv-related-card reveal d3">
                        <h3>Ouvrir un compte</h3>
                        <p>Devenez membre CREMIN-CAM pour acceder a nos solutions et services.</p>
                        <span class="sv-related-link">Commencer <svg viewBox="0 0 14 14"><path d="M1 7h12M8 3l5 4-5 4"></path></svg></span>
                    </a>
                    <a href="{{ route('contact') }}" class="sv-related-card reveal d4">
                        <h3>Nous contacter</h3>
                        <p>Un conseiller peut vous aider a choisir la formule d'epargne la plus adaptee.</p>
                        <span class="sv-related-link">Parler a un conseiller <svg viewBox="0 0 14 14"><path d="M1 7h12M8 3l5 4-5 4"></path></svg></span>
                    </a>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.08 });

            document.querySelectorAll('.sv-page .reveal').forEach((element) => observer.observe(element));
        });
    </script>
@endpush
