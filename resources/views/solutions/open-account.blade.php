@extends('layouts.app')

@section('title', 'CREMIN-CAM | Ouvrir un compte')

@php
$accounts = [
[
'key' => 'cheque',
'tab' => 'Compte Chèque',
'title' => 'Comptes Chèques',
'description' => 'Les comptes chèques sont ouverts aux particuliers salariés ou non. Ils constituent une base simple pour gérer les opérations du quotidien.',
'badge' => 'Particuliers',
'cardColor' => '#1A5FA8',
'cardText' => 'Une formule de compte courant pensée pour les particuliers, avec ouverture gratuite et dossier clairement défini.',
'features' => [
['title' => 'Ouverture de compte gratuite', 'text' => 'Aucun frais d’ouverture de compte n’est demandé.'],
['title' => 'Accessible aux particuliers', 'text' => 'Le compte est ouvert aux particuliers salariés ou non.'],
['title' => 'Constitution de dossier claire', 'text' => 'Les pièces à fournir sont connues à l’avance pour vous faire gagner du temps.'],
['title' => 'Relation bancaire simple', 'text' => 'Une base utile pour vos opérations bancaires courantes chez CREMIN-CAM.'],
],
'docs' => [
'Photocopie d’une pièce d’identité officielle',
'02 photos d’identité',
'Bulletin de paie pour les fonctionnaires et les salariés',
'Attestation de présence effective au service',
'Attestation de non redevance',
],
],
[
'key' => 'commercial',
'tab' => 'Compte Commercial',
'title' => 'Comptes Commerciaux',
'description' => 'Ils sont ouverts aux associations, GIC, ONG, entreprises, sociétés et autres établissements qui ont besoin d’un compte adapté à leur activité.',
'badge' => 'Structures',
'cardColor' => '#0F3D72',
'cardText' => 'Une formule pensée pour les organisations, entreprises et structures formelles avec des exigences documentaires adaptées.',
'features' => [
['title' => 'Ouverture de compte gratuite', 'text' => 'Le compte commercial s’ouvre sans frais d’ouverture.'],
['title' => 'Adapté aux structures', 'text' => 'Associations, GIC, ONG, entreprises, sociétés et autres établissements peuvent constituer leur dossier.'],
['title' => 'Documents juridiques intégrés', 'text' => 'Les pièces varient selon la forme juridique de la structure et ses mandataires.'],
['title' => 'Premier versement minimum', 'text' => 'Un premier versement minimum de 150 000 FCFA est requis à l’ouverture.'],
],
'docs' => [
'Carte de contribuable, Registre de commerce, Attestation de non redevance',
'02 photos d’identité du gérant et des mandataires',
'Pièce d’identité du Promoteur (Entreprises Individuelles)',
'Statut et Pouvoirs si c’est une Société',
'Premier versement : minimum 150 000 FCFA',
],
],
];

$documents = [
[
'title' => 'Compte Chèque',
'color' => '#E8F1FB',
'stroke' => '#1A5FA8',
'items' => [
'Photocopie d’une pièce d’identité officielle',
'02 photos d’identité',
'Bulletin de paie pour les fonctionnaires et les salariés',
],
],
[
'title' => 'Présence & conformité',
'color' => '#FEF3E2',
'stroke' => '#F5A020',
'items' => [
'Attestation de présence effective au service',
'Attestation de non redevance',
'Ouverture de compte gratuite',
],
],
[
'title' => 'Compte Commercial',
'color' => '#E6F4EC',
'stroke' => '#1E6B45',
'items' => [
'Carte de contribuable, Registre de commerce, Attestation de non redevance',
'02 photos d’identité du gérant et des mandataires',
'Pièce d’identité du Promoteur (Entreprises Individuelles)',
'Statut et Pouvoirs si c’est une Société',
'Premier versement minimum 150 000 FCFA',
],
'note' => 'Les pièces exactes peuvent varier selon la structure : association, GIC, ONG, entreprise individuelle ou société.',
],
];

$benefits = [
['title' => 'Proximité', 'text' => 'Une équipe vous accompagne en agence et vous aide à constituer le bon dossier.', 'stroke' => '#F5A020'],
['title' => 'Ouverture gratuite', 'text' => 'Les comptes chèques et commerciaux s’ouvrent sans frais d’ouverture.', 'stroke' => '#F5A020'],
['title' => 'Lecture claire des pièces', 'text' => 'Les documents requis sont identifiés à l’avance pour éviter les allers-retours inutiles.', 'stroke' => '#F5A020'],
['title' => 'Solutions pour particuliers et structures', 'text' => 'La page couvre à la fois les besoins des personnes physiques et des organisations.', 'stroke' => '#F5A020'],
['title' => 'Confiance', 'text' => 'Un établissement encadré, agréé et ancré dans son territoire.', 'stroke' => '#F5A020'],
['title' => 'Accompagnement', 'text' => 'Un conseiller peut vous orienter vers la bonne catégorie de compte avant votre passage en agence.', 'stroke' => '#F5A020'],
];

