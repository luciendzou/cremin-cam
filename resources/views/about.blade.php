@extends('layouts.app')

@section('title', 'CREMIN-CAM | A propos')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cremin_cam_about_pages.css') }}">
@endpush

@section('content')
    <h1 class="sr-only">A propos de CREMIN-CAM</h1>

    <div class="stripe"></div>

    <main class="about-page">
        <section class="hero">
            <div class="hero-in rv">
                <div class="htag">A Propos de CREMIN-CAM</div>
                <h1>Une microfinance agreee,<br><span>construite pour ses membres</span></h1>
                <p class="hero-sub">Nous sommes un etablissement de microfinance de 1ere categorie, agree par arrete N° 00000074/MINFI du 8 janvier 2009, avec un capital initial de 90 millions de francs.</p>
                <div class="hero-badges">
                    <div class="hbadge"><svg viewBox="0 0 24 24"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg>Agreee MINFI - 2009</div>
                    <div class="hbadge"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>EMF de 1ere categorie</div>
                    <div class="hbadge"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10A15.3 15.3 0 0112 2z"/></svg>Capital initial 90 millions</div>
                    <div class="hbadge"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>Finance mutualiste pour les membres</div>
                </div>
            </div>
        </section>

        <section class="id-strip">
            <div class="id-strip-in">
                <div class="id-cell rv">
                    <div class="id-label">Denomination legale</div>
                    <div class="id-val">Credit Mutuel d'Investissement du Cameroun<small>CREMIN-CAM</small></div>
                </div>
                <div class="id-cell rv d1">
                    <div class="id-label">Agrement MINFI</div>
                    <div class="id-val">N° 00000074/MINFI<small>Delivre le 08 janvier 2009</small></div>
                </div>
                <div class="id-cell rv d2">
                    <div class="id-label">Categorie</div>
                    <div class="id-val">EMF de 1ere categorie<small>Microfinance agreee</small></div>
                </div>
                <div class="id-cell rv d3">
                    <div class="id-label">Capital initial</div>
                    <div class="id-val">90 millions FCFA<small>Base de lancement de l'institution</small></div>
                </div>
            </div>
        </section>

        <section class="about-section">
            <div class="rv">
                <div class="stag">Qui sommes-nous</div>
                <h2 class="stitle">Une institution mutualiste <span class="bl">au service de ses membres</span></h2>
                <p class="ssub">CREMIN-CAM collecte l'epargne de ses membres et met en place des financements au profit exclusif de ces derniers, dans une logique de securite, de rentabilite et de developpement durable.</p>
            </div>

            <div class="about-layout">
                <div class="about-visual rv d1">
                    <div class="about-main-card">
                        <div class="amc-content">
                            <div class="amc-quote">"</div>
                            <p class="amc-text">CREMIN-CAM voudrait etre une microfinance de reference dans 25 ans, qui soit leader en matiere de responsabilite sociale par la mutualisation et la rentabilisation de ses potentiels, pour l'epanouissement de ses membres.</p>
                            <div class="amc-author">- Vision institutionnelle CREMIN-CAM</div>
                            <div class="amc-divider"></div>
                            <div class="amc-stats">
                                <div><div class="amc-stat-num">1<span>ere</span></div><div class="amc-stat-label">CATEGORIE EMF</div></div>
                                <div><div class="amc-stat-num">90<span>M</span></div><div class="amc-stat-label">CAPITAL INITIAL</div></div>
                                <div><div class="amc-stat-num">2009</div><div class="amc-stat-label">ANNEE D'AGREMENT</div></div>
                                <div><div class="amc-stat-num">25<span>+</span></div><div class="amc-stat-label">VISION A LONG TERME</div></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="about-text rv d2">
                    <p>Le <strong>Credit Mutuel d'Investissement du Cameroun (CREMIN-CAM)</strong> est un etablissement de microfinance de <strong>1ere categorie</strong>, agree par arrete <strong>N° 00000074/MINFI</strong> du <strong>8 janvier 2009</strong>, avec un capital initial de <strong>90 millions de francs</strong>.</p>
                    <p>La mission de CREMIN-CAM est de <strong>collecter l'epargne</strong> et <strong>d'octroyer des credits</strong> a ses membres en assurant leur securite et leur rentabilite, dans le souci d'un developpement durable et de la satisfaction de leurs aspirations legitimes.</p>
                    <p>Notre objectif central est la <strong>collecte de l'epargne des membres</strong> et l'<strong>octroi des financements au profit exclusif desdits membres</strong>. Toute notre action s'inscrit dans une logique mutualiste, utile, concrete et orientee vers les besoins reels de notre communaute.</p>
                    <div class="highlight-box">
                        <p>CREMIN-CAM fonde son action sur la democratie, la solidarite, l'egalite, l'integrite, la transparence, l'innovation et la creativite, avec une conviction simple : le client est roi et la performance doit toujours servir les membres.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mv-section">
            <div class="mv-inner">
                <div class="rv" style="text-align:center">
                    <div class="stag" style="display:block;text-align:center">Ce qui nous guide</div>
                    <h2 class="stitle" style="text-align:center">Vision, mission et <span class="bl">objectif</span></h2>
                    <p class="ssub" style="margin:0 auto;text-align:center">Trois piliers institutionnels qui structurent notre action au service des membres.</p>
                </div>
                <div class="mv-grid">
                    <div class="mv-card mission rv d1">
                        <div class="mv-icon"><svg viewBox="0 0 24 24"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></div>
                        <div class="mv-card-tag">Notre Mission</div>
                        <div class="mv-card-title">Collecter l'epargne et financer les membres</div>
                        <p class="mv-card-desc">La mission de CREMIN-CAM est de collecter l'epargne et d'octroyer des credits a ses membres, en assurant leur securite et leur rentabilite dans le souci d'un developpement durable.</p>
                    </div>
                    <div class="mv-card vision rv d2">
                        <div class="mv-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7z"/><circle cx="12" cy="12" r="3"/></svg></div>
                        <div class="mv-card-tag">Notre Vision</div>
                        <div class="mv-card-title">Etre une microfinance de reference</div>
                        <p class="mv-card-desc">CREMIN-CAM voudrait etre une microfinance de reference dans 25 ans, leader en matiere de responsabilite sociale par la mutualisation et la rentabilisation de ses potentiels, pour l'epanouissement de ses membres.</p>
                    </div>
                    <div class="mv-card engagement rv d3">
                        <div class="mv-icon"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg></div>
                        <div class="mv-card-tag">Notre Objectif</div>
                        <div class="mv-card-title">Servir exclusivement les membres</div>
                        <p class="mv-card-desc">Notre objectif est la collecte de l'epargne de nos membres et l'octroi des financements au profit exclusif desdits membres, dans un cadre securise, transparent et durable.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="gov-section">
            <div class="rv">
                <div class="stag">Quelques responsables</div>
                <h2 class="stitle">Des visages pour porter <span class="bl">la vision de l'institution</span></h2>
                <p class="ssub">Ces responsables accompagnent la gouvernance et la mise en oeuvre des orientations de CREMIN-CAM au quotidien.</p>
            </div>
            <div class="gov-grid leaders-grid">
                <div class="gov-card rv d1">
                    <div class="leader-photo">
                        <img src="{{ asset('dirigeants/pca.jpg') }}" alt="MOH Sylvester T.">
                    </div>
                    <div class="leader-card-body">
                        <div class="leader-name">MOH Sylvester T.</div>
                        <div class="leader-role">President du Conseil d'Administration</div>
                    </div>
                </div>
                <div class="gov-card rv d2">
                    <div class="leader-photo">
                        <img src="{{ asset('dirigeants/pcs.png') }}" alt="EDOU OLO'O Jean Louis">
                    </div>
                    <div class="leader-card-body">
                        <div class="leader-name">EDOU OLO'O Jean Louis</div>
                        <div class="leader-role">President du Conseil de Surveillance</div>
                    </div>
                </div>
                <div class="gov-card rv d3">
                    <div class="leader-photo">
                        <img src="{{ asset('dirigeants/dg.jpg') }}" alt="NTAP Ruben">
                    </div>
                    <div class="leader-card-body">
                        <div class="leader-name">NTAP Ruben</div>
                        <div class="leader-role">Directeur Général</div>
                    </div>
                </div>
                <div class="gov-card rv d4">
                    <div class="leader-photo">
                        <img src="{{ asset('dirigeants/dga.jpg') }}" alt="Valentine DANG OKALE">
                    </div>
                    <div class="leader-card-body">
                        <div class="leader-name">Valentine DANG OKALE</div>
                        <div class="leader-role">Directeur Général Adjoint</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="values-section about-section">
            <div class="rv">
                <div class="stag">Ce en quoi nous croyons</div>
                <h2 class="stitle">Nos valeurs <span class="bl">fondatrices</span></h2>
                <p class="ssub">Ces principes structurent notre identite, notre gouvernance et notre relation quotidienne avec les membres.</p>
            </div>
            <div class="values-grid">
                <div class="vcard rv d1"><div class="vcard-num">01</div><div class="vcard-icon"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div><div class="vcard-title">Democratie & Solidarite</div><p class="vcard-desc">Nous croyons dans la force du collectif, l'implication des membres et la construction d'une institution ou chacun compte dans la vie cooperative.</p></div>
                <div class="vcard rv d2"><div class="vcard-num">02</div><div class="vcard-icon"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div class="vcard-title">Egalite, Integrite, Transparence</div><p class="vcard-desc">Chaque membre doit etre traite avec equite, dans le respect des regles, de l'ethique et d'une information claire sur les decisions et les services.</p></div>
                <div class="vcard rv d3"><div class="vcard-num">03</div><div class="vcard-icon"><svg viewBox="0 0 24 24"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg></div><div class="vcard-title">Innovation & Creativite</div><p class="vcard-desc">Nous faisons evoluer nos pratiques et nos offres pour repondre aux besoins reels des membres, avec des solutions utiles, simples et concretes.</p></div>
                <div class="vcard rv d4"><div class="vcard-num">04</div><div class="vcard-icon"><svg viewBox="0 0 24 24"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div><div class="vcard-title">Le client est roi & Performance</div><p class="vcard-desc">La satisfaction du membre et la performance de l'institution vont de pair. Nous cherchons des resultats durables, utiles et benefiques pour tous.</p></div>
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
