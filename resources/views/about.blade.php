@extends('layouts.app')

@section('title', 'CREMIN-CAM | À propos')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cremin_cam_about_pages.css') }}">
@endpush

@section('content')
    <h1 class="sr-only">À propos de CREMIN-CAM</h1>

    <div class="stripe"></div>

    <main class="about-page">
        <section class="hero">
            <div class="hero-in rv">
                <div class="htag">À Propos de CREMIN-CAM</div>
                <h1>Plus de 15 ans au service<br>de votre <span>avenir financier</span></h1>
                <p class="hero-sub">Le Crédit Mutuel d'Investissement du Cameroun, un établissement de microfinance agréé, engagé depuis 2009 à rendre la finance accessible, inclusive et transformatrice pour chaque Camerounais.</p>
                <div class="hero-badges">
                    <div class="hbadge"><svg viewBox="0 0 24 24"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg>Agréée MINFI - 2009</div>
                    <div class="hbadge"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>EMF de 1ère catégorie</div>
                    <div class="hbadge"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10A15.3 15.3 0 0112 2z"/></svg>Réseau RECCU-CAM</div>
                    <div class="hbadge"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>+5 000 membres</div>
                </div>
            </div>
        </section>

        <section class="id-strip">
            <div class="id-strip-in">
                <div class="id-cell rv">
                    <div class="id-label">Dénomination légale</div>
                    <div class="id-val">Crédit Mutuel d'Investissement du Cameroun<small>CREMIN-CAM</small></div>
                </div>
                <div class="id-cell rv d1">
                    <div class="id-label">Agrément MINFI</div>
                    <div class="id-val">N° 00000074/MINFI<small>Délivré le 08 janvier 2009</small></div>
                </div>
                <div class="id-cell rv d2">
                    <div class="id-label">Immatriculation CNC</div>
                    <div class="id-val">EMF/2011/0015<small>Catégorie 1ère - COBAC</small></div>
                </div>
                <div class="id-cell rv d3">
                    <div class="id-label">Siège social</div>
                    <div class="id-val">Camp SIC Messa<small>BP 16578 - Yaoundé, Cameroun</small></div>
                </div>
            </div>
        </section>

        <section class="about-section">
            <div class="rv">
                <div class="stag">Qui sommes-nous</div>
                <h2 class="stitle">Une institution financière <span class="bl">au service du peuple</span></h2>
                <p class="ssub">Fondée sur les valeurs de solidarité et d'inclusion financière, CREMIN-CAM s'est imposée comme un acteur incontournable de la microfinance camerounaise.</p>
            </div>

            <div class="about-layout">
                <div class="about-visual rv d1">
                    <div class="about-main-card">
                        <div class="amc-content">
                            <div class="amc-quote">"</div>
                            <p class="amc-text">Si nous oublions le passé, pleurer sur un malheur passé est le moyen le plus sûr d'en attirer un autre. Aussi chers membres, avançons ensemble vers un avenir meilleur.</p>
                            <div class="amc-author">- La direction de CREMIN-CAM</div>
                            <div class="amc-divider"></div>
                            <div class="amc-stats">
                                <div><div class="amc-stat-num">5 000<span>+</span></div><div class="amc-stat-label">MEMBRES ACTIFS</div></div>
                                <div><div class="amc-stat-num">15<span>+</span></div><div class="amc-stat-label">ANNÉES D'ACTIVITÉ</div></div>
                                <div><div class="amc-stat-num">10<span>+</span></div><div class="amc-stat-label">PARTENAIRES</div></div>
                                <div><div class="amc-stat-num">4</div><div class="amc-stat-label">RÉGIONS COUVERTES</div></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="about-text rv d2">
                    <p>Le <strong>Crédit Mutuel d'Investissement du Cameroun (CREMIN-CAM)</strong> est un établissement de microfinance de première catégorie, agréé par le Ministère des Finances du Cameroun depuis le <strong>8 janvier 2009</strong>. Il fait partie du réseau <strong>RECCU-CAM LTD</strong>, qui regroupe les institutions coopératives d'épargne et de crédit au Cameroun.</p>
                    <p>Implanté au coeur de <strong>Yaoundé, face au Camp SIC de Messa-Mokolo</strong>, CREMIN-CAM a bâti sa réputation sur une approche humaine et de proximité : chaque membre est accueilli comme un partenaire de long terme, avec des solutions sur mesure adaptées à sa réalité.</p>
                    <p>Notre modèle repose sur la <strong>mutualisation des ressources</strong> : les dépôts des membres financent les crédits des membres. Cette logique coopérative garantit des taux compétitifs, une gestion saine et un ancrage fort dans les communautés que nous servons, des marchés de Yaoundé aux exploitations agricoles du Nord-Cameroun.</p>
                    <div class="highlight-box">
                        <p>CREMIN-CAM est régulièrement listé parmi les établissements de microfinance agréés et en activité au Cameroun par le Ministère des Finances, témoignant de sa conformité réglementaire continue depuis plus de 15 ans.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mv-section">
            <div class="mv-inner">
                <div class="rv" style="text-align:center">
                    <div class="stag" style="display:block;text-align:center">Ce qui nous guide</div>
                    <h2 class="stitle" style="text-align:center">Notre <span class="bl">raison d'être</span></h2>
                    <p class="ssub" style="margin:0 auto;text-align:center">Trois piliers fondamentaux qui orientent chacune de nos décisions et chacun de nos services.</p>
                </div>
                <div class="mv-grid">
                    <div class="mv-card mission rv d1">
                        <div class="mv-icon"><svg viewBox="0 0 24 24"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></div>
                        <div class="mv-card-tag">Notre Mission</div>
                        <div class="mv-card-title">Financer l'inclusion économique</div>
                        <p class="mv-card-desc">Fournir à chaque membre, salarié, entrepreneur, agriculteur ou ménage, des outils financiers adaptés pour améliorer ses conditions de vie et réaliser ses projets, sans distinction de statut social.</p>
                    </div>
                    <div class="mv-card vision rv d2">
                        <div class="mv-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7z"/><circle cx="12" cy="12" r="3"/></svg></div>
                        <div class="mv-card-tag">Notre Vision</div>
                        <div class="mv-card-title">Être le partenaire financier de référence</div>
                        <p class="mv-card-desc">Devenir l'institution de microfinance la plus accessible et la plus fiable du Cameroun, reconnue pour la qualité de son accompagnement, l'innovation de ses services et la solidité de sa gouvernance.</p>
                    </div>
                    <div class="mv-card engagement rv d3">
                        <div class="mv-icon"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg></div>
                        <div class="mv-card-tag">Notre Engagement</div>
                        <div class="mv-card-title">Bâtir des communautés prospères</div>
                        <p class="mv-card-desc">Au-delà du crédit, CREMIN-CAM s'engage dans le développement local, financement agricole avec FODECC, programme immobilier "un membre, un terrain", et appui aux coopératives et GIC.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="values-section about-section">
            <div class="rv">
                <div class="stag">Ce en quoi nous croyons</div>
                <h2 class="stitle">Nos valeurs <span class="bl">fondatrices</span></h2>
                <p class="ssub">Ces quatre principes guident chaque interaction, chaque décision et chaque service depuis notre création.</p>
            </div>
            <div class="values-grid">
                <div class="vcard rv d1"><div class="vcard-num">01</div><div class="vcard-icon"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div><div class="vcard-title">Solidarité</div><p class="vcard-desc">Nous croyons en la force du collectif. En unissant les ressources de nos membres, nous créons une communauté financière plus forte que la somme de ses parties.</p></div>
                <div class="vcard rv d2"><div class="vcard-num">02</div><div class="vcard-icon"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div class="vcard-title">Égalité</div><p class="vcard-desc">Les mêmes opportunités pour tous, sans distinction de race, de religion, de sexe ou d'origine sociale. Chaque membre bénéficie d'un traitement équitable et respectueux.</p></div>
                <div class="vcard rv d3"><div class="vcard-num">03</div><div class="vcard-icon"><svg viewBox="0 0 24 24"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg></div><div class="vcard-title">Intégrité</div><p class="vcard-desc">Transparence, honnêteté et respect des plus hauts principes éthiques. Notre conformité réglementaire continue depuis 2009 est la preuve concrète de cet engagement.</p></div>
                <div class="vcard rv d4"><div class="vcard-num">04</div><div class="vcard-icon"><svg viewBox="0 0 24 24"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div><div class="vcard-title">Performance</div><p class="vcard-desc">L'excellence comme standard dans tous nos services. Grâce à une gestion rigoureuse et une amélioration constante, nous garantissons des résultats optimaux pour nos membres.</p></div>
            </div>
        </section>

        @include('partials.about-shared', ['mode' => 'about'])
    </main>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const obs = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('vis');
                        obs.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.06 });

            document.querySelectorAll('.about-page .rv').forEach((element) => obs.observe(element));
        });
    </script>
@endpush
