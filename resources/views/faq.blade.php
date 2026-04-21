@extends('layouts.app')

@section('title', 'CREMIN-CAM | FAQ')

@php
    $categories = [
        [
            'key' => 'comptes',
            'title' => 'Comptes bancaires',
            'iconBg' => '#E8F1FB',
            'iconStroke' => '#1A5FA8',
            'questions' => [
                [
                    'q' => 'Comment ouvrir un compte chez CREMIN-CAM ?',
                    'a' => [
                        'Rendez-vous dans l’une de nos agences avec votre pièce d’identité nationale valide, une photo d’identité récente et un justificatif de domicile. Notre équipe vous guide à chaque étape.',
                    ],
                ],
                [
                    'q' => 'Quels types de comptes CREMIN-CAM propose-t-il ?',
                    'a' => [
                        'CREMIN-CAM propose notamment des comptes Salaire, Épargne, Junior, Entreprise et Parrainé.',
                        'Chaque formule répond à un besoin spécifique : gestion quotidienne, constitution d’épargne, besoins professionnels ou accompagnement familial.',
                    ],
                ],
                [
                    'q' => 'Comment obtenir un relevé de compte ou une attestation de solde ?',
                    'a' => [
                        'Vous pouvez consulter vos opérations via SOLO. Pour un document officiel, présentez-vous en agence avec votre pièce d’identité ; le document est généralement disponible dans la journée.',
                    ],
                ],
                [
                    'q' => 'Comment domicilier mon salaire chez CREMIN-CAM ?',
                    'a' => [
                        'Après ouverture du compte salaire, vous transmettez les coordonnées bancaires remises par l’agence à votre employeur ou au service RH.',
                    ],
                ],
            ],
        ],
        [
            'key' => 'credits',
            'title' => 'Crédits & Prêts',
            'iconBg' => '#FEF3E2',
            'iconStroke' => '#F5A020',
            'questions' => [
                [
                    'q' => 'Quels documents faut-il pour une demande de crédit ?',
                    'a' => [
                        'Pièce d’identité, justificatifs de revenus, relevés de compte récents, justificatif de domicile et, selon le projet, devis ou plan de localisation.',
                    ],
                ],
                [
                    'q' => 'Quel est le délai de traitement d’une demande de crédit ?',
                    'a' => [
                        'Les crédits simples sont généralement traités en 5 à 10 jours ouvrés après réception du dossier complet. Les projets plus structurés demandent davantage de validation.',
                    ],
                ],
                [
                    'q' => 'Puis-je rembourser mon crédit par anticipation ?',
                    'a' => [
                        'Oui, le remboursement anticipé est possible, en totalité ou en partie, selon les modalités prévues dans votre contrat.',
                    ],
                ],
                [
                    'q' => 'Comment bénéficier d’un découvert autorisé ?',
                    'a' => [
                        'Le découvert autorisé concerne surtout les comptes actifs avec revenus réguliers ou domiciliation de salaire. L’agence étudie votre historique et votre capacité de remboursement.',
                    ],
                ],
            ],
        ],
        [
            'key' => 'epargne',
            'title' => 'Épargne & Placement',
            'iconBg' => '#E6F4EC',
            'iconStroke' => '#1E6B45',
            'questions' => [
                [
                    'q' => 'Quel taux de rémunération pour mon épargne ?',
                    'a' => [
                        'Le taux dépend du produit choisi et des conditions en vigueur. Un conseiller peut vous présenter l’offre la plus adaptée à votre objectif d’épargne.',
                    ],
                ],
                [
                    'q' => 'Mon épargne est-elle disponible à tout moment ?',
                    'a' => [
                        'Les comptes d’épargne à vue restent disponibles. Certains produits d’épargne peuvent prévoir une durée ou des conditions particulières en échange d’une rémunération plus attractive.',
                    ],
                ],
                [
                    'q' => 'Comment ouvrir un compte junior pour mon enfant ?',
                    'a' => [
                        'Le parent ou tuteur légal présente sa pièce d’identité, l’acte de naissance de l’enfant et, si nécessaire, les justificatifs de tutelle.',
                    ],
                ],
            ],
        ],
        [
            'key' => 'digital',
            'title' => 'Services digitaux',
            'iconBg' => '#EDE9FE',
            'iconStroke' => '#7C3AED',
            'questions' => [
                [
                    'q' => 'Comment télécharger et utiliser l’application SOLO ?',
                    'a' => [
                        'SOLO by CREMIN-CAM est disponible sur Android. Une fois installée, utilisez les accès créés lors de votre inscription pour consulter votre compte et effectuer vos opérations.',
                    ],
                ],
                [
                    'q' => 'Comment obtenir et utiliser la carte Visa prépayée ?',
                    'a' => [
                        'La carte Visa prépayée se commande en agence avec votre pièce d’identité. Elle est rechargeable et utilisable en ligne, en boutique ou aux distributeurs.',
                    ],
                ],
                [
                    'q' => 'Comment activer les alertes SMS Banking ?',
                    'a' => [
                        'Le service peut être activé lors de l’ouverture du compte ou directement en agence. Il vous permet de recevoir les notifications de vos principales opérations.',
                    ],
                ],
                [
                    'q' => 'J’ai oublié mon mot de passe SOLO. Que faire ?',
                    'a' => [
                        'Pour des raisons de sécurité, la réinitialisation se fait en agence avec présentation de la pièce d’identité du titulaire.',
                    ],
                ],
            ],
        ],
        [
            'key' => 'projets',
            'title' => 'Projets',
            'iconBg' => '#ECFDF5',
            'iconStroke' => '#059669',
            'questions' => [
                [
                    'q' => 'Comment participer au programme "Un membre, un terrain" ?',
                    'a' => [
                        'Vous devez être membre actif, présenter une capacité de remboursement justifiée et déposer un dossier complet. L’agence vous accompagne dans la constitution du dossier.',
                    ],
                ],
                [
                    'q' => 'Quelle est la durée de remboursement du programme immobilier ?',
                    'a' => [
                        'La durée peut aller jusqu’à 5 ans selon le montant accordé et votre profil de remboursement.',
                    ],
                ],
                [
                    'q' => 'Comment bénéficier du financement agricole FODECC ?',
                    'a' => [
                        'Le dispositif est destiné aux agriculteurs, coopératives et GIC. Il faut présenter le projet, les justificatifs d’activité et les documents d’identification nécessaires.',
                    ],
                ],
                [
                    'q' => 'CREMIN-CAM finance-t-il des projets d’entreprise ou commerciaux ?',
                    'a' => [
                        'Oui, selon le dossier et l’activité, des solutions de financement professionnel peuvent être étudiées avec la direction ou en agence.',
                    ],
                ],
            ],
        ],
        [
            'key' => 'transferts',
            'title' => 'Transferts d’argent',
            'iconBg' => '#FFF7ED',
            'iconStroke' => '#EA580C',
            'questions' => [
                [
                    'q' => 'Puis-je effectuer des virements entre comptes CREMIN-CAM ?',
                    'a' => [
                        'Oui, en agence et selon les services activés, via vos outils digitaux. Les modalités peuvent varier selon le type de compte.',
                    ],
                ],
                [
                    'q' => 'Comment recevoir de l’argent depuis une autre ville ?',
                    'a' => [
                        'Les agences du réseau et certains services partenaires permettent la mise à disposition des fonds selon les pièces d’identification demandées.',
                    ],
                ],
                [
                    'q' => 'Quels paiements puis-je effectuer via CREMIN-CAM Money ?',
                    'a' => [
                        'Selon les services disponibles, vous pouvez régler certaines factures, frais et opérations du quotidien en agence et parfois via SOLO.',
                    ],
                ],
            ],
        ],
        [
            'key' => 'conformite',
            'title' => 'Conformité',
            'iconBg' => '#F3F4F6',
            'iconStroke' => '#6B7280',
            'questions' => [
                [
                    'q' => 'Pourquoi mettez-vous à jour les informations clients ?',
                    'a' => [
                        'La mise à jour régulière du dossier client permet de respecter les exigences réglementaires, de sécuriser les opérations et de mieux protéger les membres.',
                    ],
                ],
                [
                    'q' => 'Mes dépôts sont-ils sécurisés chez CREMIN-CAM ?',
                    'a' => [
                        'CREMIN-CAM est un établissement agréé, supervisé et soumis à des mécanismes de contrôle, d’audit et de conformité qui renforcent la sécurité des opérations.',
                    ],
                ],
                [
                    'q' => 'Pourquoi certaines opérations nécessitent-elles des justificatifs ?',
                    'a' => [
                        'Ces justificatifs sont demandés pour la sécurité des membres, la traçabilité des opérations et le respect des obligations réglementaires.',
                    ],
                ],
            ],
        ],
    ];

    $totalFaqs = array_sum(array_map(fn ($category) => count($category['questions']), $categories));

    $popularQuestions = [
        'Comment ouvrir un compte chez CREMIN-CAM ?',
        'Quels documents faut-il pour une demande de crédit ?',
        'Comment télécharger l’application SOLO ?',
        'Comment participer au programme immobilier ?',
    ];

    $tags = ['Compte salaire', 'Crédit', 'SOLO', 'Carte Visa', 'Projet agricole', 'Programme immobilier'];
