@extends('layouts.app')

@section('title', "CREMIN-CAM | Page d'accueil")

@section('content')
    <h1 class="sr-only">Page d'accueil CREMIN-CAM Microfinance Cameroun</h1>

    <style>
        .home-modal-overlay {
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(15, 61, 114, 0.85);
            display: flex; align-items: center; justify-content: center;
            z-index: 9999; opacity: 0; visibility: hidden;
            transition: all 0.4s ease; backdrop-filter: blur(5px);
        }
        .home-modal-overlay.is-active { opacity: 1; visibility: visible; }
        .home-modal-card {
            background: white; width: 90%; max-width: 500px;
            border-radius: 24px; padding: 40px; position: relative;
            transform: translateY(30px); transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
            text-align: center; box-shadow: 0 30px 60px rgba(0,0,0,0.3);
        }
        .home-modal-overlay.is-active .home-modal-card { transform: translateY(0); }
        .home-modal-close {
            position: absolute; top: 20px; right: 20px;
            background: #f3f4f6; border: none; width: 36px; height: 36px;
            border-radius: 50%; cursor: pointer; display: flex;
            align-items: center; justify-content: center; font-size: 20px; color: #666;
        }
        .home-modal-tag {
            display: inline-block; padding: 6px 16px; background: rgba(245, 160, 32, 0.1);
            color: #f5a020; border-radius: 50px; font-size: 0.85rem; font-weight: 700;
            margin-bottom: 20px; text-transform: uppercase;
        }
        .home-modal-card h3 { color: #0f3d72; font-size: 1.8rem; margin-bottom: 15px; line-height: 1.2; }
        .home-modal-card p { color: #666; margin-bottom: 30px; line-height: 1.6; }
    </style>

    <div class="stripe"></div>

    <main>
        <div class="hero-wrap">
            <div class="hero">
                <div class="hero-content reveal">
                    <div class="hero-badge"><span class="hero-badge-dot"></span>N°1 de la Microfinance au Cameroun</div>
                    <h2>Votre argent,<br><span class="accent-o">votre avenir,</span><br><span class="accent">notre mission.</span></h2>
                    <p>De l'ouverture d'un compte à la réalisation de vos projets, CREMIN-CAM vous accompagne à chaque étape avec des solutions financières taillées pour vous.</p>
                    <div class="hero-btns">
                        <a href="{{ route('services') }}" class="btn-primary">
                            Commencer maintenant
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M1 7h12M8 3l5 4-5 4"/></svg>
                        </a>
                        <a href="{{ route('solutions') }}" class="btn-secondary">Découvrir nos offres</a>
                    </div>
                </div>

                <div class="hero-visual reveal reveal-delay-2">
                    <div class="card-stack">
                        <div class="hcard hcard-main">
                            <div>
                                <div class="hcard-main-label">Crédit Mutuel d'Investissement</div>
                                <div class="hcard-main-title">CREMIN-CAM<br>Yaoundé, Cameroun</div>
                            </div>
                            <div>
                                <div class="hcard-main-divider"></div>
                                <div class="badge-chip">● Actif &amp; Certifié</div>
                                <div class="hcard-num hcard-num-main">5 000<span class="hcard-plus">+</span></div>
                                <div class="hcard-num-label">MEMBRES DE CONFIANCE</div>
                            </div>
                        </div>
                        <div class="hcard hcard-orange">
                            <div class="hcard-orange-num">10+</div>
                            <div class="hcard-orange-label">Partenaires<br>stratégiques</div>
                        </div>
                        <div class="hcard hcard-white">
                            <div class="hcard-white-num">15 ans</div>
                            <div class="hcard-white-label">d'expérience<br>financière</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ticker-section">
            <div class="ticker-track">
                <span class="ticker-item"><span class="ticker-dot"></span>Épargne &amp; Investissement</span>
                <span class="ticker-item"><span class="ticker-dot"></span>Crédits adaptés</span>
                <span class="ticker-item"><span class="ticker-dot"></span>Carte Visa Prépayée</span>
                <span class="ticker-item"><span class="ticker-dot"></span>Financement de marchés</span>
                <span class="ticker-item"><span class="ticker-dot"></span>Domiciliation bancaire</span>
                <span class="ticker-item"><span class="ticker-dot"></span>Transferts internationaux</span>
                <span class="ticker-item"><span class="ticker-dot"></span>Application SOLO Mobile</span>
                <span class="ticker-item"><span class="ticker-dot"></span>Épargne &amp; Investissement</span>
                <span class="ticker-item"><span class="ticker-dot"></span>Crédits adaptés</span>
                <span class="ticker-item"><span class="ticker-dot"></span>Carte Visa Prépayée</span>
                <span class="ticker-item"><span class="ticker-dot"></span>Financement de marchés</span>
                <span class="ticker-item"><span class="ticker-dot"></span>Domiciliation bancaire</span>
                <span class="ticker-item"><span class="ticker-dot"></span>Transferts internationaux</span>
                <span class="ticker-item"><span class="ticker-dot"></span>Application SOLO Mobile</span>
            </div>
        </div>

        <section class="stats-section">
            <div class="stats-inner">
                <div class="stat-item reveal">
                    <div class="stat-num"><span class="counter" data-target="5000">0</span><span class="stat-suffix">+</span></div>
                    <div class="stat-label">Clients satisfaits</div>
                </div>
                <div class="stat-item reveal reveal-delay-1">
                    <div class="stat-num"><span class="counter" data-target="10">0</span><span class="stat-suffix">+</span></div>
                    <div class="stat-label">Partenaires</div>
                </div>
                <div class="stat-item reveal reveal-delay-2">
                    <div class="stat-num"><span class="counter" data-target="10">0</span><span class="stat-suffix">+</span></div>
                    <div class="stat-label">Années d'expérience</div>
                </div>
                <div class="stat-item reveal reveal-delay-3">
                    <div class="stat-num"><span class="counter" data-target="3">0</span></div>
                    <div class="stat-label">Agences au Cameroun</div>
                </div>
            </div>
        </section>

        <section class="services-section">
            <div class="reveal">
                <div class="section-tag">Ce que nous offrons</div>
                <h2 class="section-title">Des solutions pensées<br>pour <span class="blue">chaque besoin</span></h2>
                <p class="section-sub">Particuliers, entrepreneurs ou entreprises, chaque situation mérite une réponse financière précise, rapide et humaine.</p>
            </div>

            <div class="services-grid reveal">
                <div class="scard">
                    <div class="scard-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="2" y="5" width="20" height="14" rx="2"/><path d="M2 10h20"/></svg></div>
                    <div class="scard-title">Épargne &amp; Comptes</div>
                    <div class="scard-desc">Compte salaire, épargne, junior, entreprise, ouvrez votre compte facilement et faites fructifier votre argent en sécurité.</div>
                    <a href="{{ route('solutions') }}" class="scard-link">En savoir plus <svg viewBox="0 0 14 14" aria-hidden="true"><path d="M1 7h12M8 3l5 4-5 4"/></svg></a>
                </div>
                <div class="scard">
                    <div class="scard-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg></div>
                    <div class="scard-title">Crédits &amp; Prêts</div>
                    <div class="scard-desc">Accédez rapidement à des financements adaptés, avec des conditions transparentes, des délais réduits et un accompagnement personnalisé.</div>
                    <a href="{{ route('solutions') }}" class="scard-link">En savoir plus <svg viewBox="0 0 14 14" aria-hidden="true"><path d="M1 7h12M8 3l5 4-5 4"/></svg></a>
                </div>
                <div class="scard">
                    <div class="scard-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="2" y="5" width="20" height="14" rx="2"/><path d="M2 10h20M6 15h2M10 15h4"/></svg></div>
                    <div class="scard-title">Carte Visa Prépayée</div>
                    <div class="scard-desc">Payez partout dans le monde, en ligne ou en boutique. Une carte sécurisée rechargeable, toujours sous votre contrôle.</div>
                    <a href="{{ route('solutions') }}" class="scard-link">En savoir plus <svg viewBox="0 0 14 14" aria-hidden="true"><path d="M1 7h12M8 3l5 4-5 4"/></svg></a>
                </div>
                <div class="scard">
                    <div class="scard-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></div>
                    <div class="scard-title">Financement de projets</div>
                    <div class="scard-desc">De la structuration à l'exécution, nous finançons vos projets et les accompagnons jusqu'à leur réussite complète.</div>
                    <a href="{{ route('solutions') }}" class="scard-link">En savoir plus <svg viewBox="0 0 14 14" aria-hidden="true"><path d="M1 7h12M8 3l5 4-5 4"/></svg></a>
                </div>
                <div class="scard">
                    <div class="scard-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
                    <div class="scard-title">Domiciliation bancaire</div>
                    <div class="scard-desc">Centralisez vos flux financiers avec notre service de domiciliation, fiable, sécurisé et adapté aux entreprises de toutes tailles.</div>
                    <a href="{{ route('solutions') }}" class="scard-link">En savoir plus <svg viewBox="0 0 14 14" aria-hidden="true"><path d="M1 7h12M8 3l5 4-5 4"/></svg></a>
                </div>
                <div class="scard">
                    <div class="scard-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg></div>
                    <div class="scard-title">SOLO, application mobile</div>
                    <div class="scard-desc">Gérez vos comptes, effectuez des virements et suivez vos finances depuis votre smartphone, à tout moment.</div>
                    <a href="{{ route('services') }}" class="scard-link">Télécharger <svg viewBox="0 0 14 14" aria-hidden="true"><path d="M1 7h12M8 3l5 4-5 4"/></svg></a>
                </div>
            </div>
        </section>

        <section class="why-section">
            <div class="why-inner">
                <div class="reveal">
                    <div class="section-tag">Pourquoi nous choisir</div>
                    <h2 class="section-title">Ce qui nous <span class="blue">distingue</span></h2>
                    <p class="why-intro">Depuis plus de 20 ans, nous bâtissons des relations durables fondées sur la confiance, la proximité et l'excellence.</p>
                    <div class="why-list">
                        <div class="why-item">
                            <span class="why-num">01</span>
                            <div class="why-body"><h3>Offres sur mesure</h3><p>Des produits conçus en fonction de votre réalité financière, pas l'inverse.</p></div>
                        </div>
                        <div class="why-item">
                            <span class="why-num">02</span>
                            <div class="why-body"><h3>Service de qualité</h3><p>Une équipe disponible, réactive et bienveillante pour vous accompagner.</p></div>
                        </div>
                        <div class="why-item">
                            <span class="why-num">03</span>
                            <div class="why-body"><h3>Projets financés</h3><p>De la conception à la réussite, votre projet mérite le meilleur soutien.</p></div>
                        </div>
                        <div class="why-item">
                            <span class="why-num">04</span>
                            <div class="why-body"><h3>Présence locale</h3><p>Plusieurs agences stratégiquement situées pour être toujours proche de vous.</p></div>
                        </div>
                    </div>
                </div>

                <div class="reveal reveal-delay-1">
                    <div class="section-tag values-tag">Nos valeurs</div>
                    <div class="val-grid">
                        <div class="vcard"><div class="vcard-num">01</div><div class="vcard-title">Solidarité</div><div class="vcard-desc">Ensemble, nous allons plus loin. La force du collectif au service de chacun.</div></div>
                        <div class="vcard"><div class="vcard-num">02</div><div class="vcard-title">Égalité</div><div class="vcard-desc">Les mêmes opportunités pour tous, sans distinction. Chaque membre compte.</div></div>
                        <div class="vcard"><div class="vcard-num">03</div><div class="vcard-title">Intégrité</div><div class="vcard-desc">Transparence et honnêteté à la base de toutes nos relations de confiance.</div></div>
                        <div class="vcard"><div class="vcard-num">04</div><div class="vcard-title">Performance</div><div class="vcard-desc">L'excellence comme standard pour des résultats optimaux à chaque fois.</div></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="video-edu-section" style="padding: 100px 0; background: #f9f9f9;">
            <div class="why-inner">
                <div class="reveal" style="text-align: center; margin-bottom: 50px;">
                    <div class="section-tag" style="justify-content: center; display: flex;">Média & Éducation</div>
                    <h2 class="section-title">Comprendre la <span class="blue">Microfinance</span></h2>
                    <p class="section-sub" style="margin: 0 auto;">Découvrez nos missions et l'impact de nos solutions à travers ces présentations vidéo.</p>
                </div>

                <div class="video-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 800px)); justify-content: center; gap: 30px;">
                    <!-- Vidéo 1 -->
                    <div class="reveal reveal-delay-1">
                        <div class="video-card" style="border-radius: 20px; overflow: hidden; background: white; box-shadow: 0 20px 40px rgba(0,0,0,0.05); height: 100%;">
                            <div style="position: relative; padding-bottom: 56.25%; height: 0;">
                                <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0;" 
                                    src="https://www.youtube.com/embed/yiY9H14d80w" 
                                    title="YouTube video player" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div style="padding: 25px;">
                                <h3 style="font-size: 1.2rem; color: #0f3d72; margin-bottom: 10px; font-weight: 700;">Le rôle de CREMIN-CAM</h3>
                                <p style="font-size: 0.95rem; color: #666; line-height: 1.6;">Découvrez notre vision pour le développement local et l'inclusion financière au Cameroun.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Vidéo 2 -->
                    {{-- 
                    <div class="reveal reveal-delay-2">
                        <div class="video-card" style="border-radius: 20px; overflow: hidden; background: white; box-shadow: 0 20px 40px rgba(0,0,0,0.05); height: 100%;">
                            <div style="position: relative; padding-bottom: 56.25%; height: 0;">
                                <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0;" 
                                    src="https://www.youtube.com/embed/3qndnqsImqw" 
                                    title="YouTube video player" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div style="padding: 25px;">
                                <h3 style="font-size: 1.2rem; color: #0f3d72; margin-bottom: 10px; font-weight: 700;">Why choose CREMIN-CAM? (EN)</h3>
                                <p style="font-size: 0.95rem; color: #666; line-height: 1.6;">Learn about the benefits of local microfinance to support your life projects with peace of mind in English.</p>
                            </div>
                        </div>
                    </div>
                    --}}
                </div>
            </div>
        </section>

        <section class="partners-section">
            <div class="reveal">
                <div class="section-tag">Ils nous font confiance</div>
                <h2 class="section-title partners-title">Plus de <span class="blue">10 partenaires</span> de renom</h2>
            </div>
            <div class="partners-scroll">
                <div class="partners-track">
                    <img src="{{ asset('partner/minfi.png') }}" class="partner-logo" alt="MINFI">
                    <img src="{{ asset('partner/logodgtcfm.jpeg') }}" class="partner-logo" alt="DGTCFM">
                    <img src="{{ asset('partner/mutresor.png') }}" class="partner-logo" alt="Mutresor">
                    <img src="{{ asset('partner/reccucam.png') }}" class="partner-logo" alt="RECCU-CAM">
                    <img src="{{ asset('partner/ecobank.png') }}" class="partner-logo" alt="Ecobank">
                    <img src="{{ asset('partner/nfc.jpg') }}" class="partner-logo" alt="NFC Bank">
                    <img src="{{ asset('partner/UBA-logo-2.png') }}" class="partner-logo" alt="UBA">
                    <img src="{{ asset('partner/bicec.png') }}" class="partner-logo" alt="BICEC">
                    <img src="{{ asset('partner/saar.jpg') }}" class="partner-logo" alt="SAAR">
                    <img src="{{ asset('partner/bf_life_insurance.png') }}" class="partner-logo" alt="BF Life Insurance">
                    <img src="{{ asset('partner/wafacash.png') }}" class="partner-logo" alt="Wafacash">
                    <img src="{{ asset('partner/Ria.png') }}" class="partner-logo" alt="Ria">
                    <img src="{{ asset('partner/woldremit.png') }}" class="partner-logo" alt="WorldRemit">
                    <img src="{{ asset('partner/Orange-Money.jpg') }}" class="partner-logo" alt="Orange Money">
                    <img src="{{ asset('partner/mobile-money.jpg') }}" class="partner-logo" alt="MTN MoMo">
                    <img src="{{ asset('partner/Campost_logo.png') }}" class="partner-logo" alt="Campost">
                    <img src="{{ asset('partner/minfi.png') }}" class="partner-logo" alt="MINFI">
                    <img src="{{ asset('partner/logodgtcfm.jpeg') }}" class="partner-logo" alt="DGTCFM">
                    <img src="{{ asset('partner/mutresor.png') }}" class="partner-logo" alt="Mutresor">
                    <img src="{{ asset('partner/reccucam.png') }}" class="partner-logo" alt="RECCU-CAM">
                    <img src="{{ asset('partner/ecobank.png') }}" class="partner-logo" alt="Ecobank">
                    <img src="{{ asset('partner/nfc.jpg') }}" class="partner-logo" alt="NFC Bank">
                    <img src="{{ asset('partner/UBA-logo-2.png') }}" class="partner-logo" alt="UBA">
                    <img src="{{ asset('partner/bicec.png') }}" class="partner-logo" alt="BICEC">
                    <img src="{{ asset('partner/saar.jpg') }}" class="partner-logo" alt="SAAR">
                    <img src="{{ asset('partner/bf_life_insurance.png') }}" class="partner-logo" alt="BF Life Insurance">
                    <img src="{{ asset('partner/wafacash.png') }}" class="partner-logo" alt="Wafacash">
                    <img src="{{ asset('partner/Ria.png') }}" class="partner-logo" alt="Ria">
                    <img src="{{ asset('partner/woldremit.png') }}" class="partner-logo" alt="WorldRemit">
                    <img src="{{ asset('partner/Orange-Money.jpg') }}" class="partner-logo" alt="Orange Money">
                    <img src="{{ asset('partner/mobile-money.jpg') }}" class="partner-logo" alt="MTN MoMo">
                    <img src="{{ asset('partner/Campost_logo.png') }}" class="partner-logo" alt="Campost">
                </div>
            </div>
        </section>

        <div class="cta-wrap">
            <div class="cta-box reveal">
                <div class="cta-content">
                    <h2>Prêt à transformer vos<br>ambitions en réalité ?</h2>
                    <p>Rejoignez plus de 5 000 membres qui font confiance à CREMIN-CAM. Ouvrez votre compte aujourd'hui, simplement, rapidement et en toute sécurité.</p>
                </div>
                <div class="cta-btns">
                    <a href="{{ route('open-account') }}" class="btn-orange">Ouvrir mon compte</a>
                    <a href="{{ route('contact') }}" class="btn-outline-w">Nous contacter</a>
                </div>
            </div>
        </div>
    </main>

    {{-- Modal Promotionnelle --}}
    <div id="scroll-modal" class="home-modal-overlay">
        <div class="home-modal-card">
            <button class="home-modal-close" id="close-modal">&times;</button>
            <div class="home-modal-tag">Opportunité</div>
            <h3>Devenez membre de la famille CREMIN-CAM</h3>
            <p>Profitez de nos solutions d'épargne et de crédit avec un accompagnement personnalisé. Ouvrez votre compte en quelques étapes simples.</p>
            <div style="display: flex; flex-direction: column; gap: 12px;">
                <a href="{{ route('open-account') }}" class="btn-orange" style="display: block; width: 100%; text-decoration: none;">Ouvrir un compte</a>
                <a href="{{ route('contact') }}" style="color: #0f3d72; font-weight: 600; font-size: 0.9rem; text-decoration: none;">Parler à un conseiller</a>
            </div>
        </div>
    </div>
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
            }, { threshold: 0.1 });

            document.querySelectorAll('.reveal').forEach((element) => revealObserver.observe(element));

            const counterObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (!entry.isIntersecting) {
                        return;
                    }

                    const element = entry.target;
                    const target = parseInt(element.dataset.target, 10);
                    const duration = 1600;
                    const step = target / (duration / 16);
                    let current = 0;

                    const timer = window.setInterval(() => {
                        current = Math.min(current + step, target);
                        element.textContent = Math.round(current).toLocaleString('fr-FR');

                        if (current >= target) {
                            window.clearInterval(timer);
                        }
                    }, 16);

                    counterObserver.unobserve(element);
                });
            }, { threshold: 0.5 });

            document.querySelectorAll('.counter').forEach((element) => counterObserver.observe(element));

            // Logique de la Modal au défilement (Milieu de page)
            const promoModal = document.getElementById('scroll-modal');
            const closeBtn = document.getElementById('close-modal');
            let modalTriggered = false;

            window.addEventListener('scroll', () => {
                if (!modalTriggered) {
                    // Calcul de la position actuelle du scroll + fenêtre vs hauteur totale
                    const scrollY = window.scrollY || window.pageYOffset;
                    const pageHeight = document.documentElement.scrollHeight - window.innerHeight;
                    const scrollPercentage = (scrollY / pageHeight) * 100;

                    // Déclenche à 50% de la page
                    if (scrollPercentage > 50) {
                        promoModal.classList.add('is-active');
                        modalTriggered = true; // Empêche de se déclencher plusieurs fois
                    }
                }
            });

            // Fermeture de la modal
            closeBtn.addEventListener('click', () => {
                promoModal.classList.remove('is-active');
            });
        });
    </script>
@endpush
