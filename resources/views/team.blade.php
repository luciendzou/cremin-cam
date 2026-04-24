@extends('layouts.app')

@section('title', "CREMIN-CAM | L'equipe")

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cremin_cam_about_pages.css') }}">
@endpush

@section('content')
    <h1 class="sr-only">L'equipe - CREMIN-CAM</h1>

    <div class="stripe"></div>

    <main class="about-page">
        <section class="hero">
            <div class="hero-in rv">
                <div class="htag">L'equipe CREMIN-CAM</div>
                <h1>Des femmes et des hommes<br><span>au service des membres</span></h1>
                <p class="hero-sub">L'equipe de CREMIN-CAM porte la vision de l'institution au quotidien. Elle accompagne les membres avec professionnalisme, proximite et sens de la responsabilite.</p>
                <div class="hero-badges">
                    <div class="hbadge"><svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>Direction & gouvernance</div>
                    <div class="hbadge"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>Travail d'equipe</div>
                    <div class="hbadge"><svg viewBox="0 0 24 24"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>Proximite terrain</div>
                    <div class="hbadge"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>Confiance & rigueur</div>
                </div>
            </div>
        </section>

        <section class="about-section">
            <div class="rv">
                <div class="stag">Notre equipe</div>
                <h2 class="stitle">Une equipe dirigeante et des postes <span class="bl">clairement identifies</span></h2>
                <p class="ssub">La presentation de l'equipe commence par la Direction Generale, puis la Direction Generale Adjointe, avant de mettre en avant les autres postes structurants de l'organigramme institutionnel.</p>
            </div>

            <div class="gov-grid leaders-grid">
                <div class="gov-card rv d1">
                    <div class="leader-photo">
                        <img src="{{ asset('dirigeants/dg.jpg') }}" alt="NTAP Ruben">
                    </div>
                    <div class="leader-card-body">
                        <div class="leader-name">NTAP Ruben</div>
                        <div class="leader-role">Directeur General</div>
                        <p class="leader-copy">Il pilote les activites de l'institution, coordonne les operations et assure la mise en oeuvre des orientations definies dans le cadre de la gouvernance de CREMIN-CAM.</p>
                    </div>
                </div>

                <div class="gov-card rv d2">
                    <div class="leader-photo">
                        <img src="{{ asset('dirigeants/dga.jpg') }}" alt="Valentine DANG OKALE">
                    </div>
                    <div class="leader-card-body">
                        <div class="leader-name">Valentine DANG OKALE</div>
                        <div class="leader-role">Directeur General Adjoint</div>
                        <p class="leader-copy">Il contribue a la coordination operationnelle, au suivi des agences et a l'amelioration continue de la qualite de service offerte aux membres.</p>
                    </div>
                </div>

                <div class="gov-card rv d3">
                    <div class="leader-card-body">
                        <div class="leader-name">Assistante de Direction</div>
                        <div class="leader-role">Support de direction</div>
                        <p class="leader-copy">Elle assure l'appui administratif, la coordination organisationnelle et le suivi de plusieurs activites transversales utiles au fonctionnement quotidien de la direction.</p>
                    </div>
                </div>

                <div class="gov-card rv d4">
                    <div class="leader-card-body">
                        <div class="leader-name">D Controle et Audit Interne</div>
                        <div class="leader-role">Controle interne</div>
                        <p class="leader-copy">Cette fonction veille au respect des procedures, a la maitrise des risques et au bon niveau de controle interne dans l'interet de l'institution et de ses membres.</p>
                    </div>
                </div>

                <div class="gov-card rv d1">
                    <div class="leader-card-body">
                        <div class="leader-name">DAFC</div>
                        <div class="leader-role">Direction administrative, financiere et comptable</div>
                        <p class="leader-copy">Cette direction assure le suivi administratif, financier et comptable de l'institution et soutient le bon fonctionnement des services support.</p>
                    </div>
                </div>

                <div class="gov-card rv d2">
                    <div class="leader-card-body">
                        <div class="leader-name">DESA</div>
                        <div class="leader-role">Direction / supervision operationnelle</div>
                        <p class="leader-copy">Cette fonction participe a l'encadrement de plusieurs activites et services d'appui relies a l'organisation et au fonctionnement interne.</p>
                    </div>
                </div>

                <div class="gov-card rv d3">
                    <div class="leader-card-body">
                        <div class="leader-name">Cellule Juridique</div>
                        <div class="leader-role">Appui juridique</div>
                        <p class="leader-copy">La Cellule Juridique accompagne l'institution dans le suivi des dossiers, la securisation des actes et le respect du cadre legal et reglementaire.</p>
                    </div>
                </div>

                <div class="gov-card rv d4">
                    <div class="leader-card-body">
                        <div class="leader-name">Cellule Informatique</div>
                        <div class="leader-role">Support informatique</div>
                        <p class="leader-copy">La Cellule Informatique contribue a la disponibilite des outils, a l'appui technique des equipes et au bon fonctionnement de l'environnement numerique.</p>
                    </div>
                </div>

                <div class="gov-card rv d1">
                    <div class="leader-card-body">
                        <div class="leader-name">Chef d'agence Yaounde</div>
                        <div class="leader-role">Agence principale</div>
                        <p class="leader-copy">Il coordonne l'activite de l'agence de Yaounde et veille a la qualite de l'accueil, du traitement des operations et de l'accompagnement des membres.</p>
                    </div>
                </div>

                <div class="gov-card rv d2">
                    <div class="leader-card-body">
                        <div class="leader-name">Chef d'agence Douala</div>
                        <div class="leader-role">Agence du Littoral</div>
                        <p class="leader-copy">Il assure la supervision des activites de l'agence de Douala et le suivi operationnel des services offerts aux membres dans cette zone.</p>
                    </div>
                </div>

                <div class="gov-card rv d3">
                    <div class="leader-card-body">
                        <div class="leader-name">Chef d'agence Garoua</div>
                        <div class="leader-role">Agence du Nord</div>
                        <p class="leader-copy">Il pilote l'activite de l'agence de Garoua et accompagne le developpement des services de proximite dans le Grand Nord.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mv-section">
            <div class="mv-inner">
                <div class="rv" style="text-align:center">
                    <div class="stag" style="display:block;text-align:center">Notre dynamique</div>
                    <h2 class="stitle" style="text-align:center">Ce qui fait la force de <span class="bl">notre equipe</span></h2>
                    <p class="ssub" style="margin:0 auto;text-align:center">Au-dela des fonctions, nous partageons une meme exigence de service, de transparence et d'engagement envers les membres.</p>
                </div>

                <div class="mv-grid">
                    <div class="mv-card mission rv d1">
                        <div class="mv-icon"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
                        <div class="mv-card-tag">Complicite</div>
                        <div class="mv-card-title">Une culture de collaboration</div>
                        <p class="mv-card-desc">Nos equipes travaillent dans un esprit de cooperation, d'ecoute et de complementarite pour mieux servir les membres sur le terrain.</p>
                    </div>
                    <div class="mv-card vision rv d2">
                        <div class="mv-icon"><svg viewBox="0 0 24 24"><path d="M12 2v20M2 12h20"/></svg></div>
                        <div class="mv-card-tag">Pouvoir d'agir</div>
                        <div class="mv-card-title">Des responsabilites assumees</div>
                        <p class="mv-card-desc">Chaque responsable contribue a la marche de l'institution avec rigueur, autonomie et sens du resultat dans le respect des orientations definies.</p>
                    </div>
                    <div class="mv-card engagement rv d3">
                        <div class="mv-icon"><svg viewBox="0 0 24 24"><path d="M12 20V10"/><path d="M18 20V4"/><path d="M6 20v-6"/></svg></div>
                        <div class="mv-card-tag">Agilite</div>
                        <div class="mv-card-title">Une institution en mouvement</div>
                        <p class="mv-card-desc">Notre equipe accompagne la croissance de CREMIN-CAM avec une capacite d'adaptation constante, dans un environnement proche des realites des membres.</p>
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
