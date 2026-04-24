@extends('layouts.app')

@section('title', 'CREMIN-CAM | Nos organes')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cremin_cam_about_pages.css') }}">
@endpush

@section('content')
    <h1 class="sr-only">Nos organes dirigeants - CREMIN-CAM</h1>

    <div class="stripe"></div>

    <main class="about-page">
        <section class="hero">
            <div class="hero-in rv">
                <div class="htag">Nos organes dirigeants</div>
                <h1>Une gouvernance<br><span>solide et transparente</span></h1>
                <p class="hero-sub">La gouvernance de CREMIN-CAM repose sur des organes clairs, complementaires et encadres. Ils assurent l'orientation strategique, le controle, la supervision et la certification des comptes de l'institution.</p>
                <div class="hero-badges">
                    <div class="hbadge"><svg viewBox="0 0 24 24"><path d="M12 3l9 4v5c0 5.55-3.84 9.74-9 10.95C6.84 21.74 3 17.55 3 12V7l9-4z"/></svg>Assemblee Generale</div>
                    <div class="hbadge"><svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>Conseil d'Administration</div>
                    <div class="hbadge"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>Conseil de Surveillance</div>
                    <div class="hbadge"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>Commissaire au Compte</div>
                </div>
            </div>
        </section>

        <section class="gov-section">
            <div class="rv">
                <div class="stag">Nos organes dirigeants</div>
                <h2 class="stitle">Quatre organes pour une <span class="bl">gouvernance equilibree</span></h2>
                <p class="ssub">A CREMIN-CAM, l'Assemblee Generale, le Conseil d'Administration, le Conseil de Surveillance et le Commissaire au Compte jouent chacun un role precis dans la vie institutionnelle, le controle et la bonne marche de la microfinance.</p>
            </div>

            <div class="gov-grid">
                <div class="gov-card rv d1">
                    <div class="gov-card-header">
                        <div class="gov-avatar"><svg viewBox="0 0 24 24"><path d="M12 3l9 4v5c0 5.55-3.84 9.74-9 10.95C6.84 21.74 3 17.55 3 12V7l9-4z"/></svg></div>
                        <div class="gov-name">Assemblee Generale</div>
                        <div class="gov-role">Organe supreme de decision</div>
                    </div>
                    <div class="gov-card-body">
                        <p>L'Assemblee Generale reunit les membres de CREMIN-CAM. Elle constitue l'organe supreme de l'institution et valide les grandes orientations, examine les rapports, approuve les comptes et participe a la vie democratique de la structure.</p>
                    </div>
                </div>

                <div class="gov-card rv d2">
                    <div class="gov-card-header" style="background:var(--bdark)">
                        <div class="gov-avatar"><svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div>
                        <div class="gov-name">Conseil d'Administration</div>
                        <div class="gov-role">Orientation et pilotage</div>
                    </div>
                    <div class="gov-card-body">
                        <p>Le Conseil d'Administration assure l'orientation strategique de CREMIN-CAM. Il veille a la mise en oeuvre des decisions adoptees, a la bonne administration de l'institution et au respect des objectifs fixes dans l'interet des membres.</p>
                    </div>
                </div>

                <div class="gov-card rv d3">
                    <div class="gov-card-header" style="background:linear-gradient(135deg,var(--blue),var(--bdark))">
                        <div class="gov-avatar"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                        <div class="gov-name">Conseil de Surveillance</div>
                        <div class="gov-role">Controle et vigilance</div>
                    </div>
                    <div class="gov-card-body">
                        <p>Le Conseil de Surveillance controle la gestion et veille au respect des textes, des procedures internes et des principes de bonne gouvernance. Il contribue a securiser le fonctionnement de l'institution et a proteger les interets des membres.</p>
                    </div>
                </div>

                <div class="gov-card rv d4">
                    <div class="gov-card-header" style="background:linear-gradient(135deg,var(--orange),#c97c08)">
                        <div class="gov-avatar"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div>
                        <div class="gov-name">Commissaire au Compte</div>
                        <div class="gov-role">Certification et controle legal</div>
                    </div>
                    <div class="gov-card-body">
                        <p>Le Commissaire au Compte assure le controle legal des comptes et la certification des etats financiers. Son intervention renforce la transparence, la fiabilite de l'information financiere et la conformite de CREMIN-CAM avec les exigences applicables.</p>
                    </div>
                </div>
            </div>

            <div class="governance-note rv">
                <div class="note-icon"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg></div>
                <div>
                    <div class="note-kicker">Fonctionnement</div>
                    <div class="note-title">Des organes distincts mais complementaires</div>
                    <div class="note-copy">L'Assemblee Generale fixe le cadre institutionnel, le Conseil d'Administration oriente, le Conseil de Surveillance controle et le Commissaire au Compte certifie. Cette complementarite permet a CREMIN-CAM d'evoluer dans un cadre de responsabilite, de transparence et de confiance.</div>
                </div>
            </div>
        </section>

        @include('partials.about-shared', ['mode' => 'governance'])
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
