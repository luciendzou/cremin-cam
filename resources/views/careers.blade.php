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
                <p class="hero-sub">Evoluez dans un environnement inclusif qui prone la flexibilite. Realisez-vous avec des projets innovants dans la complicite, le pouvoir d'agir et l'agilite, tout en profitant d'un cadre qui favorise le bien-etre.</p>
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

        <section class="values-section about-section careers-accordion-section">
            <div class="rv">
                <div class="stag">Nous rejoindre</div>
                <h2 class="stitle">Des portes d'entree <span class="bl">claires et pratiques</span></h2>
                <p class="ssub">Cliquez sur chaque bloc pour consulter les pieces a fournir, les offres actuellement disponibles ou nous transmettre votre candidature spontanee.</p>
            </div>

            <div class="career-accordion">
                <article class="career-panel rv d1 is-open">
                    <button class="career-panel-toggle" type="button" aria-expanded="true">
                        <div class="career-panel-head">
                            <div class="career-panel-num">01</div>
                            <div>
                                <div class="career-panel-title">Stage</div>
                                <p class="career-panel-summary">Stage academique ou professionnel : consultez les dossiers a fournir.</p>
                            </div>
                        </div>
                        <span class="career-panel-chevron" aria-hidden="true">
                            <svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </span>
                    </button>
                    <div class="career-panel-body">
                        <div class="career-docs-grid">
                            <div class="career-doc-card">
                                <div class="career-doc-title">Stage academique</div>
                                <ul class="career-doc-list">
                                    <li>Demande de stage adressee a la Direction Generale</li>
                                    <li>Lettre d'introduction ou de recommandation de l'etablissement</li>
                                    <li>CV a jour</li>
                                    <li>Photocopie de la carte nationale d'identite ou du recepisse</li>
                                    <li>Precisions sur la periode et le domaine de stage recherches</li>
                                </ul>
                            </div>
                            <div class="career-doc-card">
                                <div class="career-doc-title">Stage professionnel</div>
                                <ul class="career-doc-list">
                                    <li>Demande de stage adressee a la Direction Generale</li>
                                    <li>CV a jour</li>
                                    <li>Lettre de motivation</li>
                                    <li>Photocopie de la carte nationale d'identite ou du recepisse</li>
                                    <li>Copie du diplome, attestation ou justificatif de formation</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="career-panel rv d2">
                    <button class="career-panel-toggle" type="button" aria-expanded="false">
                        <div class="career-panel-head">
                            <div class="career-panel-num">02</div>
                            <div>
                                <div class="career-panel-title">Postes disponibles</div>
                                <p class="career-panel-summary">Consultez les opportunites en cours au sein du CREMIN-CAM.</p>
                            </div>
                        </div>
                        <span class="career-panel-chevron" aria-hidden="true">
                            <svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </span>
                    </button>
                    <div class="career-panel-body">
                        <div class="career-empty-state">
                            <div class="career-empty-title">Aucune offre disponible actuellement</div>
                            <p class="career-empty-copy">Nous ne publions aucun poste ouvert pour le moment. Nous vous invitons a revenir consulter cette page regulierement ou a transmettre une candidature spontanee.</p>
                        </div>
                    </div>
                </article>

                <article class="career-panel rv d3">
                    <button class="career-panel-toggle" type="button" aria-expanded="false">
                        <div class="career-panel-head">
                            <div class="career-panel-num">03</div>
                            <div>
                                <div class="career-panel-title">Candidature spontanee</div>
                                <p class="career-panel-summary">Envoyez votre CV et votre lettre de motivation via le formulaire ci-dessous.</p>
                            </div>
                        </div>
                        <span class="career-panel-chevron" aria-hidden="true">
                            <svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </span>
                    </button>
                    <div class="career-panel-body">
                        <form class="career-form" id="career-form" novalidate>
                            <div class="career-form-grid">
                                <div class="career-field">
                                    <label for="career-name">Nom complet <span>*</span></label>
                                    <input id="career-name" type="text" placeholder="Votre nom complet" required>
                                </div>
                                <div class="career-field">
                                    <label for="career-email">Adresse email <span>*</span></label>
                                    <input id="career-email" type="email" placeholder="votre@email.com" required>
                                </div>
                            </div>

                            <div class="career-form-grid">
                                <div class="career-field">
                                    <label for="career-phone">Telephone</label>
                                    <input id="career-phone" type="tel" placeholder="(+237) 6XX XXX XXX">
                                </div>
                                <div class="career-field">
                                    <label for="career-profile">Type de candidature <span>*</span></label>
                                    <select id="career-profile" required>
                                        <option value="">Selectionner</option>
                                        <option value="stage-academique">Stage academique</option>
                                        <option value="stage-professionnel">Stage professionnel</option>
                                        <option value="candidature-spontanee">Candidature spontanee</option>
                                    </select>
                                </div>
                            </div>

                            <div class="career-field">
                                <label for="career-message">Message <span>*</span></label>
                                <textarea id="career-message" placeholder="Presentez brievement votre profil, votre domaine et votre motivation." required></textarea>
                            </div>

                            <div class="career-form-grid mt-4">
                                <div class="career-field">
                                    <label for="career-cv">CV <span>*</span></label>
                                    <input id="career-cv" type="file" accept=".pdf,.doc,.docx" required>
                                </div>
                                <div class="career-field">
                                    <label for="career-letter">Lettre de motivation <span>*</span></label>
                                    <input id="career-letter" type="file" accept=".pdf,.doc,.docx" required>
                                </div>
                            </div>

                            <div class="career-form-actions">
                                <button class="bo" type="submit">Envoyer la candidature</button>
                                <a href="{{ route('contact') }}" class="bw career-alt-link">Contacter l'equipe</a>
                            </div>

                            <p class="career-form-note">Les fichiers attendus sont au format PDF, DOC ou DOCX. Votre dossier sera examine selon les besoins et disponibilites de l'institution.</p>
                            <div class="career-form-success" id="career-form-success">Votre candidature a bien ete preparee. Notre equipe reviendra vers vous si votre profil correspond a un besoin.</div>
                        </form>
                    </div>
                </article>
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

            document.querySelectorAll('.career-panel-toggle').forEach((toggle) => {
                toggle.addEventListener('click', () => {
                    const panel = toggle.closest('.career-panel');
                    const isOpen = panel.classList.contains('is-open');

                    document.querySelectorAll('.career-panel').forEach((item) => {
                        item.classList.remove('is-open');
                        const itemToggle = item.querySelector('.career-panel-toggle');
                        if (itemToggle) {
                            itemToggle.setAttribute('aria-expanded', 'false');
                        }
                    });

                    if (!isOpen) {
                        panel.classList.add('is-open');
                        toggle.setAttribute('aria-expanded', 'true');
                    }
                });
            });

            const careerForm = document.getElementById('career-form');
            const careerFormSuccess = document.getElementById('career-form-success');

            if (careerForm && careerFormSuccess) {
                careerForm.addEventListener('submit', (event) => {
                    event.preventDefault();
                    if (!careerForm.reportValidity()) {
                        return;
                    }

                    careerFormSuccess.classList.add('is-visible');
                    careerForm.reset();
                });
            }
        });
    </script>
@endpush