$channels = [
['title' => 'Nous écrire', 'text' => 'Laissez votre demande détaillée via la page contact.', 'href' => route('contact'), 'bg' => '#E8F1FB', 'stroke' => '#1A5FA8'],
['title' => 'Appeler un conseiller', 'text' => 'Contact direct au (+237) 697 04 69 25.', 'href' => 'tel:+237697046925', 'bg' => '#FEF3E2', 'stroke' => '#F5A020'],
['title' => 'Passer en agence', 'text' => 'Rendez-vous dans le point de service le plus proche.', 'href' => route('branches'), 'bg' => '#E6F4EC', 'stroke' => '#1E6B45'],
];

$miniFaqs = [
['q' => 'L’ouverture d’un compte est-elle payante ?', 'a' => 'Non. Les comptes chèques et les comptes commerciaux sont ouverts gratuitement.'],
['q' => 'Qui peut ouvrir un compte chèque ?', 'a' => 'Les comptes chèques sont ouverts aux particuliers salariés ou non.'],
['q' => 'Qui peut ouvrir un compte commercial ?', 'a' => 'Les comptes commerciaux sont ouverts aux associations, GIC, ONG, entreprises, sociétés et autres établissements.'],
['q' => 'Y a-t-il un premier versement minimum ?', 'a' => 'Oui. Pour les comptes commerciaux, un premier versement minimum de 150 000 FCFA est requis.'],
];

$trustItems = [
'Agréé MINFI',
'EMF 1ère catégorie',
'Réseau RECCU-CAM LTD',
'+5 000 membres',
'4 régions couvertes',
];
@endphp

@push('styles')
<link rel="stylesheet" href="{{ asset('css/cremin_cam_open_account.css') }}">
@endpush

