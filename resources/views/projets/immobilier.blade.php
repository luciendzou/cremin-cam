@extends('layouts.app')

@section('title', 'CREMIN-CAM | Projet Immobilier')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/cremin_cam_projects.css') }}">
@endpush

@section('content')
<div class="stripe"></div>

<main class="projects-page">
    <section class="hero hero-immo-v2">
        <div class="hero-deco"></div>
        <div class="hero-deco2"></div>

        <div class="hero-in hero-immo-v2-inner reveal">
            <div class="hero-immo-v2-content">
                <div class="hero-tag">Projet phare · Immobilier foncier</div>
                <h1>Un membre,<br><span>un terrain titre</span></h1>
                <p class="hero-sub">
                    CREMIN-CAM vous propose l'acces a la propriete fonciere au Cameroun :
                    des terrains titres a Yaounde et Douala, a des prix accessibles,
                    avec un financement adapte a chaque membre.
                </p>

                <div class="hero-stats">
                    <div class="hs">
                        <div class="hs-n">4</div>
                        <div class="hs-l">Sites disponibles</div>
                    </div>
                    <div class="hs">
                        <div class="hs-n">10k<span> - 30k</span></div>
                        <div class="hs-l">FCFA / m2</div>
                    </div>
                    <div class="hs">
                        <div class="hs-n">3<span> mois</span></div>
                        <div class="hs-l">Max pour le titre</div>
                    </div>
                    <div class="hs">
                        <div class="hs-n">500<span>+</span></div>
                        <div class="hs-l">Membres proprietaires</div>
                    </div>
                </div>

                <div class="hero-btns">
                    <a href="{{ route('contact') }}" class="btn-orange-solid">Deposer ma candidature</a>
                    <button type="button" class="btn-outline-w2 poster-trigger" data-open-poster-modal>Telecharger l'affiche</button>
                </div>
            </div>

            <div class="hero-mascot">
                <div class="hero-photo-card">
                    <img src="{{ asset('immo/immo-1.png') }}" alt="Illustration du projet immobilier CREMIN-CAM">
                </div>
            </div>
        </div>
    </section>

    <section class="trust">
        <div class="trust-in">
            <div class="ti">Terrains titres · Titre foncier legal</div>
            <div class="ti">Agreee MINFI</div>
            <div class="ti">Titre en 3 mois maximum</div>
            <div class="ti">Paiement comptant, credit ou mixte</div>
            <div class="ti">Reserve aux membres CREMIN-CAM</div>
        </div>
    </section>

    <section class="proc-section">
        <div class="proc-in">
            <div class="proc-hero reveal">
                <div class="proc-hero-media">
                    <div class="proc-media-stack">
                        <div class="proc-media-main">
                            <img src="{{ asset('immo/immo-3.png') }}" alt="Visuel CREMIN-CAM projet immobilier">
                        </div>
                        <div class="proc-media-accent">
                            <img src="{{ asset('immo/immo-2.PNG') }}" alt="Illustration complementaire projet immobilier">
                        </div>
                    </div>
                </div>

                <div class="proc-hero-copy">
                    <div class="stag">Les procedures</div>
                    <h2 class="stitle">Comment acquerir <span class="bl">votre terrain</span></h2>
                    <p class="ssub">Un processus transparent et accompagne, de votre demande jusqu'a la remise du titre foncier. Nous mettons un point d'honneur à sécuriser chaque transaction foncière pour garantir votre sérénité et la pérennité de votre investissement immobilier.
                    </p>
                    <div class="proc-hero-actions">
                        <a href="{{ route('contact') }}" class="btn-orange-solid btn-block">Deposer ma candidature</a>
                        <a href="#proc-steps" class="btn-outline-w2 btn-block proc-outline-btn">Voir les Procédures</a>
                    </div>
                </div>
            </div>

            @php
                $steps = [
                    [
                        'title' => 'Engagement',
                        'desc' => 'Vous adressez une demande à CREMIN-CAM en précisant :',
                        'items' => ['Le site souhaité', 'La superficie sollicitée', 'Le mode de règlement choisi', 'Comptant, crédit ou mixte']
                    ],
                    [
                        'title' => 'Convention',
                        'desc' => "Après discussion, CREMIN-CAM et le membre s'accordent sur les modalités pratiques d'acquisition.",
                        'items' => ['Prix total', 'Calendrier de paiement', 'Conditions d\'acquisition', 'Obligations des parties']
                    ],
                    [
                        'title' => 'Règlement',
                        'desc' => "Le règlement est effectué selon les conditions arrêtées d'un commun accord.",
                        'items' => ['Libération du titre', 'Procédure de mutation ou morcellement', 'Délai maximum : 3 mois', 'Frais à la charge du membre']
                    ]
                ];
            @endphp

            <div class="proc-steps row" id="proc-steps">
                <div class="col-lg-4">
                    <article class="pstep reveal d1">
                        <div class="pstep-num">1</div>
                        <div class="pstep-body">
                            <div class="pstep-title">Engagement</div>
                            <p class="pstep-desc">Vous adressez une demande a CREMIN-CAM en precisant :</p>
                            <ul class="pstep-list">
                                <li>Le site souhaite</li>
                                <li>La superficie sollicitee</li>
                                <li>Le mode de reglement choisi</li>
                                <li>Comptant, credit ou mixte</li>
                            </ul>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4">
                    <article class="pstep reveal d2">
                        <div class="pstep-num">2</div>
                        <div class="pstep-body">
                            <div class="pstep-title">Convention</div>
                            <p class="pstep-desc">Apres discussion, CREMIN-CAM et le membre s'accordent sur les modalites pratiques d'acquisition.</p>
                            <ul class="pstep-list">
                                <li>Prix total</li>
                                <li>Calendrier de paiement</li>
                                <li>Conditions d'acquisition</li>
                                <li>Obligations des parties</li>
                            </ul>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4">
                    <article class="pstep reveal d3">
                        <div class="pstep-num">3</div>
                        <div class="pstep-body">
                            <div class="pstep-title">Reglement</div>
                            <p class="pstep-desc">Le reglement est effectue selon les conditions arretees d'un commun accord.</p>
                            <ul class="pstep-list">
                                <li>Liberation du titre</li>
                                <li>Procedure de mutation ou morcellement</li>
                                <li>Delai maximum : 3 mois</li>
                                <li>Frais a la charge du membre</li>
                            </ul>
                        </div>
                    </article>
                </div>
                @foreach($steps as $index => $step)
                    <div class="col-lg-4">
                        <article class="pstep reveal d{{ $index + 1 }}">
                            <div class="pstep-num">{{ $index + 1 }}</div>
                            <div class="pstep-body">
                                <div class="pstep-title">{{ $step['title'] }}</div>
                                <p class="pstep-desc">{{ $step['desc'] }}</p>
                                <ul class="pstep-list">
                                    @foreach($step['items'] as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>

            <div class="titre-box reveal d4">
                <div>
                    <div class="tb-head">Procedure du titre de propriete</div>
                    <div class="tb-title">Votre titre foncier legal en 3 mois</div>
                    <div class="tb-items">
                        <div class="tb-item">
                            <div class="tb-icon"></div>
                            <div class="tb-item-text">
                                <h4>Mutation ou morcellement</h4>
                                <p>CREMIN-CAM, si sollicite, diligente la procedure de mutation ou de morcellement du titre foncier.</p>
                            </div>
                        </div>
                        <div class="tb-item">
                            <div class="tb-icon"></div>
                            <div class="tb-item-text">
                                <h4>Frais a la charge du membre</h4>
                                <p>Les frais lies a la procedure sont a la charge exclusive du membre acquereur.</p>
                            </div>
                        </div>
                        <div class="tb-item">
                            <div class="tb-icon"></div>
                            <div class="tb-item-text">
                                <h4>Delai maximum : 3 mois</h4>
                                <p>La procedure est realisee dans un delai maximum de trois mois apres paiement integral.</p>
                            </div>
                        </div>
                        <div class="tb-item">
                            <div class="tb-icon"></div>
                            <div class="tb-item-text">
                                <h4>Liberation a paiement integral</h4>
                                <p>Le titre de propriete est libere a l'issue du paiement integral du prix convenu.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tb-cta-box">
                    <div class="tb-cta-title">Pret a devenir proprietaire ?</div>
                    <div class="tb-cta-sub">Deposez votre candidature des maintenant. Un conseiller CREMIN-CAM vous accompagne de A a Z dans votre acquisition.</div>
                    <a href="{{ route('contact') }}" class="btn-orange-solid btn-block">Deposer ma candidature</a>
                    <a href="{{ route('contact') }}" class="btn-outline-w2 btn-block">Plus d'informations</a>
                </div>
            </div>
        </div>
    </section>

    <div class="poster-modal" id="poster-modal" aria-hidden="true">
        <div class="poster-modal-backdrop" data-close-poster-modal></div>
        <div class="poster-modal-card" role="dialog" aria-modal="true" aria-labelledby="poster-modal-title">
            <button type="button" class="poster-modal-close" data-close-poster-modal aria-label="Fermer">×</button>
            <div class="poster-modal-tag">Affiche du projet</div>
            <h3 id="poster-modal-title">Choisissez une langue</h3>
            <p>Telechargez l'affiche du programme immobilier CREMIN-CAM en francais ou en anglais.</p>
            <div class="poster-modal-actions">
                <a href="{{ asset('immo/cremincam-booster-fr.png') }}" class="btn-orange-solid btn-block" download="cremincam-booster-fr.png">Telecharger FR</a>
                <a href="{{ asset('immo/cremincam-booster-en.png') }}" class="btn-outline-w2 btn-block poster-modal-outline" download="cremincam-booster-en.png">Telecharger EN</a>
            </div>
        </div>
    </div>


</main>
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
        }, {
            threshold: 0.08
        });

        document.querySelectorAll('.projects-page .reveal').forEach((element) => revealObserver.observe(element));

        const posterModal = document.getElementById('poster-modal');
        const openPosterModal = document.querySelector('[data-open-poster-modal]');
        const closePosterModalButtons = document.querySelectorAll('[data-close-poster-modal]');

        if (posterModal && openPosterModal) {
            openPosterModal.addEventListener('click', () => {
                posterModal.classList.add('is-open');
                posterModal.setAttribute('aria-hidden', 'false');
            });

            closePosterModalButtons.forEach((button) => {
                button.addEventListener('click', () => {
                    posterModal.classList.remove('is-open');
                    posterModal.setAttribute('aria-hidden', 'true');
                });
            });
        }
    });
</script>
@endpush
