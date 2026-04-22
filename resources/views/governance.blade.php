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
                <p class="hero-sub">CREMIN-CAM s'appuie sur une équipe dirigeante expérimentée, engagée dans la pérennité de l'institution, la conformité réglementaire et la satisfaction durable de ses membres.</p>
                <div class="hero-badges">
                    <div class="hbadge"><svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>Conseil d'administration</div>
                    <div class="hbadge"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/></svg>Commissaire aux comptes</div>
                    <div class="hbadge"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>Supervision COBAC</div>
                </div>
            </div>
        </section>

        <section class="gov-section">
            <div class="rv">
                <div class="stag">Nos organes dirigeants</div>
                <h2 class="stitle">Une gouvernance <span class="bl">solide et transparente</span></h2>
                <p class="ssub">CREMIN-CAM est dirigée par une équipe expérimentée, engagée dans la pérennité de l'institution et la satisfaction de ses membres.</p>
            </div>
            <div class="gov-grid">
                <div class="gov-card rv d1">
                    <div class="gov-card-header">
                        <div class="gov-avatar"><svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div>
                        <div class="gov-name">MOH Sylvester</div>
                        <div class="gov-role">Président du Conseil d'Administration</div>
                    </div>
                    <div class="gov-card-body">
                        <p>Président du Conseil d'Administration de CREMIN-CAM depuis la création de l'institution. Il supervise la stratégie globale et veille à la conformité aux normes réglementaires imposées par la COBAC et le MINFI.</p>
                    </div>
                </div>
                <div class="gov-card rv d2">
                    <div class="gov-card-header" style="background:var(--bdark)">
                        <div class="gov-avatar"><svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div>
                        <div class="gov-name">NTAP Ruben</div>
                        <div class="gov-role">Directeur Général</div>
                    </div>
                    <div class="gov-card-body">
                        <p>Directeur Général de CREMIN-CAM, il pilote les opérations quotidiennes, le développement commercial et l'expansion du réseau d'agences. Il assure la mise en oeuvre de la vision stratégique du Conseil d'Administration.</p>
                    </div>
                </div>
                <div class="gov-card rv d3">
                    <div class="gov-card-header" style="background:linear-gradient(135deg,var(--blue),var(--bdark))">
                        <div class="gov-avatar"><svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div>
                        <div class="gov-name">VALENTINE OKALE DANG</div>
                        <div class="gov-role">Directrice Générale Adjointe</div>
                    </div>
                    <div class="gov-card-body">
                        <p>Directeur Général Adjoint, il supervise la gestion opérationnelle des agences, les relations avec les membres et la qualité de service. Il veille à l'application des politiques internes et au développement des équipes.</p>
                    </div>
                </div>
            </div>

            <div class="governance-note rv">
                <div class="note-icon"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg></div>
                <div>
                    <div class="note-kicker">Commissaire aux comptes</div>
                    <div class="note-title">ASAH FRANCIS NFORBA</div>
                    <div class="note-copy">Responsable du contrôle légal des comptes et de la certification des états financiers annuels de CREMIN-CAM, conformément aux normes OHADA et aux exigences de la COBAC.</div>
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