@endphp

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cremin_cam_faq.css') }}">
@endpush

@section('content')
    <main class="faq-page">
        <div class="faq-stripe"></div>

        <section class="hero">
            <div class="hero-inner reveal">
                <div class="hero-badge">Centre d'aide</div>
                <h1>Questions <span>fréquentes</span></h1>
                <p class="hero-subtitle">Trouvez rapidement la réponse à votre question. Si vous ne trouvez pas, notre équipe est disponible pour vous aider.</p>
                <div class="search-wrap">
                    <input id="faq-search" class="search-input" type="text" placeholder="Rechercher une question...">
                    <svg class="search-icon" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                </div>
                <div id="faq-search-count" class="search-count">{{ $totalFaqs }} questions disponibles</div>
            </div>
        </section>

        <section class="stats-row">
            <div class="stats-inner">
                <div class="stat-cell reveal">
                    <div class="stat-number">{{ $totalFaqs }}</div>
                    <div class="stat-label">Questions répondues</div>
                </div>
                <div class="stat-cell reveal delay-1">
                    <div class="stat-number">{{ count($categories) }}</div>
                    <div class="stat-label">Catégories</div>
                </div>
                <div class="stat-cell reveal delay-2">
                    <div class="stat-number">24<sup>h</sup></div>
                    <div class="stat-label">Délai de réponse email</div>
                </div>
                <div class="stat-cell reveal delay-3">
                    <div class="stat-number">5</div>
                    <div class="stat-label">Points de service</div>
                </div>
            </div>
        </section>

        <section class="categories-bar">
            <div class="categories-inner">
                <button class="category-button is-active" data-category="all">Toutes <span class="category-count">{{ $totalFaqs }}</span></button>
                @foreach ($categories as $category)
                    <button class="category-button" data-category="{{ $category['key'] }}">{{ $category['title'] }} <span class="category-count">{{ count($category['questions']) }}</span></button>
                @endforeach
            </div>
        </section>

        <section class="faq-main">
            <div>
                <div id="faq-no-results" class="no-results">
                    <svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    <h4>Aucun résultat</h4>
                    <p>Essayez un autre terme ou contactez-nous directement.</p>
                </div>

                @foreach ($categories as $categoryIndex => $category)
                    <section class="category-block reveal {{ $categoryIndex % 2 === 1 ? 'delay-1' : '' }}" data-category-block="{{ $category['key'] }}">
                        <div class="category-header">
                            <div class="category-icon" style="background: {{ $category['iconBg'] }}">
                                <svg viewBox="0 0 24 24" style="stroke: {{ $category['iconStroke'] }}">
                                    <circle cx="12" cy="12" r="9"></circle>
                                    <path d="M12 7v5l3 2"></path>
                                </svg>
                            </div>
                            <div class="category-title">{{ $category['title'] }}</div>
                            <div class="category-size">{{ count($category['questions']) }} questions</div>
                        </div>

                        @foreach ($category['questions'] as $question)
                            <article class="faq-item" data-category-item="{{ $category['key'] }}" data-search="{{ strtolower($question['q'].' '.implode(' ', $question['a'])) }}">
                                <div class="faq-question">
                                    <div class="faq-question-text">{{ $question['q'] }}</div>
                                    <div class="faq-chevron"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                </div>
                                <div class="faq-answer">
                                    @foreach ($question['a'] as $paragraph)
                                        <p>{{ $paragraph }}</p>
                                    @endforeach
                                    <div class="helpful-row">
                                        <span>Cette réponse vous a aidé ?</span>
                                        <button type="button" class="helpful-button">Oui</button>
                                        <a href="{{ route('contact') }}" class="helpful-button" style="text-decoration:none;">Contacter</a>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </section>
                @endforeach
            </div>

            <aside class="faq-sidebar">
                <div class="sidebar-card reveal delay-1">
                    <div class="sidebar-title">
                        <svg viewBox="0 0 24 24"><path d="M12 20h9"></path><path d="M12 4h9"></path><path d="M3 6h.01"></path><path d="M3 18h.01"></path><path d="M3 12h18"></path></svg>
                        Questions populaires
                    </div>
                    <div class="popular-list">
                        @foreach ($popularQuestions as $index => $question)
                            <a class="popular-link" href="#" data-popular-search="{{ $question }}">
                                <span class="popular-number">0{{ $index + 1 }}</span>
                                <span class="popular-text">{{ $question }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>

                <div class="sidebar-card reveal delay-2">
                    <div class="sidebar-title">
                        <svg viewBox="0 0 24 24"><path d="M20.59 13.41L12 22l-8.59-8.59A2 2 0 0 1 4.83 10H8V6a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v4h3.17a2 2 0 0 1 1.42 3.41z"></path></svg>
                        Sujets rapides
                    </div>
                    <div class="tag-list">
                        @foreach ($tags as $tag)
                            <button type="button" class="tag-button" data-tag-search="{{ $tag }}">{{ $tag }}</button>
                        @endforeach
                    </div>
                </div>

                <div class="contact-card reveal delay-3">
                    <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 3.07 8.81 2 2 0 0 1 5.09 3h3a2 2 0 0 1 2 1.72"></path></svg>
                    <h4>Besoin d'aide ?</h4>
                    <p>Si votre réponse n’est pas ici, notre équipe peut vous accompagner par téléphone ou via la page contact.</p>
                    <a class="contact-button" href="{{ route('contact') }}">Nous écrire</a>
                    <a class="phone-button" href="tel:+237697046925">(+237) 697 04 69 25</a>
                </div>
            </aside>
        </section>

        <section class="cta-band">
            <div class="cta-inner">
                <div class="cta-copy">
                    <h2>Vous avez encore une <span>question</span> ?</h2>
                    <p>Nos équipes sont disponibles pour vous orienter vers le bon service, la bonne agence ou la bonne solution CREMIN-CAM.</p>
                </div>
                <div class="cta-buttons">
                    <a class="cta-primary" href="{{ route('contact') }}">Contacter un conseiller</a>
                    <a class="cta-secondary" href="{{ route('open-account') }}">Ouvrir un compte</a>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const revealItems = document.querySelectorAll('.faq-page .reveal');
            const observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.12 });

            revealItems.forEach(function (item) {
                observer.observe(item);
            });

            const faqItems = document.querySelectorAll('.faq-page .faq-item');
            faqItems.forEach(function (item) {
                item.querySelector('.faq-question').addEventListener('click', function () {
                    item.classList.toggle('is-open');
                });
            });

            document.querySelectorAll('.faq-page .helpful-button').forEach(function (button) {
                if (button.tagName === 'BUTTON') {
                    button.addEventListener('click', function (event) {
                        event.stopPropagation();
                        button.classList.add('is-clicked');
                        button.textContent = 'Merci';
                    });
                }
            });

            const searchInput = document.getElementById('faq-search');
            const searchCount = document.getElementById('faq-search-count');
            const noResults = document.getElementById('faq-no-results');
            const categoryBlocks = document.querySelectorAll('.faq-page .category-block');
            const categoryButtons = document.querySelectorAll('.faq-page .category-button');
            let activeCategory = 'all';

            function updateFaqView() {
                const query = searchInput.value.trim().toLowerCase();
                let visibleItems = 0;

                categoryBlocks.forEach(function (block) {
                    const blockKey = block.dataset.categoryBlock;
                    const blockMatchesCategory = activeCategory === 'all' || activeCategory === blockKey;
                    let blockVisibleItems = 0;

                    block.querySelectorAll('.faq-item').forEach(function (item) {
                        const matchesSearch = !query || item.dataset.search.includes(query);
                        const shouldShow = blockMatchesCategory && matchesSearch;
                        item.classList.toggle('no-match', !shouldShow);
                        if (shouldShow) {
                            blockVisibleItems += 1;
                            visibleItems += 1;
                        }
                    });

                    block.classList.toggle('is-hidden', blockVisibleItems === 0);
                });

                noResults.classList.toggle('is-visible', visibleItems === 0);
                searchCount.textContent = visibleItems + ' question' + (visibleItems > 1 ? 's' : '') + ' disponible' + (visibleItems > 1 ? 's' : '');
            }

            searchInput.addEventListener('input', updateFaqView);

            categoryButtons.forEach(function (button) {
                button.addEventListener('click', function () {
                    categoryButtons.forEach(function (item) { item.classList.remove('is-active'); });
                    button.classList.add('is-active');
                    activeCategory = button.dataset.category;
                    updateFaqView();
                });
            });

            document.querySelectorAll('[data-popular-search], [data-tag-search]').forEach(function (item) {
                item.addEventListener('click', function (event) {
                    event.preventDefault();
                    searchInput.value = item.dataset.popularSearch || item.dataset.tagSearch || '';
                    updateFaqView();
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                });
            });

            updateFaqView();
        });
    </script>
@endpush
