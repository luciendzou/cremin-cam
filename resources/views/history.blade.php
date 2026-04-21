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
                <h1>15 ans d'histoire<br>et de <span>croissance</span></h1>
                <p class="hero-sub">De l'agrément officiel du MINFI à la digitalisation des services, découvrez les étapes qui ont façonné CREMIN-CAM et renforcé sa proximité avec ses membres.</p>
                <div class="hero-badges">
                    <div class="hbadge"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>Fondation en 2009</div>
                    <div class="hbadge"><svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/></svg>4 régions couvertes</div>
                    <div class="hbadge"><svg viewBox="0 0 24 24"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>SOLO by CREMIN-CAM</div>
                </div>
            </div>
        </section>

        <section class="history-section">
            <div class="history-inner">
                <div class="rv" style="text-align:center">
                    <div class="stag" style="display:block;text-align:center">Notre parcours</div>
                    <h2 class="stitle" style="text-align:center">15 ans d'histoire <span class="bl">et de croissance</span></h2>
                    <p class="ssub" style="margin:0 auto;text-align:center">De la fondation à l'expansion nationale, les jalons qui ont construit CREMIN-CAM.</p>
                </div>
                <div class="timeline">
                    <div class="tl-item rv d1"><div class="tl-dot" style="background:var(--blue);box-shadow:0 0 0 3px var(--blue)"></div><span class="tl-year" style="background:var(--blue)">2009</span><div class="tl-title">Agrément officiel du MINFI</div><p class="tl-desc">Le Crédit Mutuel d'Investissement du Cameroun reçoit son agrément officiel du Ministère des Finances, marquant le début formel de ses activités d'épargne et de crédit à Yaoundé.</p></div>
                    <div class="tl-item rv d1"><div class="tl-dot" style="background:var(--bl);box-shadow:0 0 0 3px var(--bl)"></div><span class="tl-year" style="background:var(--bl)">2011</span><div class="tl-title">Immatriculation au CNC et intégration au réseau RECCU-CAM</div><p class="tl-desc">CREMIN-CAM est immatriculé sous le numéro EMF/2011/0015 et intègre le réseau RECCU-CAM LTD, renforçant sa crédibilité institutionnelle et son accès à des ressources mutualistes élargies.</p></div>
                    <div class="tl-item rv d1"><div class="tl-dot" style="background:var(--orange);box-shadow:0 0 0 3px var(--orange)"></div><span class="tl-year" style="background:var(--orange)">2014 - 2016</span><div class="tl-title">Expansion du réseau d'agences</div><p class="tl-desc">Ouverture des agences de Douala et de Garoua, ainsi que du guichet de Nkongsamba. CREMIN-CAM devient une institution à couverture nationale couvrant le Littoral, le Centre et le Nord du pays.</p></div>
                    <div class="tl-item rv d1"><div class="tl-dot" style="background:var(--green);box-shadow:0 0 0 3px var(--green)"></div><span class="tl-year" style="background:var(--green)">2018 - 2020</span><div class="tl-title">Lancement des projets structurants</div><p class="tl-desc">Mise en place du programme phare "Un membre, un terrain" et signature du partenariat stratégique avec le FODECC pour le financement des agriculteurs. CREMIN-CAM s'affirme comme un acteur du développement réel.</p></div>
                    <div class="tl-item rv d1"><div class="tl-dot" style="background:var(--bdark);box-shadow:0 0 0 3px var(--bdark)"></div><span class="tl-year" style="background:var(--bdark)">2022 - Présent</span><div class="tl-title">Digitalisation et ouverture au Nord-Cameroun</div><p class="tl-desc">Lancement de l'application mobile SOLO by CREMIN-CAM, ouverture du guichet de Maroua et refonte des services digitaux. CREMIN-CAM franchit le cap des 5 000 membres actifs et poursuit son expansion.</p></div>
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
