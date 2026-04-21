<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'CREMIN-CAM')</title>
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('icon/apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('icon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icon/favicon-16x16.png') }}">
        <link rel="shortcut icon" href="{{ asset('logo/favicon.ico') }}">
        <link rel="manifest" href="{{ asset('icon/manifest.json') }}">
        <meta name="msapplication-config" content="{{ asset('icon/browserconfig.xml') }}">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=lato:400,500,700,900|playfair-display:600,700,800&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/cremin_cam_homepage_v2.css') }}?v={{ filemtime(public_path('css/cremin_cam_homepage_v2.css')) }}">
        @stack('styles')
        <style>
            :root {
                --font-body: "Lato", Arial, Helvetica, sans-serif;
                --font-display: "Playfair Display", Georgia, "Times New Roman", serif;
            }

            body,
            button,
            input,
            select,
            textarea {
                font-family: var(--font-body);
            }

            h1,
            h2,
            h3,
            .hero h1,
            .section-title,
            .stitle,
            .cta-title,
            .cta-copy h2,
            .account-name,
            .cat-title-text {
                font-family: var(--font-display);
                letter-spacing: -0.02em;
            }

            .nav-links a,
            .nav-dropdown-toggle,
            .nav-cta,
            .topbar-link,
            .button-primary,
            .button-secondary,
            .btn-primary,
            .btn-secondary,
            .btn-outline,
            .btn-accent,
            .cta-primary,
            .cta-secondary {
                font-family: var(--font-body);
            }
        </style>
    </head>
    <body>
        @include('partials.header')

        @yield('content')

        @include('partials.footer')

        @stack('scripts')
    </body>
</html>
