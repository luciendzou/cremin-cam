@extends('layouts.app')

@section('title', 'CREMIN-CAM | Politique de confidentialité')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/cremin_cam_policy.css') }}">
@endpush

@section('content')
<div class="policy-page">
    <section class="policy-hero">
        <div class="policy-hero-inner">
            <div class="policy-pill">Politique de confidentialité</div>
            <h1>SOLO by CREMIN-CAM<br>Protection de vos données</h1>
            <p>
                Cette politique de confidentialité décrit directement les données collectées,
                la manière dont elles sont utilisées et vos droits lorsque vous utilisez l'application mobile SOLO.
            </p>
            <div class="policy-hero-badges">
                <span>Données personnelles</span>
                <span>Utilisation transparente</span>
                <span>Vos droits respectés</span>
            </div>
        </div>
    </section>

    <main class="policy-main">
        <section class="policy-card">
            <div class="policy-intro">
                <p>
                    La présente politique s'applique à l'application mobile SOLO by CREMIN-CAM et aux services
                    associés fournis par CREMIN-CAM. Elle explique les catégories de données traitées et les finalités de ce traitement.
                </p>
                <p class="policy-meta">Dernière mise à jour : 3 août 2026</p>
            </div>

            <div class="policy-grid">
                <article class="policy-block">
                    <h2>1. Données collectées</h2>
                    <ul>
                        <li>Informations d'identification : nom, prénom, adresse e-mail, numéro de téléphone.</li>
                        <li>Informations de connexion : identifiants, données de session et authentification.</li>
                        <li>Données de compte : numéros de compte, solde, opérations et transactions effectuées via SOLO.</li>
                        <li>Données techniques : adresse IP, type d'appareil, version du système d'exploitation et journaux de connexion.</li>
                    </ul>
                </article>

                <article class="policy-block">
                    <h2>2. Finalités du traitement</h2>
                    <ul>
                        <li>Permettre l'accès sécurisé à l'application SOLO et à votre espace personnel.</li>
                        <li>Gérer les services financiers disponibles via l'application, comme la consultation de compte et les transferts.</li>
                        <li>Améliorer l'application et détecter les problèmes de sécurité ou de fraude.</li>
                        <li>Répondre à vos demandes de support et à vos questions relatives à l'application.</li>
                    </ul>
                </article>

                <article class="policy-block">
                    <h2>3. Partage et destinataires</h2>
                    <ul>
                        <li>Vos données sont traitées par CREMIN-CAM et par les prestataires techniques nécessaires au fonctionnement de SOLO.</li>
                        <li>Nous ne vendons pas vos données à des tiers commerciaux.</li>
                        <li>Nous pouvons partager certaines informations si la loi l'exige ou pour protéger vos droits et la sécurité de l'application.</li>
                    </ul>
                </article>

                <article class="policy-block">
                    <h2>4. Sécurité</h2>
                    <ul>
                        <li>CREMIN-CAM met en œuvre des mesures techniques et organisationnelles pour protéger vos données contre l'accès non autorisé.</li>
                        <li>Nous recommandons d'utiliser un mot de passe robuste et de ne jamais partager vos identifiants.</li>
                        <li>En cas de suspicion de compromission, informez-nous immédiatement via l'adresse indiquée ci-dessous.</li>
                    </ul>
                </article>

                <article class="policy-block">
                    <h2>5. Conservation des données</h2>
                    <ul>
                        <li>Vos données sont conservées uniquement pendant la durée nécessaire aux finalités définies et conformément aux obligations légales.</li>
                        <li>Lorsque les données ne sont plus nécessaires, nous les supprimons ou les rendons anonymes.</li>
                    </ul>
                </article>

                <article class="policy-block">
                    <h2>6. Vos droits</h2>
                    <ul>
                        <li>Accès : vous pouvez demander quelles données nous détenons à votre sujet.</li>
                        <li>Rectification : vous pouvez demander la correction de données inexactes ou incomplètes.</li>
                        <li>Suppression : vous pouvez demander la suppression des données lorsque cela est légalement possible.</li>
                        <li>Opposition : vous pouvez vous opposer à certains traitements, en particulier ceux à des fins de marketing.</li>
                    </ul>
                </article>
            </div>

            <div class="policy-contact">
                <h2>Contact</h2>
                <p>
                    Pour toute question sur cette politique de confidentialité ou pour exercer vos droits,
                    contactez l'équipe de développement à <a href="mailto:developper@cremincam.com">developper@cremincam.com</a>.
                </p>
            </div>
        </section>
    </main>
</div>
@endsection
