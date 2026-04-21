@extends('layouts.app')

@section('title', 'CREMIN-CAM | SOLO Mobile Banking')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cremin_cam_solo_visa.css') }}">
@endpush

@section('content')
    <main class="sv-page">
        <section class="sv-hero sv-hero--solo">
            <div class="sv-container sv-hero-in">
                <div class="reveal">
                    <div class="sv-tag">Solution digitale</div>
                    <h1>SOLO, votre banque<br><span>dans votre poche</span></h1>
                    <p class="sv-sub">Consultez votre compte, suivez vos mouvements et accedez a vos operations essentielles ou que vous soyez, 24h/24 et 7j/7.</p>

                    <div class="sv-perks">
                        <div class="sv-perk">
                            <svg viewBox="0 0 24 24"><path d="M9 11l3 3L22 4"></path></svg>
                            Consultation du solde et suivi des mouvements en temps reel
                        </div>
                        <div class="sv-perk">
                            <svg viewBox="0 0 24 24"><path d="M9 11l3 3L22 4"></path></svg>
                            Acces simplifie aux operations utiles depuis votre mobile
                        </div>
                        <div class="sv-perk">
                            <svg viewBox="0 0 24 24"><path d="M9 11l3 3L22 4"></path></svg>
                            Solution accessible aux membres CREMIN-CAM
                        </div>
                    </div>

                    <div class="sv-btn-row">
                        <a href="https://play.google.com/store/apps/details?id=com.cagecfi.pmobile_cremincam_client&hl=fr" target="_blank" rel="noopener noreferrer" class="sv-btn-primary">Telecharger SOLO</a>
                        <a href="{{ route('contact') }}" class="sv-btn-secondary">Nous contacter</a>
                    </div>
                </div>

                <div class="solo-phone-wrap reveal d1" aria-hidden="true">
                    <div class="solo-phone">
                        <div class="solo-screen">
                            <div class="solo-screen-top">
                                <div class="solo-mark">SOLO <span>by CREMIN-CAM</span></div>
                                <div class="solo-badge"></div>
                            </div>
                            <div class="solo-balance">
                                <div class="solo-balance-label">SOLDE DISPONIBLE</div>
                                <div class="solo-balance-amount">1 250 000</div>
                            </div>
                            <div class="solo-action-grid">
                                <div class="solo-action"></div>
                                <div class="solo-action"></div>
                                <div class="solo-action"></div>
                                <div class="solo-action"></div>
                            </div>
                            <div class="solo-txn-list">
                                <div class="solo-txn-title">ACTIVITE RECENTE</div>
                                <div class="solo-txn">
                                    <div class="solo-txn-dot"></div>
                                    <div class="solo-txn-meta">
                                        <div class="solo-txn-name">Transfert</div>
                                        <div class="solo-txn-date">Aujourd'hui</div>
                                    </div>
                                    <div class="solo-txn-value">-35 000</div>
                                </div>
                                <div class="solo-txn">
                                    <div class="solo-txn-dot"></div>
                                    <div class="solo-txn-meta">
                                        <div class="solo-txn-name">Depot</div>
                                        <div class="solo-txn-date">Hier</div>
                                    </div>
                                    <div class="solo-txn-value">+120 000</div>
                                </div>
                                <div class="solo-txn">
                                    <div class="solo-txn-dot"></div>
                                    <div class="solo-txn-meta">
                                        <div class="solo-txn-name">Paiement</div>
                                        <div class="solo-txn-date">Lundi</div>
                                    </div>
                                    <div class="solo-txn-value">-18 500</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="sv-stats">
            <div class="sv-container sv-stats-in">
                <div class="sv-stat reveal d1">
                    <div class="sv-stat-num">24<span>h</span></div>
                    <div class="sv-stat-label">Acces permanent</div>
                </div>
                <div class="sv-stat reveal d2">
                    <div class="sv-stat-num">7<span>j/7</span></div>
                    <div class="sv-stat-label">Disponibilite du service</div>
                </div>
                <div class="sv-stat reveal d3">
                    <div class="sv-stat-num">1<span>app</span></div>
                    <div class="sv-stat-label">Pour vos operations utiles</div>
                </div>
                <div class="sv-stat reveal d4">
                    <div class="sv-stat-num">100<span>%</span></div>
                    <div class="sv-stat-label">Suivi mobile</div>
                </div>
            </div>
        </div>

        <section class="sv-section">
            <div class="sv-container">
                <div class="reveal">
                    <div class="sv-kicker">Fonctionnalites</div>
                    <h2 class="sv-title">Les avantages de <span>SOLO</span></h2>
                    <p class="sv-copy">Une application pensee pour vous donner plus d'autonomie dans la gestion de votre compte, tout en gardant un lien simple avec votre microfinance.</p>
                </div>

                <div class="sv-grid-4">
                    <article class="sv-card reveal d1">
                        <div class="sv-card-icon"><svg viewBox="0 0 24 24"><rect x="5" y="2" width="14" height="20" rx="2"></rect><path d="M12 18h.01"></path></svg></div>
                        <h3>Compte accessible a tout moment</h3>
                        <p>Consultez vos informations de compte sans attendre un passage en agence.</p>
                    </article>
                    <article class="sv-card reveal d2">
                        <div class="sv-card-icon"><svg viewBox="0 0 24 24"><path d="M3 12h18"></path><path d="M12 3v18"></path></svg></div>
                        <h3>Operations plus fluides</h3>
                        <p>Accedez rapidement aux fonctions utiles pour gerer votre quotidien financier.</p>
                    </article>
                    <article class="sv-card reveal d3">
                        <div class="sv-card-icon"><svg viewBox="0 0 24 24"><path d="M21 10H3"></path><path d="M21 6H3"></path><path d="M21 14H3"></path><path d="M21 18H3"></path></svg></div>
                        <h3>Vision claire des mouvements</h3>
                        <p>Gardez un suivi plus lisible de vos transactions et de votre activite.</p>
                    </article>
                    <article class="sv-card reveal d4">
                        <div class="sv-card-icon"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg></div>
                        <h3>Usage rassurant</h3>
                        <p>Un acces mobile qui renforce votre autonomie tout en restant dans l'ecosysteme CREMIN-CAM.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="sv-section sv-section--off">
            <div class="sv-container">
                <div class="sv-center reveal">
                    <div class="sv-kicker">Demarrage</div>
                    <h2 class="sv-title">Comment utiliser <span>SOLO</span></h2>
                    <p class="sv-copy">Quelques etapes suffisent pour profiter de l'application et retrouver vos services sur mobile.</p>
                </div>

                <div class="sv-steps sv-steps--4">
                    <article class="sv-step reveal d1">
                        <div class="sv-step-num">1</div>
                        <h3>Telechargez l'application</h3>
                        <p>Installez SOLO depuis le Google Play Store sur votre smartphone.</p>
                    </article>
                    <article class="sv-step reveal d2">
                        <div class="sv-step-num">2</div>
                        <h3>Connectez-vous</h3>
                        <p>Utilisez vos references de compte pour activer votre espace mobile.</p>
                    </article>
                    <article class="sv-step reveal d3">
                        <div class="sv-step-num">3</div>
                        <h3>Verifiez votre acces</h3>
                        <p>Validez votre identite selon la procedure definie pour securiser votre compte.</p>
                    </article>
                    <article class="sv-step reveal d4">
                        <div class="sv-step-num">4</div>
                        <h3>Profitez de SOLO</h3>
                        <p>Suivez votre compte et utilisez vos fonctions essentielles directement depuis votre mobile.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="sv-section">
            <div class="sv-container sv-download">
                <div class="reveal">
                    <div class="sv-kicker">Application mobile</div>
                    <h2 class="sv-title">Telechargez <span>SOLO</span> des maintenant</h2>
                    <p class="sv-copy">Toutes vos operations bancaires accessibles sur votre mobile, avec une interface plus simple pour suivre votre quotidien financier.</p>

                    <a href="https://play.google.com/store/apps/details?id=com.cagecfi.pmobile_cremincam_client&hl=fr" target="_blank" rel="noopener noreferrer" class="sv-store-card">
                        <svg viewBox="0 0 24 24"><path d="M3 20.5v-17a1 1 0 0 1 1.5-.87l15 8.5a1 1 0 0 1 0 1.74l-15 8.5A1 1 0 0 1 3 20.5z"></path></svg>
                        <span>
                            <small>TELECHARGER SUR</small>
                            <strong>Google Play</strong>
                        </span>
                    </a>

                    <div class="sv-qr-box">
                        <div class="sv-qr-code">
                            <svg viewBox="0 0 40 40">
                                <rect x="2" y="2" width="16" height="16" fill="none" stroke="#1A5FA8" stroke-width="2"></rect>
                                <rect x="5" y="5" width="10" height="10" fill="#1A5FA8"></rect>
                                <rect x="22" y="2" width="16" height="16" fill="none" stroke="#1A5FA8" stroke-width="2"></rect>
                                <rect x="25" y="5" width="10" height="10" fill="#1A5FA8"></rect>
                                <rect x="2" y="22" width="16" height="16" fill="none" stroke="#1A5FA8" stroke-width="2"></rect>
                                <rect x="5" y="25" width="10" height="10" fill="#1A5FA8"></rect>
                                <rect x="22" y="22" width="4" height="4" fill="#1A5FA8"></rect>
                                <rect x="28" y="22" width="4" height="4" fill="#1A5FA8"></rect>
                                <rect x="34" y="22" width="4" height="4" fill="#1A5FA8"></rect>
                                <rect x="22" y="28" width="4" height="4" fill="#1A5FA8"></rect>
                                <rect x="30" y="30" width="8" height="8" fill="#1A5FA8"></rect>
                            </svg>
                        </div>
                        <div>
                            <h4>Scanner pour telecharger</h4>
                            <p>Gardez un espace prevu pour votre QR code officiel de telechargement.</p>
                        </div>
                    </div>
                </div>

                <div class="sv-app-visual reveal d1" aria-hidden="true">
                    <img src="{{ asset('products/app-mob-2.png') }}" alt="Apercu de l'application SOLO">
                </div>
            </div>
        </section>

        <section class="sv-cta">
            <div class="sv-container sv-center sv-cta-in reveal">
                <h2>Pas encore membre ?<br><span>Ouvrez votre compte d'abord</span></h2>
                <p>SOLO est accessible aux membres CREMIN-CAM. Ouvrez votre compte et lancez votre experience mobile dans de bonnes conditions.</p>
                <div class="sv-btn-row" style="justify-content:center;">
                    <a href="{{ route('open-account') }}" class="sv-btn-primary">Ouvrir mon compte</a>
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
                    <a href="{{ route('solutions.visa') }}" class="sv-related-card reveal d1">
                        <h3>Carte Visa Prepayee</h3>
                        <p>Paiements en ligne, retraits et usage international avec une carte rechargeable.</p>
                        <span class="sv-related-link">Decouvrir <svg viewBox="0 0 14 14"><path d="M1 7h12M8 3l5 4-5 4"></path></svg></span>
                    </a>
                    <a href="{{ route('open-account') }}" class="sv-related-card reveal d2">
                        <h3>Ouverture de compte</h3>
                        <p>Rejoignez CREMIN-CAM pour acceder a vos solutions bancaires et digitales.</p>
                        <span class="sv-related-link">Commencer <svg viewBox="0 0 14 14"><path d="M1 7h12M8 3l5 4-5 4"></path></svg></span>
                    </a>
                    <a href="{{ route('services.show', 'transferts-nationaux-internationaux') }}" class="sv-related-card reveal d3">
                        <h3>Transferts</h3>
                        <p>Envoyez et recevez des fonds via nos partenaires nationaux et internationaux.</p>
                        <span class="sv-related-link">Voir le service <svg viewBox="0 0 14 14"><path d="M1 7h12M8 3l5 4-5 4"></path></svg></span>
                    </a>
                    <a href="{{ route('contact') }}" class="sv-related-card reveal d4">
                        <h3>Nous contacter</h3>
                        <p>Notre equipe peut vous guider pour activer SOLO ou choisir la bonne solution.</p>
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
