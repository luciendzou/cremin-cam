@extends('layouts.app')

@section('title', 'CREMIN-CAM | Conditions d\'utilisation SOLO')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/cremin_cam_policy.css') }}">
@endpush

@section('content')
<div class="policy-page">
    <section class="policy-hero">
        <div class="policy-hero-inner">
            <div class="policy-pill">Conditions d'utilisation</div>
            <h1>SOLO by CREMIN-CAM<br>Règles d'utilisation de l'application</h1>
            <p>
                En utilisant SOLO by CREMIN-CAM, vous acceptez les présentes conditions d'utilisation.
                Elles définissent les droits, obligations et usages attendus de l'application mobile.
            </p>
            <div class="policy-hero-badges">
                <span>Utilisation responsable</span>
                <span>Sécurité des accès</span>
                <span>Service conforme</span>
            </div>
        </div>
    </section>

    <main class="policy-main">
        <section class="policy-card">
            <div class="policy-intro">
                <p>
                    SOLO by CREMIN-CAM est une application mobile conçue pour permettre aux membres et clients
                    de CREMIN-CAM d’accéder à certains services de manière simple, rapide et sécurisée.
                </p>
                <p class="policy-meta">Dernière mise à jour : 29 juillet 2026</p>
            </div>

            <div class="policy-grid">
                <article class="policy-block">
                    <h2>1. Objet et accès</h2>
                    <ul>
                        <li>SOLO by CREMIN-CAM permet d’accéder à des services bancaires et financiers via une application mobile.</li>
                        <li>L’utilisation de l’application suppose que vous respectiez les identifiants et mots de passe fournis par CREMIN-CAM.</li>
                        <li>Vous êtes responsable de l’usage de votre compte et de la confidentialité de vos accès.</li>
                    </ul>
                </article>

                <article class="policy-block">
                    <h2>2. Utilisation autorisée</h2>
                    <ul>
                        <li>Vous pouvez utiliser SOLO pour consulter votre compte, effectuer certaines opérations et accéder à des services mis à disposition.</li>
                        <li>Vous vous engagez à utiliser l’application de manière licite, responsable et conforme à la réglementation en vigueur.</li>
                        <li>Toute utilisation frauduleuse, abusive ou non autorisée est strictement interdite.</li>
                    </ul>
                </article>

                <article class="policy-block">
                    <h2>3. Sécurité et confidentialité</h2>
                    <ul>
                        <li>Vous devez protéger votre appareil, vos codes d’accès et vos informations de connexion.</li>
                        <li>CREMIN-CAM met en place des mesures techniques pour sécuriser l’application, sans toutefois garantir une sécurité absolue.</li>
                        <li>Vous devez signaler immédiatement toute utilisation non autorisée ou toute anomalie détectée.</li>
                    </ul>
                </article>

                <article class="policy-block">
                    <h2>4. Responsabilités</h2>
                    <ul>
                        <li>CREMIN-CAM s’efforce de fournir un service fiable, mais ne peut être tenu responsable des interruptions liées à Internet, à l’appareil ou à des cas de force majeure.</li>
                        <li>Vous acceptez d’utiliser l’application conformément aux informations fournies par CREMIN-CAM et aux consignes de sécurité.</li>
                        <li>Les opérations réalisées via l’application doivent respecter les règles applicables à votre compte et aux services utilisés.</li>
                    </ul>
                </article>
            </div>

            <div class="policy-contact">
                <h2>Contact</h2>
                <p>
                    Pour toute question liée à SOLO by CREMIN-CAM, aux conditions d’utilisation ou à l’assistance technique,
                    contactez l’équipe de développement à <a href="mailto:developper@cremincam.com">developper@cremincam.com</a>.
                </p>
            </div>
        </section>
    </main>
</div>
@endsection
