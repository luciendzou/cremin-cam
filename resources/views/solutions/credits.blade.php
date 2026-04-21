@extends('layouts.app')

@section('title', 'CREMIN-CAM | Solutions de Crédit')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cremin_cam_solo_visa.css') }}">
@endpush

@section('content')
    <main class="sv-page">
        <section class="sv-hero sv-hero--credits" style="background: #0f3d72; color: white; padding-bottom: 80px;">
            <div class="sv-container sv-hero-in" style="align-items: center;">
                <div class="reveal">
                    <div class="sv-tag" style="background: rgba(255,255,255,0.1); color: #fff; border: 1px solid rgba(255,255,255,0.2);">Financement sur mesure</div>
                    <h1 style="color: white;">Réalisez vos <span style="color: #f5a020;">projets</span> dès aujourd'hui</h1>
                    <p class="sv-sub" style="color: rgba(255,255,255,0.85);">Besoin de financer un événement social, d'acquérir un équipement ou d'investir dans l'immobilier ? CREMIN-CAM vous propose des crédits adaptés avec des conditions d'accès simplifiées.</p>

                    <div class="sv-perks">
                        <div class="sv-perk" style="color: white;">
                            <svg viewBox="0 0 24 24" style="stroke: #f5a020;"><path d="M9 11l3 3L22 4"></path></svg>
                            Ouverture de compte gratuite pour tous les membres
                        </div>
                        <div class="sv-perk" style="color: white;">
                            <svg viewBox="0 0 24 24" style="stroke: #f5a020;"><path d="M9 11l3 3L22 4"></path></svg>
                            Remboursement flexible jusqu'à 46 mois
                        </div>
                        <div class="sv-perk" style="color: white;">
                            <svg viewBox="0 0 24 24" style="stroke: #f5a020;"><path d="M9 11l3 3L22 4"></path></svg>
                            Décaissement rapide après validation du dossier
                        </div>
                    </div>

                    <div class="sv-btn-row">
                        <a href="{{ route('open-account') }}" class="sv-btn-primary">Devenir membre</a>
                        <a href="#types-credits" class="sv-btn-secondary">Découvrir les crédits</a>
                    </div>
                </div>

                <div class="reveal d1">
                    <div class="sv-app-visual">
                        <div class="sv-saving-card" style="background: white; color: #0f3d72; padding: 30px; border-radius: 20px; box-shadow: 0 30px 60px rgba(0,0,0,0.2);">
                            <div style="font-size: 0.8rem; text-transform: uppercase; color: #888; margin-bottom: 10px;">Simulation de projet</div>
                            <div style="font-size: 1.5rem; font-weight: 700; color: #1a5fa8; margin-bottom: 20px;">Crédit Investissement</div>
                            <div style="display: flex; justify-content: space-between; margin-bottom: 15px;">
                                <span>Durée max</span>
                                <span style="color: #f5a020; font-weight: 700;">46 Mois</span>
                            </div>
                            <div style="height: 6px; background: #eee; border-radius: 3px; margin-bottom: 20px;">
                                <div style="width: 70%; height: 100%; background: #1a5fa8; border-radius: 3px;"></div>
                            </div>
                            <p style="font-size: 0.9rem; color: #555; font-style: italic;">"CREMIN-CAM m'a permis d'acquérir mon terrain en toute sérénité."</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="sv-stats">
            <div class="sv-container sv-stats-in">
                <div class="sv-stat reveal d1">
                    <div class="sv-stat-num">46<span>m</span></div>
                    <div class="sv-stat-label">Durée de remboursement max</div>
                </div>
                <div class="sv-stat reveal d2">
                    <div class="sv-stat-num">0<span>F</span></div>
                    <div class="sv-stat-label">Frais d'ouverture de compte</div>
                </div>
                <div class="sv-stat reveal d3">
                    <div class="sv-stat-num">100<span>%</span></div>
                    <div class="sv-stat-label">Écoute et Conseil</div>
                </div>
                <div class="sv-stat reveal d4">
                    <div class="sv-stat-num">5<span>+</span></div>
                    <div class="sv-stat-label">Types de financements</div>
                </div>
            </div>
        </div>

        <section class="sv-section" id="types-credits">
            <div class="sv-container">
                <div class="sv-center reveal">
                    <div class="sv-kicker">Nos Offres de Crédit</div>
                    <h2 class="sv-title">Des solutions pour <span>chaque besoin</span></h2>
                    <p class="sv-copy">Que vous soyez un particulier ou une structure, nous finançons vos ambitions avec des durées adaptées à votre capacité de remboursement.</p>
                </div>

                <div class="sv-grid-3">
                    <article class="sv-card reveal d1">
                        <div class="sv-card-icon" style="background: rgba(245, 160, 32, 0.1); color: #f5a020;"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle></svg></div>
                        <h3 style="color: #0f3d72;">Crédit à la consommation</h3>
                        <p style="font-size: 0.95rem; margin-bottom: 20px;">Destiné au financement des besoins sociaux : rentrée scolaire, vacances, santé, fêtes, mariage, baptême ou habitat.</p>
                        <div style="border-top: 1px solid #eee; padding-top: 15px;">
                            <strong style="font-size: 0.8rem; text-transform: uppercase; color: #888;">Conditions :</strong>
                            <ul class="sv-list" style="margin-top: 10px;">
                                <li>Ouverture de compte gratuite</li>
                                <li>Membre à jour de ses cotisations</li>
                                <li>Garanties requises</li>
                                <li style="color: #f5a020; font-weight: 700;">Remboursement : 03 à 10 mois</li>
                            </ul>
                        </div>
                    </article>

                    <article class="sv-card reveal d2">
                        <div class="sv-card-icon" style="background: rgba(26, 95, 168, 0.1); color: #1a5fa8;"><svg viewBox="0 0 24 24"><rect x="1" y="3" width="15" height="13"></rect><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg></div>
                        <h3 style="color: #0f3d72;">Crédit d'équipement</h3>
                        <p style="font-size: 0.95rem; margin-bottom: 20px;">Destiné à l'acquisition de biens mobiliers : véhicules, équipements de maison, outils professionnels.</p>
                        <div style="border-top: 1px solid #eee; padding-top: 15px;">
                            <strong style="font-size: 0.8rem; text-transform: uppercase; color: #888;">Conditions :</strong>
                            <ul class="sv-list" style="margin-top: 10px;">
                                <li>Ouverture de compte gratuite</li>
                                <li>Membre à jour de ses cotisations</li>
                                <li>Garanties requises</li>
                                <li style="color: #1a5fa8; font-weight: 700;">Remboursement : 06 à 36 mois</li>
                            </ul>
                        </div>
                    </article>

                    <article class="sv-card reveal d3">
                        <div class="sv-card-icon" style="background: rgba(30, 107, 69, 0.1); color: #1e6b45;"><svg viewBox="0 0 24 24"><path d="M3 21h18"></path><path d="M3 7l9-4 9 4v14H3V7z"></path></svg></div>
                        <h3 style="color: #0f3d72;">Crédit d'investissement</h3>
                        <p style="font-size: 0.95rem; margin-bottom: 20px;">Destiné à l'acquisition de terrain, à la construction immobilière et aux projets de grande envergure.</p>
                        <div style="border-top: 1px solid #eee; padding-top: 15px;">
                            <strong style="font-size: 0.8rem; text-transform: uppercase; color: #888;">Conditions :</strong>
                            <ul class="sv-list" style="margin-top: 10px;">
                                <li>Ouverture de compte gratuite</li>
                                <li>Membre à jour de ses cotisations</li>
                                <li>Garanties requises</li>
                                <li style="color: #1e6b45; font-weight: 700;">Remboursement : 06 à 46 mois</li>
                            </ul>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="sv-section sv-section--off">
            <div class="sv-container">
                <div class="sv-center reveal">
                    <div class="sv-kicker">Trésorerie & Professionnels</div>
                    <h2 class="sv-title">Besoin d'une <span>réponse rapide</span> ?</h2>
                    <p class="sv-copy">Des solutions spécifiques pour accompagner la gestion courante de votre budget ou l'activité de votre entreprise.</p>
                </div>

                <div class="sv-grid-3">
                    <article class="sv-card reveal d1">
                        <h3 style="color: #0f3d72;">Découvert</h3>
                        <p>S'obtient après le 1er mois de virement de salaire ou de revenus réguliers. Un soutien indispensable pour vos fins de mois.</p>
                    </article>
                    <article class="sv-card reveal d2">
                        <h3 style="color: #0f3d72;">Bons de commandes</h3>
                        <p>Financement dédié aux bons de commandes des administrations publiques, parapubliques et privées. Boostez votre capacité d'exécution.</p>
                    </article>
                    <article class="sv-card reveal d3">
                        <h3 style="color: #0f3d72;">Financement des listings</h3>
                        <p>Solution pour les structures gérant des listings financiers, permettant d'anticiper les flux et d'assurer la continuité des services.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="sv-cta">
            <div class="sv-container sv-center sv-cta-in reveal">
                <h2>Prêt à lancer votre<br><span>demande de financement ?</span></h2>
                <p>Nos conseillers sont à votre écoute pour étudier votre éligibilité et vous accompagner dans la constitution de votre dossier.</p>
                <div class="sv-btn-row" style="justify-content:center;">
                    <a href="{{ route('contact') }}" class="sv-btn-primary">Parler à un conseiller</a>
                    <a href="{{ route('branches') }}" class="sv-btn-secondary">Trouver une agence</a>
                </div>
            </div>
        </section>

        <section class="sv-section sv-related">
            <div class="sv-container">
                <div class="reveal">
                    <div class="sv-kicker">Solutions complémentaires</div>
                    <h2 class="sv-title">Explorez aussi</h2>
                </div>

                <div class="sv-related-grid">
                    <a href="{{ route('solutions.epargne') }}" class="sv-related-card reveal d1">
                        <h3>Comptes d'Épargne</h3>
                        <p>Préparez l'avenir et constituez l'apport nécessaire pour vos projets.</p>
                        <span class="sv-related-link">Découvrir <svg viewBox="0 0 14 14"><path d="M1 7h12M8 3l5 4-5 4"></path></svg></span>
                    </a>
                    <a href="{{ route('solutions.solo') }}" class="sv-related-card reveal d2">
                        <h3>SOLO Mobile Banking</h3>
                        <p>Consultez votre solde et suivez vos remboursements sur votre mobile.</p>
                        <span class="sv-related-link">Découvrir <svg viewBox="0 0 14 14"><path d="M1 7h12M8 3l5 4-5 4"></path></svg></span>
                    </a>
                    <a href="{{ route('solutions.visa') }}" class="sv-related-card reveal d3">
                        <h3>Carte Visa Prépayée</h3>
                        <p>Une carte rechargeable pour vos paiements en ligne et vos retraits internationaux.</p>
                        <span class="sv-related-link">Découvrir <svg viewBox="0 0 14 14"><path d="M1 7h12M8 3l5 4-5 4"></path></svg></span>
                    </a>
                    <a href="{{ route('services.show', 'transferts-nationaux-internationaux') }}" class="sv-related-card reveal d4">
                        <h3>Transferts de fonds</h3>
                        <p>Envoyez et recevez de l'argent partout via nos partenaires agréés.</p>
                        <span class="sv-related-link">Voir le service <svg viewBox="0 0 14 14"><path d="M1 7h12M8 3l5 4-5 4"></path></svg></span>
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
            document.querySelectorAll('.sv-page .reveal').forEach((el) => observer.observe(el));
        });
    </script>
@endpush