@section('content')
<main class="open-account-page">
    <section class="hero hero-immo-v2">
        <div class="hero-deco"></div>
        <div class="hero-deco2"></div>
        <div class="hero-inner hero-immo-v2-inner reveal">
            <div class="reveal hero-text">
                <div class="hero-badge">Devenez membre</div>
                <h1>Ouvrez votre compte<br><span>en quelques étapes</span></h1>
                <p class="hero-subtitle">Que vous soyez un particulier ou une structure, CREMIN-CAM vous accompagne avec des conditions claires pour ouvrir le compte adapté à votre profil.</p>

                <div class="hero-perks">
                    <div class="hero-perk"><span class="perk-icon"><svg viewBox="0 0 14 14">
                                <path d="M1 7l4 4 8-8"></path>
                            </svg></span>Ouverture guidée avec des pièces connues à l’avance</div>
                    <div class="hero-perk"><span class="perk-icon"><svg viewBox="0 0 14 14">
                                <path d="M1 7l4 4 8-8"></path>
                            </svg></span>Solutions pour particuliers et structures</div>
                    <div class="hero-perk"><span class="perk-icon"><svg viewBox="0 0 14 14">
                                <path d="M1 7l4 4 8-8"></path>
                            </svg></span>Ouverture gratuite pour les deux catégories</div>
                    <div class="hero-perk"><span class="perk-icon"><svg viewBox="0 0 14 14">
                                <path d="M1 7l4 4 8-8"></path>
                            </svg></span>Conseiller dédié pour vous orienter</div>
                </div>

                <div class="hero-buttons">
                    <a href="#appointment" class="button-primary">Prendre rendez-vous</a>
                    <a href="#account-types" class="button-secondary">Voir les comptes</a>
                </div>
            </div>

            <div class="hero-mascot">
                <div class="hero-photo-card">
                    <img src="{{ asset('products/hero-open-account.png') }}"
                        alt="Illustration ouverture de compte CREMIN-CAM">
                </div>
            </div>
        </div>
    </section>

    <section class="trust-band">
        <div class="trust-inner">
            @foreach ($trustItems as $item)
            <div class="trust-item">
                <svg viewBox="0 0 24 24">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                </svg>
                <span>{{ $item }}</span>
            </div>
            @endforeach
        </div>
    </section>

    <section id="account-types" class="accounts-section">
        <div class="reveal">
            <div class="section-tag">Nos comptes</div>
            <h2 class="section-title">Choisissez le compte <span>fait pour vous</span></h2>
            <p class="section-subtitle">Deux catégories claires pour répondre aux besoins des particuliers d’un côté, et des structures de l’autre.</p>
        </div>

        <div class="account-tabs reveal">
            @foreach ($accounts as $index => $account)
            <button type="button" class="account-tab {{ $index === 0 ? 'is-active' : '' }}" data-account-tab="{{ $account['key'] }}">{{ $account['tab'] }}</button>
            @endforeach
        </div>

        @foreach ($accounts as $index => $account)
        <div class="account-panel {{ $index === 0 ? 'is-active' : '' }} reveal" data-account-panel="{{ $account['key'] }}">
            <div class="account-info">
                <h3>{{ $account['title'] }}</h3>
                <p class="account-description">{{ $account['description'] }}</p>

                <div class="feature-list">
                    @foreach ($account['features'] as $feature)
                    <div class="feature-item">
                        <span class="feature-check"><svg viewBox="0 0 12 12">
                                <path d="M1 6l3 3 7-7"></path>
                            </svg></span>
                        <div class="feature-copy">
                            <h4>{{ $feature['title'] }}</h4>
                            <p>{{ $feature['text'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="account-card" style="background: {{ $account['cardColor'] }}">
                <div class="account-card-body">
                    <div class="account-badge">{{ $account['badge'] }}</div>
                    <div class="account-name">{{ $account['title'] }}</div>
                    <div class="account-card-description">{{ $account['cardText'] }}</div>
                    <div class="account-divider"></div>
                    <div class="account-documents">
                        <div class="document-title">Documents requis</div>
                        <ul>
                            @foreach ($account['docs'] as $doc)
                            <li>{{ $doc }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <a href="#appointment" class="account-cta">Ouvrir ce compte</a>
                </div>
            </div>
        </div>
        @endforeach
    </section>

    <section class="steps-section">
        <div class="steps-inner">
            <div class="steps-header reveal">
                <div class="section-tag">Le processus</div>
                <h2 class="section-title">Ouvert en <span>4 étapes simples</span></h2>
                <p class="section-subtitle">Pas de parcours compliqué, notre équipe vous guide à chaque étape.</p>
            </div>

            <div class="steps-grid">
                @foreach ([
                ['title' => 'Choisissez votre catégorie', 'text' => 'Compte Chèque pour les particuliers ou Compte Commercial pour les structures.', 'badge' => 'Deux options claires'],
                ['title' => 'Préparez vos pièces', 'text' => 'Rassemblez les documents requis selon la catégorie de compte.', 'badge' => 'Liste ci-dessous'],
                ['title' => 'Passez en agence', 'text' => 'Présentez votre dossier complet ou prenez rendez-vous avec un conseiller.', 'badge' => 'Accompagnement dédié'],
                ['title' => 'Votre compte est actif', 'text' => 'Une fois le dossier validé et les conditions remplies, votre compte peut être activé.', 'badge' => 'Traitement simplifié'],
                ] as $stepIndex => $step)
                <div class="step-card reveal delay-{{ min($stepIndex + 1, 4) }}">
                    <div class="step-number"><span>{{ $stepIndex + 1 }}</span></div>
                    <div class="step-title">{{ $step['title'] }}</div>
                    <div class="step-description">{{ $step['text'] }}</div>
                    <div class="step-badge">{{ $step['badge'] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="docs-section">
        <div class="reveal">
            <div class="section-tag">Pièces à prévoir</div>
            <h2 class="section-title">Les documents <span>essentiels</span></h2>
            <p class="section-subtitle">Préparez les pièces de base avant votre passage en agence pour accélérer l’ouverture du compte.</p>
        </div>

        <div class="docs-grid">
            @foreach ($documents as $document)
            <article class="document-card reveal">
                <div class="document-icon" style="background: {{ $document['color'] }}">
                    <svg viewBox="0 0 24 24" style="stroke: {{ $document['stroke'] }}">
                        <rect x="6" y="3" width="12" height="18" rx="2"></rect>
                        <path d="M9 8h6M9 12h6M9 16h4"></path>
                    </svg>
                </div>
                <h4>{{ $document['title'] }}</h4>
                <div class="document-list">
                    @foreach ($document['items'] as $item)
                    <div class="document-item"><span class="document-dot"></span><span>{{ $item }}</span></div>
                    @endforeach
                </div>
                @if (!empty($document['note']))
                <span class="field-note">{{ $document['note'] }}</span>
                @endif
            </article>
            @endforeach
        </div>
    </section>

    <section class="benefits-section">
        <div class="benefits-inner">
            <div class="benefits-header reveal">
                <div class="section-tag">Pourquoi CREMIN-CAM</div>
                <h2 class="section-title">Ouvrir un compte avec <span>confiance</span></h2>
                <p class="section-subtitle">Une relation de proximité, des conditions claires et un accompagnement simple pour bien démarrer.</p>
            </div>

            <div class="benefits-grid">
                @foreach ($benefits as $benefit)
                <article class="benefit-card reveal">
                    <div class="benefit-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                    </div>
                    <div class="benefit-title">{{ $benefit['title'] }}</div>
                    <div class="benefit-description">{{ $benefit['text'] }}</div>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="sv-section sv-related">
        <div class="sv-container">
            <div class="reveal">
                <div class="sv-kicker">Solutions & Services associees</div>
                <h2 class="sv-title">Explorez aussi</h2>
            </div>

            <div class="sv-related-grid">
                <a href="{{ route('solutions.solo') }}" class="sv-related-card reveal d1">
                    <h3>SOLO Mobile Banking</h3>
                    <p>Gardez votre compte à portée de main avec l'application mobile de CREMIN-CAM.</p>
                    <span class="sv-related-link">Découvrir <svg viewBox="0 0 14 14">
                            <path d="M1 7h12M8 3l5 4-5 4"></path>
                        </svg></span>
                </a>
                <a href="{{ route('solutions.visa') }}" class="sv-related-card reveal d2">
                    <h3>Carte Visa Prépayée</h3>
                    <p>Une carte rechargeable pour vos paiements et retraits au Cameroun et à l'international.</p>
                    <span class="sv-related-link">Découvrir <svg viewBox="0 0 14 14">
                            <path d="M1 7h12M8 3l5 4-5 4"></path>
                        </svg></span>
                </a>
                <a href="{{ route('solutions.epargne') }}" class="sv-related-card reveal d3">
                    <h3>Comptes d'Épargne</h3>
                    <p>Préparez vos projets et votre avenir avec nos différentes formules d'épargne.</p>
                    <span class="sv-related-link">Découvrir <svg viewBox="0 0 14 14">
                            <path d="M1 7h12M8 3l5 4-5 4"></path>
                        </svg></span>
                </a>
                <a href="{{ route('services.show', 'transferts-nationaux-internationaux') }}" class="sv-related-card reveal d4">
                    <h3>Transferts</h3>
                    <p>Envoyez et recevez des fonds via nos partenaires nationaux et internationaux.</p>
                    <span class="sv-related-link">Voir le service <svg viewBox="0 0 14 14">
                            <path d="M1 7h12M8 3l5 4-5 4"></path>
                        </svg></span>
                </a>
            </div>
        </div>
    </section>
</main>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const revealItems = document.querySelectorAll('.open-account-page .reveal');
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.12
        });
        // Note: L'IntersectionObserver devrait idéalement être dans app.js 
        // car il est utilisé sur toutes les pages de solutions.

        revealItems.forEach(function(item) {
            observer.observe(item);
        });

        const tabs = document.querySelectorAll('[data-account-tab]');
        const panels = document.querySelectorAll('[data-account-panel]');

        tabs.forEach(function(tab) {
            tab.addEventListener('click', function() {
                tabs.forEach(function(item) {
                    item.classList.remove('is-active');
                });
                panels.forEach(function(panel) {
                    panel.classList.remove('is-active');
                });
                tab.classList.add('is-active');
                document.querySelector('[data-account-panel="' + tab.dataset.accountTab + '"]').classList.add('is-active');
            });
        });

        document.querySelectorAll('.open-account-page .mini-faq-item').forEach(function(item) {
            item.querySelector('.mini-faq-question').addEventListener('click', function() {
                item.classList.toggle('is-open');
            });
        });

        const appointmentForm = document.getElementById('appointment-form');
        const appointmentSuccess = document.getElementById('appointment-success');
        if (appointmentForm && appointmentSuccess) {
            appointmentForm.addEventListener('submit', function(event) {
                event.preventDefault();
                if (!appointmentForm.reportValidity()) {
                    return;
                }
                appointmentSuccess.classList.add('is-visible');
                appointmentForm.style.display = 'none';
            });
        }
    });
</script>
@endpush