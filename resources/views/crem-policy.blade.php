@extends('layouts.app')

@section('title', 'CREMIN-CAM | Conditions d\'utilisation SOLO')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/cremin_cam_policy.css') }}">
@endpush

@section('content')
<div class="policy-page">
    <main class="policy-main">
        <section class="policy-card">
            <div class="policy-intro">
                <h1>Conditions d'utilisation SOLO</h1>
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
                    Pour toute question sur les conditions d’utilisation, contactez l’équipe de développement à
                    <a href="mailto:developper@cremincam.com">developper@cremincam.com</a>.
                </p>
            </div>
        </section>
    </main>
</div>
@endsection
