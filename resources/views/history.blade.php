@extends('layouts.app')

@section('title', 'CREMIN-CAM | Notre histoire')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cremin_cam_about_pages.css') }}">
@endpush

@section('content')
    <h1 class="sr-only">Notre histoire - CREMIN-CAM</h1>

    <div class="stripe"></div>

    <main class="about-page">
        <section class="hero">
            <div class="hero-in rv">
                <div class="htag">Notre parcours</div>
                <h1>L'histoire de creation<br>du <span>CREMIN-CAM</span></h1>
                <p class="hero-sub">Le Credit Mutuel d'Investissement du Cameroun est une creation de la Mutuelle des Personnels du Tresor. Son histoire s'inscrit dans une logique mutualiste, solidaire et nationale.</p>
                <div class="hero-badges">
                    <div class="hbadge"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>Annees 80</div>
                    <div class="hbadge"><svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/></svg>03 mars 2008</div>
                    <div class="hbadge"><svg viewBox="0 0 24 24"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg>08 janvier 2009</div>
                    <div class="hbadge"><svg viewBox="0 0 24 24"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>07 fevrier 2011</div>
                </div>
            </div>
        </section>

        <section class="history-section">
            <div class="history-inner">
                <div class="rv" style="text-align:center">
                    <div class="stag" style="display:block;text-align:center">Notre histoire</div>
                    <h2 class="stitle" style="text-align:center">Les etapes de creation <span class="bl">du CREMIN-CAM</span></h2>
                    <p class="ssub" style="margin:0 auto;text-align:center">De la Mutuelle du Tresor a l'agrement comme etablissement de microfinance, les jalons fondateurs de l'institution.</p>
                </div>

                <div class="timeline">
                    <div class="tl-item rv d1">
                        <div class="tl-dot" style="background:var(--blue);box-shadow:0 0 0 3px var(--blue)"></div>
                        <span class="tl-year" style="background:var(--blue)">Annees 80</span>
                        <div class="tl-title">Creation de la Mutuelle du Tresor</div>
                        <p class="tl-desc">Le point de depart de l'histoire du CREMIN-CAM remonte aux annees 80 avec la creation de la Mutuelle du Tresor, base originelle de la dynamique mutualiste qui donnera naissance plus tard a la microfinance.</p>
                    </div>

                    <div class="tl-item rv d2">
                        <div class="tl-dot" style="background:var(--bl);box-shadow:0 0 0 3px var(--bl)"></div>
                        <span class="tl-year" style="background:var(--bl)">03 aout 1999</span>
                        <div class="tl-title">Relance de la mutuelle</div>
                        <p class="tl-desc">Apres une periode de lethargie, la structure est relancee sous l'appellation <strong>La Mutuelle du Personnel de la Direction du Tresor</strong>. Elle fonctionne normalement jusqu'a la fin de l'annee 2006.</p>
                    </div>

                    <div class="tl-item rv d3">
                        <div class="tl-dot" style="background:var(--orange);box-shadow:0 0 0 3px var(--orange)"></div>
                        <span class="tl-year" style="background:var(--orange)">20 janvier 2007</span>
                        <div class="tl-title">Reorganisation en Mutuelle des Personnels du Tresor</div>
                        <p class="tl-desc">A la suite de la reorganisation du Ministere de l'Economie et des Finances par decret n°2005/119 du 15 avril 2005, l'Assemblee Generale reorganise la structure qui devient <strong>La Mutuelle des Personnels du Tresor</strong>.</p>
                    </div>

                    <div class="tl-item rv d4">
                        <div class="tl-dot" style="background:var(--green);box-shadow:0 0 0 3px var(--green)"></div>
                        <span class="tl-year" style="background:var(--green)">03 mars 2008 - 31 janvier 2009</span>
                        <div class="tl-title">Naissance du CREMIN-CAM</div>
                        <p class="tl-desc">Les statuts et le reglement interieur sont revus pour integrer la DCFMA, tenir compte du nouvel organigramme du Ministere des Finances et revoir la composition de l'Assemblee Generale et du Conseil d'Administration. Dans cette dynamique, la Mutuelle des Personnels du Tresor cree une microfinance denommee <strong>Credit Mutuel d'Investissement du Cameroun (CREMIN-CAM)</strong>, inscrite au registre des cooperatives sous le n°CE/CO/28/08/23476 du 03 mars 2008.</p>
                    </div>

                    <div class="tl-item rv d5">
                        <div class="tl-dot" style="background:var(--bdark);box-shadow:0 0 0 3px var(--bdark)"></div>
                        <span class="tl-year" style="background:var(--bdark)">08 janvier 2009</span>
                        <div class="tl-title">Agrement officiel comme EMF de 1ere categorie</div>
                        <p class="tl-desc">CREMIN-CAM est agree comme etablissement de microfinance par l'arrete n° 00074/MINFI du 08 janvier 2009, en qualite d'etablissement de microfinance de premiere categorie. Il fonctionne sur la base des regles et principes mutualistes avec des membres disperses sur l'ensemble du territoire.</p>
                    </div>

                    <div class="tl-item rv d6">
                        <div class="tl-dot" style="background:#6d7f95;box-shadow:0 0 0 3px #6d7f95"></div>
                        <span class="tl-year" style="background:#6d7f95">07 fevrier 2011</span>
                        <div class="tl-title">Entree a l'ANEMCAM et immatriculation CNC</div>
                        <p class="tl-desc">CREMIN-CAM devient membre de l'Association Nationale des Etablissements de Microfinance du Cameroun (ANEMCAM). Il est inscrit au registre d'immatriculation du Conseil National du Credit par decision a caractere individuel n° 015/11 du 07 fevrier 2011.</p>
                    </div>
                </div>
            </div>
        </section>

        @include('partials.about-shared', ['mode' => 'history'])
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
