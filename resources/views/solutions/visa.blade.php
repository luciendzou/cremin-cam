@extends('layouts.app')

@section('title', 'CREMIN-CAM | Carte Visa Prepayee')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cremin_cam_solo_visa.css') }}">
@endpush

@section('content')
    <main class="sv-page">
        <section class="sv-hero sv-hero--visa">
            <div class="sv-container sv-hero-in">
                <div class="reveal">
                    <div class="sv-tag">Solution internationale</div>
                    <h1>Carte Visa<br><span>Prepayee CREMIN-CAM</span></h1>
                    <p class="sv-sub">Accedez a votre argent ou que vous soyez. Une carte rechargeable, securisee et pratique pour vos paiements en ligne, vos achats et vos retraits.</p>

                    <div class="sv-perks">
                        <div class="sv-perk">
                            <svg viewBox="0 0 24 24"><path d="M9 11l3 3L22 4"></path></svg>
                            Paiement en ligne et en boutique dans le reseau Visa
                        </div>
                        <div class="sv-perk">
                            <svg viewBox="0 0 24 24"><path d="M9 11l3 3L22 4"></path></svg>
                            Carte rechargeable selon vos besoins
                        </div>
                        <div class="sv-perk">
                            <svg viewBox="0 0 24 24"><path d="M9 11l3 3L22 4"></path></svg>
                            Retraits possibles sur les distributeurs compatibles
                        </div>
                    </div>

                    <div class="sv-btn-row">
                        <a href="{{ route('contact') }}" class="sv-btn-primary">Commander ma carte</a>
                        <a href="#visa-details" class="sv-btn-secondary">En savoir plus</a>
                    </div>
                </div>

                <div class="visa-card-wrap reveal d1" aria-hidden="true">
                    <div class="visa-card">
                        <div class="visa-chip"></div>
                        <div class="visa-number">.... .... .... 4582</div>
                        <div class="visa-bottom">
                            <div class="visa-name">Nom du membre</div>
                            <div class="visa-expiry">Expire<span>12/28</span></div>
                        </div>
                        <div class="visa-label">VISA</div>
                    </div>
                </div>
            </div>
        </section>

        <div class="sv-stats">
            <div class="sv-container sv-stats-in">
                <div class="sv-stat reveal d1">
                    <div class="sv-stat-num">150<span>+</span></div>
                    <div class="sv-stat-label">Pays d'utilisation</div>
                </div>
                <div class="sv-stat reveal d2">
                    <div class="sv-stat-num">24<span>h</span></div>
                    <div class="sv-stat-label">Utilisation possible</div>
                </div>
                <div class="sv-stat reveal d3">
                    <div class="sv-stat-num">5<span>-10j</span></div>
                    <div class="sv-stat-label">Delai de production</div>
                </div>
                <div class="sv-stat reveal d4">
                    <div class="sv-stat-num">100<span>%</span></div>
                    <div class="sv-stat-label">Carte sous votre controle</div>
                </div>
            </div>
        </div>

        <section class="sv-section" id="visa-details">
            <div class="sv-container">
                <div class="reveal">
                    <div class="sv-kicker">Avantages</div>
                    <h2 class="sv-title">Tout ce que votre carte <span>vous permet</span></h2>
                    <p class="sv-copy">Une solution simple pour payer, retirer et gerer vos depenses avec plus de souplesse, au Cameroun comme a l'etranger.</p>
                </div>

                <div class="sv-grid-3">
                    <article class="sv-card reveal d1">
                        <div class="sv-card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><path d="M2 12h20"></path><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10A15.3 15.3 0 0 1 12 2z"></path></svg></div>
                        <h3>Acceptation internationale</h3>
                        <p>Utilisez votre carte dans un large reseau de points de vente et de services partout dans le monde.</p>
                    </article>
                    <article class="sv-card reveal d2">
                        <div class="sv-card-icon"><svg viewBox="0 0 24 24"><rect x="2" y="5" width="20" height="14" rx="2"></rect><path d="M2 10h20"></path></svg></div>
                        <h3>Paiements en ligne</h3>
                        <p>Reglez vos achats, reservations et abonnements via les plateformes compatibles.</p>
                    </article>
                    <article class="sv-card reveal d3">
                        <div class="sv-card-icon"><svg viewBox="0 0 24 24"><path d="M17 1l4 4-4 4"></path><path d="M3 11V9a4 4 0 0 1 4-4h14"></path><path d="M7 23l-4-4 4-4"></path><path d="M21 13v2a4 4 0 0 1-4 4H3"></path></svg></div>
                        <h3>Recharge facile</h3>
                        <p>Alimentez votre carte selon votre besoin pour garder le controle de votre budget.</p>
                    </article>
                    <article class="sv-card reveal d4">
                        <div class="sv-card-icon"><svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path></svg></div>
                        <h3>Retraits sur DAB</h3>
                        <p>Retirez des especes aux distributeurs compatibles selon les conditions du reseau.</p>
                    </article>
                    <article class="sv-card reveal d5">
                        <div class="sv-card-icon"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg></div>
                        <h3>Meilleure maitrise des depenses</h3>
                        <p>Choisissez le montant a charger pour gerer vos usages et limiter les depenses non prevues.</p>
                    </article>
                    <article class="sv-card reveal d6">
                        <div class="sv-card-icon"><svg viewBox="0 0 24 24"><rect x="5" y="2" width="14" height="20" rx="2"></rect><path d="M12 18h.01"></path></svg></div>
                        <h3>Complement utile a SOLO</h3>
                        <p>Associez votre carte a vos habitudes digitales pour un quotidien plus fluide.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="sv-section sv-section--off">
            <div class="sv-container">
                <div class="sv-center reveal">
                    <div class="sv-kicker">Usages</div>
                    <h2 class="sv-title">Payez dans toutes <span>les situations</span></h2>
                    <p class="sv-copy">Une carte pensee pour les paiements courants, les achats en ligne, les deplacements et les besoins ponctuels.</p>
                </div>

                <div class="sv-grid-4">
                    <article class="sv-card reveal d1">
                        <h3>Boutiques physiques</h3>
                        <p>Supermarches, restaurants, stations-service et points de vente compatibles Visa.</p>
                    </article>
                    <article class="sv-card reveal d2">
                        <h3>Achats en ligne</h3>
                        <p>Commandes, reservations, abonnements et paiements digitaux sur les plateformes compatibles.</p>
                    </article>
                    <article class="sv-card reveal d3">
                        <h3>Voyages et deplacements</h3>
                        <p>Une solution pratique pour payer plus facilement lors de vos sejours hors de votre ville ou a l'international.</p>
                    </article>
                    <article class="sv-card reveal d4">
                        <h3>Frais divers</h3>
                        <p>Reglements utiles pour certaines demarches, inscriptions ou besoins personnels.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="sv-section">
            <div class="sv-container">
                <div class="sv-center reveal">
                    <div class="sv-kicker">Comment l'obtenir</div>
                    <h2 class="sv-title">Votre carte en <span>3 etapes simples</span></h2>
                </div>

                <div class="sv-steps sv-steps--3">
                    <article class="sv-step reveal d1">
                        <div class="sv-step-num">1</div>
                        <h3>Faites la demande</h3>
                        <p>Rendez-vous en agence avec les informations utiles pour initier votre dossier.</p>
                    </article>
                    <article class="sv-step reveal d2">
                        <div class="sv-step-num">2</div>
                        <h3>Attendez la production</h3>
                        <p>Votre carte est preparee selon le delai communique apres validation de votre demande.</p>
                    </article>
                    <article class="sv-step reveal d3">
                        <div class="sv-step-num">3</div>
                        <h3>Activez et rechargez</h3>
                        <p>Recuperez votre carte puis alimentez-la pour commencer a l'utiliser.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="sv-cta">
            <div class="sv-container sv-center sv-cta-in reveal">
                <h2>Pret a payer<br><span>partout dans le monde ?</span></h2>
                <p>Commandez votre Carte Visa prepayee CREMIN-CAM et profitez d'une solution plus flexible pour vos paiements et retraits.</p>
                <div class="sv-btn-row" style="justify-content:center;">
                    <a href="{{ route('contact') }}" class="sv-btn-primary">Commander ma carte</a>
                    <a href="{{ route('branches') }}" class="sv-btn-secondary">Voir nos agences</a>
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
                    <a href="{{ route('services.show', 'transferts-nationaux-internationaux') }}" class="sv-related-card reveal d2">
                        <h3>Transferts</h3>
                        <p>Recevez et envoyez des fonds via nos partenaires selon le canal adapte a votre besoin.</p>
                        <span class="sv-related-link">Voir le service <svg viewBox="0 0 14 14"><path d="M1 7h12M8 3l5 4-5 4"></path></svg></span>
                    </a>
                    <a href="{{ route('open-account') }}" class="sv-related-card reveal d3">
                        <h3>Ouvrir un compte</h3>
                        <p>Devenez membre CREMIN-CAM pour acceder a vos solutions bancaires et digitales.</p>
                        <span class="sv-related-link">Commencer <svg viewBox="0 0 14 14"><path d="M1 7h12M8 3l5 4-5 4"></path></svg></span>
                    </a>
                    <a href="{{ route('contact') }}" class="sv-related-card reveal d4">
                        <h3>Nous contacter</h3>
                        <p>Un conseiller peut vous guider pour choisir la carte adaptee a votre besoin.</p>
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
