@extends('layouts.app')

@section('title', 'CREMIN-CAM | Carrieres')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cremin_cam_about_pages.css') }}">
@endpush

@section('content')
    <h1 class="sr-only">Carrieres - CREMIN-CAM</h1>

    <div class="stripe"></div>

    <main class="about-page">
        <section class="hero">
            <div class="hero-in rv">
                <div class="htag">Carrieres</div>
                <h1>Rejoignez une equipe<br><span>utile et ambitieuse</span></h1>
                <p class="hero-sub">Evoluez dans un environnement inclusif qui prone la flexibilite. Realisez-vous avec des projets innovants dans la complicite, le pouvoir d'agir et l'agilite.</p>
                <div class="hero-badges">
                    <div class="hbadge"><svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>Environnement inclusif</div>
                    <div class="hbadge"><svg viewBox="0 0 24 24"><path d="M12 2v20M2 12h20"/></svg>Flexibilite & agilite</div>
                    <div class="hbadge"><svg viewBox="0 0 24 24"><path d="M12 20V10"/><path d="M18 20V4"/><path d="M6 20v-6"/></svg>Projets innovants</div>
                    <div class="hbadge"><svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>Bien-etre au travail</div>
                </div>
            </div>
        </section>

        <section class="about-section">
            <div class="rv">
                <div class="stag">Pourquoi travailler au CREMIN-CAM</div>
                <h2 class="stitle">Un cadre qui valorise <span class="bl">le potentiel humain</span></h2>
                <p class="ssub">Nous voulons offrir a chaque collaborateur un cadre de travail ou l'on peut apprendre, contribuer, progresser et se realiser durablement.</p>
            </div>

            <div class="mv-grid">
                <div class="mv-card mission rv d1">
                    <div class="mv-icon"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
                    <div class="mv-card-tag">Inclusion</div>
                    <div class="mv-card-title">Un environnement qui accueille chacun</div>
                    <p class="mv-card-desc">Evoluez dans une organisation qui valorise l'ecoute, la diversite des parcours et la collaboration au quotidien.</p>
                </div>

                <div class="mv-card vision rv d2">
                    <div class="mv-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M2 12h20"/></svg></div>
                    <div class="mv-card-tag">Pouvoir d'agir</div>
                    <div class="mv-card-title">Une culture orientee initiative</div>
                    <p class="mv-card-desc">Nous encourageons l'autonomie, la responsabilite et la capacite a faire avancer les projets avec agilite.</p>
                </div>

                <div class="mv-card engagement rv d3">
                    <div class="mv-icon"><svg viewBox="0 0 24 24"><path d="M12 20V10"/><path d="M18 20V4"/><path d="M6 20v-6"/></svg></div>
                    <div class="mv-card-tag">Evolution</div>
                    <div class="mv-card-title">Des projets qui font grandir</div>
                    <p class="mv-card-desc">Participez a des chantiers innovants, utiles pour les membres et porteurs d'apprentissage concret pour votre parcours.</p>
                </div>
            </div>
        </section>

        <section class="values-section about-section">
            <div class="rv">
                <div class="stag">Nous rejoindre</div>
                <h2 class="stitle">Des formes d'engagement <span class="bl">pour chaque profil</span></h2>
                <p class="ssub">Que vous soyez etudiant, jeune professionnel ou candidat a un poste, plusieurs portes d'entree existent pour avancer avec nous.</p>
            </div>

            <div class="values-grid">
                <div class="vcard rv d1">
                    <div class="vcard-num">01</div>
                    <div class="vcard-icon"><svg viewBox="0 0 24 24"><path d="M4 19.5V5a2 2 0 012-2h8l6 6v10.5a2 2 0 01-2 2H6a2 2 0 01-2-2z"/><path d="M14 3v6h6"/></svg></div>
                    <div class="vcard-title">Stage</div>
                    <p class="vcard-desc">Vous pouvez nous rejoindre en tant que stagiaire academique ou professionnel, pour apprendre au contact du terrain et de nos equipes.</p>
                </div>

                <div class="vcard rv d2">
                    <div class="vcard-num">02</div>
                    <div class="vcard-icon"><svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div>
                    <div class="vcard-title">Emplois</div>
                    <p class="vcard-desc">Vous avez du potentiel pour avancer avec nous. Envoyez-nous votre demande et presentez votre profil a notre equipe.</p>
                </div>

                <div class="vcard rv d3">
                    <div class="vcard-num">03</div>
                    <div class="vcard-icon"><svg viewBox="0 0 24 24"><path d="M3 7h18"/><path d="M8 7V5a4 4 0 018 0v2"/><rect x="4" y="7" width="16" height="13" rx="2"/></svg></div>
                    <div class="vcard-title">Postes disponibles</div>
                    <p class="vcard-desc">Vous pouvez nous rejoindre en vous presentant a l'un des postes disponibles, selon les besoins actuels de l'institution.</p>
                </div>

                <div class="vcard rv d4">
                    <div class="vcard-num">04</div>
                    <div class="vcard-icon"><svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div>
                    <div class="vcard-title">Candidature spontanee</div>
                    <p class="vcard-desc">Si aucun poste ne correspond encore a votre profil, vous pouvez tout de meme prendre contact et partager votre motivation.</p>
                </div>
            </div>
        </section>

        <section class="mv-section">
            <div class="mv-inner">
                <div class="rv" style="text-align:center">
                    <div class="stag" style="display:block;text-align:center">Postuler</div>
                    <h2 class="stitle" style="text-align:center">Envoyez votre <span class="bl">demande</span></h2>
                    <p class="ssub" style="margin:0 auto;text-align:center">Pour un stage, un emploi ou une candidature spontanee, notre equipe reste disponible pour examiner votre profil.</p>
                </div>

                <div class="about-layout" style="margin-top:52px">
                    <div class="about-text rv d1">
                        <p><strong>Stage</strong> : vous pouvez nous rejoindre en tant que stagiaire academique ou professionnel.</p>
                        <p><strong>Emplois</strong> : vous avez du potentiel pour avancer avec nous, envoyez-nous votre demande.</p>
                        <p><strong>Postes disponibles</strong> : vous pouvez nous rejoindre en vous presentant a l'un des postes disponibles.</p>
                        <div class="highlight-box">
                            <p>Pour toute candidature, nous vous recommandons de preparer un CV a jour et une courte presentation de votre motivation avant de nous contacter.</p>
                        </div>
                    </div>

                    <div class="about-visual rv d2">
                        <div class="about-main-card">
                            <div class="amc-content">
                                <div class="amc-quote">"</div>
                                <p class="amc-text">Construire une institution forte, c'est aussi faire grandir des femmes et des hommes capables d'innover, de servir et d'agir avec responsabilite.</p>
                                <div class="amc-author">- Esprit RH CREMIN-CAM</div>
                                <div class="amc-divider"></div>
                                <div class="hero-band-btns">
                                    <a href="{{ route('contact') }}" class="btn-orange" style="text-decoration:none">Envoyer une demande</a>
                                    <a href="{{ route('faq') }}" class="btn-outline-w" style="text-decoration:none">Voir la FAQ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
