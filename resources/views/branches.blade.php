@extends('layouts.app')

@section('title', 'CREMIN-CAM | Nos Agences')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/cremin_cam_branches.css') }}">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="">
@endpush

@section('content')
@php
    $branchSummaries = [
        ['region' => 'centre', 'type' => 'agency'],
        ['region' => 'littoral', 'type' => 'agency'],
        ['region' => 'littoral', 'type' => 'guichet'],
        ['region' => 'nord', 'type' => 'agency'],
        ['region' => 'extreme-nord', 'type' => 'guichet'],
    ];

    $regionCounts = [];
    $mainAgencyCount = 0;
    $guichetCount = 0;

    foreach ($branchSummaries as $branchSummary) {
        $regionKey = $branchSummary['region'];

        $regionCounts[$regionKey] = ($regionCounts[$regionKey] ?? 0) + 1;

        if ($branchSummary['type'] === 'agency') {
            $mainAgencyCount++;
        } else {
            $guichetCount++;
        }
    }

    $totalBranchCount = count($branchSummaries);
@endphp
<h1 class="sr-only">Nos Agences - CREMIN-CAM Microfinance Cameroun</h1>

<div class="stripe"></div>

<main class="branches-page">
    <section class="branches-hero">
        <div class="branches-hero-inner reveal">
            <div>
                <div class="hero-tag">Nos Agences &amp; Guichets</div>
                <h1>Toujours proche<br>de <span>chez vous</span></h1>
                <p class="hero-sub">
                    Un réseau d'agences et de guichets déployé sur 4 régions du Cameroun pour
                    vous offrir un accès simple, rapide et humain à tous nos services financiers.
                </p>
                <div class="hero-stats">
                    <div class="hstat">
                        <div class="hstat-num">{{ $mainAgencyCount }}<sup>+</sup></div>
                        <div class="hstat-label">Agences principales</div>
                    </div>
                    <div class="hstat">
                        <div class="hstat-num">{{ $guichetCount }}<sup>+</sup></div>
                        <div class="hstat-label">Guichets de proximité</div>
                    </div>
                    <div class="hstat">
                        <div class="hstat-num">4</div>
                        <div class="hstat-label">Régions couvertes</div>
                    </div>
                </div>
            </div>

            <div class="hero-badges">
                <div class="hbadge">
                    <div class="hbadge-icon blue">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                            <circle cx="12" cy="10" r="3" />
                        </svg>
                    </div>
                    <div>
                        <div class="hbadge-title">Agence Yaoundé</div>
                        <div class="hbadge-sub">Siège - Centre</div>
                    </div>
                </div>
                <div class="hbadge">
                    <div class="hbadge-icon orange">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                            <circle cx="12" cy="10" r="3" />
                        </svg>
                    </div>
                    <div>
                        <div class="hbadge-title">Agence Douala</div>
                        <div class="hbadge-sub">Littoral</div>
                    </div>
                </div>
                <div class="hbadge">
                    <div class="hbadge-icon blue">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                            <circle cx="12" cy="10" r="3" />
                        </svg>
                    </div>
                    <div>
                        <div class="hbadge-title">Agence Garoua</div>
                        <div class="hbadge-sub">Nord</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="region-nav">
        <div class="region-nav-in">
            <button class="rtab active" type="button" data-region="all">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <circle cx="12" cy="12" r="10" />
                    <line x1="2" y1="12" x2="22" y2="12" />
                    <path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10A15.3 15.3 0 0112 2z" />
                </svg>
                Toutes les régions <span class="rtab-count">{{ $totalBranchCount }}</span>
            </button>
            <button class="rtab" type="button" data-region="centre">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                </svg>
                Centre <span class="rtab-count">{{ $regionCounts['centre'] ?? 0 }}</span>
            </button>
            <button class="rtab" type="button" data-region="littoral">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                </svg>
                Littoral <span class="rtab-count">{{ $regionCounts['littoral'] ?? 0 }}</span>
            </button>
            <button class="rtab" type="button" data-region="nord">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                </svg>
                Nord <span class="rtab-count">{{ $regionCounts['nord'] ?? 0 }}</span>
            </button>
            <button class="rtab" type="button" data-region="extreme-nord">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                </svg>
                Extrême-Nord <span class="rtab-count">{{ $regionCounts['extreme-nord'] ?? 0 }}</span>
            </button>
        </div>
    </section>

    <section class="main-layout">
        <div class="map-wrap reveal">
            <div class="map-card">
                <div class="map-title">Réseau CREMIN-CAM</div>
                <div class="map-sub">Carte du Cameroun - présence nationale CREMIN-CAM</div>
                <div class="map-stage">
                    <div class="map-real-wrap" hidden>
                        <div id="branch-network-map" class="branch-leaflet-map" aria-label="Carte interactive du réseau CREMIN-CAM"></div>
                    </div>
                    <div class="map-svg-wrap">
                        <div class="map-zoom-controls" aria-label="Controles de zoom de la carte">
                            <button type="button" class="map-zoom-btn" data-map-zoom="in" aria-label="Zoom avant">+</button>
                            <button type="button" class="map-zoom-btn" data-map-zoom="out" aria-label="Zoom arriere">-</button>
                            <button type="button" class="map-zoom-btn is-reset" data-map-zoom="reset">100%</button>
                        </div>
                        <div class="map-zoom-viewport" data-map-viewport>
                            <div class="map-zoom-surface" data-map-surface>
                                <img src="{{ asset('branch/cm.svg') }}" alt="Carte du Cameroun" class="cm-map-base">
                                <div class="map-overlay" aria-hidden="true">
                                    <div class="map-marker map-marker-primary" data-city="yaounde" style="left: 46.8%; top: 70.9%;">
                                        <span class="marker-pulse"></span>
                                        <span class="marker-core"></span>
                                        <span class="marker-label">Yaounde <small>Siege</small></span>
                                    </div>
                                    <div class="map-marker map-marker-orange" data-city="douala" style="left: 33%; top: 75.8%;">
                                        <span class="marker-pulse"></span>
                                        <span class="marker-core"></span>
                                        <span class="marker-label">Douala <small>Littoral</small></span>
                                    </div>
                                    <div class="map-marker map-marker-orange map-marker-small" data-city="nkongsamba" style="left: 31.2%; top: 71.5%;">
                                        <span class="marker-pulse"></span>
                                        <span class="marker-core"></span>
                                        <span class="marker-label">Nkongsamba <small>Guichet</small></span>
                                    </div>
                                    <div class="map-marker map-marker-primary" data-city="garoua" style="left: 62%; top: 41.4%;">
                                        <span class="marker-pulse"></span>
                                        <span class="marker-core"></span>
                                        <span class="marker-label">Garoua <small>Nord</small></span>
                                    </div>
                                    <div class="map-marker map-marker-primary map-marker-small" data-city="maroua" style="left: 66.3%; top: 24.1%;">
                                        <span class="marker-pulse"></span>
                                        <span class="marker-core"></span>
                                        <span class="marker-label">Maroua <small>Guichet</small></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @verbatim
                        <svg viewBox="0 0 0 0" width="0" height="0" aria-hidden="true" focusable="false" style="position:absolute">
                            <defs>
                                <filter id="shadow" x="-20%" y="-20%" width="140%" height="140%">
                                    <feDropShadow dx="0" dy="2" stdDeviation="4" flood-color="rgba(26,95,168,0.12)" />
                                </filter>
                            </defs>
                            <path
                                d="M 95 30 L 175 20 L 210 35 L 230 55 L 240 80 L 235 105 L 250 120 L 255 145 L 245 165 L 250 185 L 260 200 L 255 225 L 240 240 L 235 265 L 220 280 L 210 300 L 215 320 L 200 340 L 185 360 L 170 375 L 150 385 L 130 390 L 110 378 L 95 360 L 75 348 L 60 330 L 55 310 L 50 290 L 60 270 L 55 250 L 45 230 L 50 210 L 65 195 L 70 175 L 60 155 L 55 135 L 65 115 L 70 90 L 80 65 Z"
                                fill="#E8F1FB"
                                stroke="#B8CDE8"
                                stroke-width="1.5"
                                filter="url(#shadow)" />
                            <ellipse cx="130" cy="275" rx="55" ry="45" fill="rgba(26,95,168,0.15)" />
                            <ellipse cx="88" cy="300" rx="38" ry="32" fill="rgba(245,160,32,0.15)" />
                            <ellipse cx="165" cy="165" rx="55" ry="48" fill="rgba(26,95,168,0.1)" />
                            <ellipse cx="175" cy="75" rx="55" ry="42" fill="rgba(26,95,168,0.08)" />
                            <text x="130" y="155" text-anchor="middle" font-size="9" fill="#888" font-family="Arial" font-weight="700" letter-spacing="1">ADAMAOUA</text>
                            <text x="167" y="100" text-anchor="middle" font-size="9" fill="#888" font-family="Arial" font-weight="700" letter-spacing="1">NORD</text>
                            <text x="175" y="52" text-anchor="middle" font-size="9" fill="#888" font-family="Arial" font-weight="700" letter-spacing="1">EXT. NORD</text>
                            <text x="118" y="310" text-anchor="middle" font-size="9" fill="#888" font-family="Arial" font-weight="700" letter-spacing="1">CENTRE</text>
                            <text x="75" y="300" text-anchor="middle" font-size="8.5" fill="#888" font-family="Arial" font-weight="700" letter-spacing=".5">LITTORAL</text>
                            <text x="78" y="360" text-anchor="middle" font-size="8.5" fill="#888" font-family="Arial" font-weight="700" letter-spacing=".5">SUD</text>
                            <text x="200" y="330" text-anchor="middle" font-size="8.5" fill="#888" font-family="Arial" font-weight="700" letter-spacing=".5">EST</text>
                            <g class="map-pin" data-city="yaounde">
                                <circle cx="132" cy="290" r="14" fill="#1A5FA8" opacity=".15" />
                                <circle cx="132" cy="290" r="9" fill="#1A5FA8" />
                                <circle cx="132" cy="290" r="4" fill="#fff" />
                                <text x="148" y="286" font-size="10" fill="#1A5FA8" font-family="Arial" font-weight="700">Yaoundé</text>
                                <text x="148" y="297" font-size="9" fill="#888" font-family="Arial">Siège</text>
                            </g>
                            <g class="map-pin" data-city="douala">
                                <circle cx="78" cy="306" r="12" fill="#F5A020" opacity=".15" />
                                <circle cx="78" cy="306" r="8" fill="#F5A020" />
                                <circle cx="78" cy="306" r="3.5" fill="#fff" />
                                <text x="30" y="300" font-size="10" fill="#F5A020" font-family="Arial" font-weight="700">Douala</text>
                                <text x="36" y="311" font-size="9" fill="#888" font-family="Arial">Littoral</text>
                            </g>
                            <g class="map-pin" data-city="nkongsamba">
                                <circle cx="80" cy="270" r="7" fill="#F5A020" opacity=".3" />
                                <circle cx="80" cy="270" r="5" fill="#F5A020" />
                                <circle cx="80" cy="270" r="2" fill="#fff" />
                                <text x="88" y="268" font-size="9" fill="#F5A020" font-family="Arial" font-weight="700">Nkongsamba</text>
                                <text x="88" y="278" font-size="8" fill="#aaa" font-family="Arial">Guichet</text>
                            </g>
                            <g class="map-pin" data-city="garoua">
                                <circle cx="170" cy="168" r="12" fill="#1A5FA8" opacity=".15" />
                                <circle cx="170" cy="168" r="8" fill="#1A5FA8" />
                                <circle cx="170" cy="168" r="3.5" fill="#fff" />
                                <text x="182" y="164" font-size="10" fill="#1A5FA8" font-family="Arial" font-weight="700">Garoua</text>
                                <text x="182" y="175" font-size="9" fill="#888" font-family="Arial">Nord</text>
                            </g>
                            <g class="map-pin" data-city="maroua">
                                <circle cx="178" cy="72" r="7" fill="#1A5FA8" opacity=".2" />
                                <circle cx="178" cy="72" r="5" fill="#1A5FA8" />
                                <circle cx="178" cy="72" r="2" fill="#fff" />
                                <text x="186" y="70" font-size="9" fill="#1A5FA8" font-family="Arial" font-weight="700">Maroua</text>
                                <text x="186" y="80" font-size="8" fill="#aaa" font-family="Arial">Guichet</text>
                            </g>
                        </svg>
                        @endverbatim
                    </div>
                    <div class="map-info-panel" id="map-info-panel" hidden aria-live="polite">
                        <button type="button" class="map-info-close" id="map-info-close" aria-label="Fermer les informations">×</button>
                        <div class="map-info-badge" id="map-info-badge"></div>
                        <h3 class="map-info-title" id="map-info-title"></h3>
                        <div class="map-info-meta" id="map-info-meta"></div>
                        <div class="map-info-list">
                            <div class="map-info-row">
                                <span>Adresse</span>
                                <strong id="map-info-address"></strong>
                            </div>
                            <div class="map-info-row">
                                <span>Téléphone</span>
                                <strong id="map-info-phone"></strong>
                            </div>
                            <div class="map-info-row">
                                <span>Email</span>
                                <strong id="map-info-email"></strong>
                            </div>
                            <div class="map-info-row">
                                <span>Services</span>
                                <strong id="map-info-services"></strong>
                            </div>
                        </div>
                        <a href="#" class="map-info-link" id="map-info-link" target="_blank" rel="noopener noreferrer">Voir l'itinéraire</a>
                    </div>
                </div>
                <div class="map-real-note" hidden>
                    Points couverts : Yaounde, Douala, Nkongsamba, Garoua et Maroua. Zoomez, dézoomez et cliquez sur les marqueurs pour voir chaque point.
                </div>
                <div class="map-legend">
                    <div class="map-leg-item">
                        <div class="map-leg-dot primary"></div>Agence principale
                    </div>
                    <div class="map-leg-item">
                        <div class="map-leg-dot orange"></div>Agence Littoral
                    </div>
                    <div class="map-leg-item">
                        <div class="map-leg-dot muted"></div>Guichet
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="find-section">
        <div class="find-in">
            <div class="reveal">
                <div class="mini-tag">Nous rejoindre</div>
                <div class="find-title">Plusieurs façons<br>de nous <span>contacter</span></div>
                <p class="find-copy">Vous préférez appeler, écrire ou vous déplacer - nous sommes disponibles sur tous les canaux pour vous accompagner.</p>
                <div class="find-ways">
                    <div class="find-way">
                        <div class="fw-icon"><svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 8.81a19.79 19.79 0 01-3.07-8.67A2 2 0 012 0h3a2 2 0 012 1.72c.13.96.36 1.9.7 2.81a2 2 0 01-.45 2.11L6.91 7.91a16 16 0 006.18 6.18l1.27-1.27a2 2 0 012.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0122 14.92z" />
                            </svg></div>
                        <div>
                            <div class="fw-title">Par téléphone</div>
                            <div class="fw-desc">Appelez le <strong>(+237) 222 23 53 80</strong> ou le <strong>(+237) 656 85 12 62</strong> pendant les heures d'ouverture.</div>
                        </div>
                    </div>
                    <div class="find-way">
                        <div class="fw-icon"><svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                                <polyline points="22,6 12,13 2,6" />
                            </svg></div>
                        <div>
                            <div class="fw-title">Par email</div>
                            <div class="fw-desc">Écrivez-nous à <strong>info.cremincam@cremincam.com</strong> - réponse sous 24h ouvrables.</div>
                        </div>
                    </div>
                    <div class="find-way">
                        <div class="fw-icon"><svg viewBox="0 0 24 24" aria-hidden="true">
                                <rect x="5" y="2" width="14" height="20" rx="2" />
                                <path d="M12 18h.01" />
                            </svg></div>
                        <div>
                            <div class="fw-title">Via l'application SOLO</div>
                            <div class="fw-desc">Gérez tout depuis votre smartphone - disponible sur Android, sans file d'attente.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="find-side-card reveal d1">
                <div class="find-side-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--blue)" stroke-width="1.8" aria-hidden="true">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                        <circle cx="12" cy="10" r="3" />
                    </svg></div>
                <div class="find-side-title">Trouver l'agence<br>la plus proche</div>
                <p class="find-side-copy">Utilisez les onglets ci-dessus pour filtrer par région et trouver l'agence ou le guichet le plus proche de chez vous.</p>
                <div class="hours-box">
                    <div class="hours-title">Horaires généraux</div>
                    <div class="hours-line"><span>Lundi - Vendredi</span><strong>8h00 - 16h30</strong></div>
                    <div class="hours-line"><span>Samedi</span><strong>9h30 - 13h00</strong></div>
                    <div class="hours-line closed"><span>Dimanche &amp; Fériés</span><strong>Fermé</strong></div>
                </div>
                <a href="tel:+237222235380" class="call-now">Appeler maintenant</a>
            </div>
        </div>
    </section>

    <section class="solo-band">
        <div class="solo-in">
            <div class="solo-content reveal">
                <h2>Pas le temps de vous déplacer ?<br><span>SOLO est fait pour vous</span></h2>
                <p>L'application mobile SOLO by CREMIN-CAM vous donne accès à tous vos services financiers sans bouger de chez vous - virements, consultation de solde, épargne et plus encore.</p>
            </div>
            <div class="solo-btns reveal d1">
                <a href="https://play.google.com/store/apps/details?id=com.cagecfi.pmobile_cremincam_client&hl=fr" target="_blank" rel="noopener noreferrer" class="btn-orange-s">Télécharger SOLO</a>
                <a href="{{ route('services') }}" class="btn-outline-ws">En savoir plus</a>
            </div>
        </div>
    </section>
</main>
@endsection

@push('scripts')
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
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
            threshold: 0.07
        });

        document.querySelectorAll('.branches-page .reveal').forEach((element) => revealObserver.observe(element));

        const tabs = document.querySelectorAll('.branches-page .rtab');
        const branchMapElement = document.getElementById('branch-network-map');
        const mapRealWrap = document.querySelector('.branches-page .map-real-wrap');
        const mapRealNote = document.querySelector('.branches-page .map-real-note');
        const mapSvgWrap = document.querySelector('.branches-page .map-svg-wrap');
        const mapViewport = document.querySelector('.branches-page [data-map-viewport]');
        const mapSurface = document.querySelector('.branches-page [data-map-surface]');
        const zoomButtons = document.querySelectorAll('.branches-page [data-map-zoom]');
        const fallbackMarkers = document.querySelectorAll('.branches-page .map-marker[data-city]');
        const mapInfoPanel = document.getElementById('map-info-panel');
        const mapInfoClose = document.getElementById('map-info-close');
        const mapInfoBadge = document.getElementById('map-info-badge');
        const mapInfoTitle = document.getElementById('map-info-title');
        const mapInfoMeta = document.getElementById('map-info-meta');
        const mapInfoAddress = document.getElementById('map-info-address');
        const mapInfoPhone = document.getElementById('map-info-phone');
        const mapInfoEmail = document.getElementById('map-info-email');
        const mapInfoServices = document.getElementById('map-info-services');
        const mapInfoLink = document.getElementById('map-info-link');

        const branchDetails = {
            yaounde: {
                region: 'centre',
                title: 'Agence de Yaoundé',
                badge: 'Agence principale · Siège',
                meta: 'Centre',
                address: 'Face Camp Sic Messa, Immeuble de la Solidarité, Yaoundé',
                phone: '(+237) 656 85 12 62 / (+237) 222 23 53 80',
                email: 'info.cremincamyaounde@cremincam.com',
                services: 'Tous les services, Carte Visa, Crédits',
                directions: 'https://maps.google.com/?q=Face+Camp+Sic+Messa+Immeuble+de+la+Solidarite+Yaounde+Cameroun'
            },
            douala: {
                region: 'littoral',
                title: 'Agence de Douala',
                badge: 'Agence principale',
                meta: 'Littoral',
                address: 'Akwa, face Restaurant White House, Douala',
                phone: '(+237) 655 71 73 86',
                email: 'info.cremincamdouala@cremincam.com',
                services: 'Tous les services, Transferts internationaux',
                directions: 'https://maps.google.com/?q=Akwa+face+Restaurant+White+House+Douala+Cameroun'
            },
            nkongsamba: {
                region: 'littoral',
                title: 'Guichet de Nkongsamba',
                badge: 'Guichet de proximité',
                meta: 'Littoral',
                address: 'Face Congelcam, Immeuble La Sabine, Nkongsamba',
                phone: '(+237) 699 17 16 08',
                email: 'Renseignements en agence',
                services: 'Dépôts, retraits, Épargne, Transferts',
                directions: 'https://maps.google.com/?q=Face+Congelcam+Immeuble+La+Sabine+Nkongsamba+Cameroun'
            },
            garoua: {
                region: 'nord',
                title: 'Agence de Garoua',
                badge: 'Agence principale',
                meta: 'Nord',
                address: 'Avenue des Banques, Face ECOBANK, Garoua',
                phone: '(+237) 699 46 08 81',
                email: 'info.cremincamgaroua@cremincam.com',
                services: 'Tous les services, Financement agricole',
                directions: 'https://maps.google.com/?q=Avenue+des+Banques+face+ECOBANK+Garoua+Cameroun'
            },
            maroua: {
                region: 'extreme-nord',
                title: 'Guichet de Maroua',
                badge: 'Guichet de proximité',
                meta: 'Extrême-Nord',
                address: 'Domaya, Derrière CAMAIR CO, Maroua',
                phone: '(+237) 675 42 75 22',
                email: 'Renseignements en agence',
                services: 'Dépôts, retraits, Épargne, Renseignements',
                directions: 'https://maps.google.com/?q=Domaya+Derriere+CAMAIR+CO+Maroua+Cameroun'
            }
        };

        const showLeafletMap = () => {
            if (mapRealWrap) {
                mapRealWrap.hidden = false;
            }

            if (mapRealNote) {
                mapRealNote.hidden = false;
            }

            if (mapSvgWrap) {
                mapSvgWrap.hidden = true;
            }
        };

        const showFallbackMap = () => {
            if (mapRealWrap) {
                mapRealWrap.hidden = true;
            }

            if (mapRealNote) {
                mapRealNote.hidden = true;
            }

            if (mapSvgWrap) {
                mapSvgWrap.hidden = false;
            }
        };

        const closeMapInfo = () => {
            if (mapInfoPanel) {
                mapInfoPanel.hidden = true;
            }
        };

        const openMapInfo = (key) => {
            const details = branchDetails[key];

            if (!details || !mapInfoPanel) {
                return;
            }

            mapInfoBadge.textContent = details.badge;
            mapInfoTitle.textContent = details.title;
            mapInfoMeta.textContent = details.meta;
            mapInfoAddress.textContent = details.address;
            mapInfoPhone.textContent = details.phone;
            mapInfoEmail.textContent = details.email;
            mapInfoServices.textContent = details.services;
            mapInfoLink.href = details.directions;
            mapInfoPanel.hidden = false;
        };

        const showRegion = (region) => {
            tabs.forEach((item) => {
                item.classList.toggle('active', item.dataset.region === region);
            });
        };

        const agencyMatchers = {
            yaounde: {
                region: 'centre',
                match: 'Agence de Yaound'
            },
            douala: {
                region: 'littoral',
                match: 'Agence de Douala'
            },
            nkongsamba: {
                region: 'littoral',
                match: 'Guichet de Nkongsamba'
            },
            garoua: {
                region: 'nord',
                match: 'Agence de Garoua'
            },
            maroua: {
                region: 'extreme-nord',
                match: 'Guichet de Maroua'
            }
        };

        const focusAgencyDetails = (key, options = {}) => {
            const config = agencyMatchers[key];
            if (!config) {
                return;
            }

            if (options.openInfo !== false) {
                openMapInfo(key);
            }

            showRegion(config.region);
        };

        if (branchMapElement && window.L) {
            showLeafletMap();

            const branchMap = L.map(branchMapElement, {
                scrollWheelZoom: true
            });

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 18,
                attribution: '&copy; OpenStreetMap contributors'
            }).addTo(branchMap);

            const locations = [
                { key: 'yaounde', name: 'Yaoundé', type: 'Siège', coords: [3.8714506463807026, 11.505878542695866], color: 'primary' },
                { key: 'douala', name: 'Douala', type: 'Agence', coords: [4.054097746918288, 9.698676140645688], color: 'orange' },
                { key: 'nkongsamba', name: 'Nkongsamba', type: 'Guichet', coords: [4.956439151333082, 9.938374045082934], color: 'orange' },
                { key: 'garoua', name: 'Garoua', type: 'Agence', coords: [9.305032917306097, 13.395911367967269], color: 'primary' },
                { key: 'maroua', name: 'Maroua', type: 'Guichet', coords: [10.594745662970833, 14.323432002880338], color: 'primary' }
            ];

            const bounds = [];

            locations.forEach((location) => {
                const icon = L.divIcon({
                    className: `branch-map-pin ${location.color}`,
                    html: '<span></span>',
                    iconSize: [18, 18],
                    iconAnchor: [9, 9]
                });

                L.marker(location.coords, { icon })
                    .addTo(branchMap)
                    .on('click', () => {
                        focusAgencyDetails(location.key, { scroll: false, openInfo: true });
                    });

                bounds.push(location.coords);
            });

            branchMap.fitBounds(bounds, {
                padding: [28, 28]
            });

            window.addEventListener('resize', () => {
                branchMap.invalidateSize();
            });
        } else {
            showFallbackMap();
        }

        fallbackMarkers.forEach((marker) => {
            marker.addEventListener('click', () => {
                focusAgencyDetails(marker.dataset.city, { scroll: false, openInfo: true });
            });
        });

        if (mapInfoClose) {
            mapInfoClose.addEventListener('click', closeMapInfo);
        }

        if (mapInfoLink) {
            mapInfoLink.addEventListener('click', () => {
                closeMapInfo();
            });
        }

        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') {
                closeMapInfo();
            }
        });

        if (mapViewport && mapSurface && zoomButtons.length) {
            const minZoom = 1;
            const maxZoom = 2.5;
            const step = 0.2;
            let zoomLevel = 1;
            let translateX = 0;
            let translateY = 0;
            let isDragging = false;
            let startX = 0;
            let startY = 0;
            let dragStartTranslateX = 0;
            let dragStartTranslateY = 0;

            const clampTranslation = () => {
                const viewportRect = mapViewport.getBoundingClientRect();
                const maxOffsetX = Math.max(0, ((viewportRect.width * zoomLevel) - viewportRect.width) / 2);
                const maxOffsetY = Math.max(0, ((viewportRect.height * zoomLevel) - viewportRect.height) / 2);

                translateX = Math.min(maxOffsetX, Math.max(-maxOffsetX, translateX));
                translateY = Math.min(maxOffsetY, Math.max(-maxOffsetY, translateY));
            };

            const applyZoom = () => {
                if (zoomLevel === 1) {
                    translateX = 0;
                    translateY = 0;
                }

                clampTranslation();
                mapSurface.style.transform = `translate(${translateX}px, ${translateY}px) scale(${zoomLevel})`;
                mapViewport.classList.toggle('is-draggable', zoomLevel > 1);

                const resetButton = document.querySelector('.branches-page [data-map-zoom="reset"]');
                if (resetButton) {
                    resetButton.textContent = `${Math.round(zoomLevel * 100)}%`;
                }
            };

            const getPoint = (event) => {
                if (event.touches && event.touches[0]) {
                    return {
                        x: event.touches[0].clientX,
                        y: event.touches[0].clientY
                    };
                }

                return {
                    x: event.clientX,
                    y: event.clientY
                };
            };

            const stopDragging = () => {
                isDragging = false;
                mapViewport.classList.remove('is-dragging');
            };

            zoomButtons.forEach((button) => {
                button.addEventListener('click', () => {
                    const action = button.dataset.mapZoom;

                    if (action === 'in') {
                        zoomLevel = Math.min(maxZoom, +(zoomLevel + step).toFixed(2));
                    } else if (action === 'out') {
                        zoomLevel = Math.max(minZoom, +(zoomLevel - step).toFixed(2));
                    } else {
                        zoomLevel = 1;
                    }

                    applyZoom();
                });
            });

            mapViewport.addEventListener('mousedown', (event) => {
                if (zoomLevel <= 1) {
                    return;
                }

                isDragging = true;
                mapViewport.classList.add('is-dragging');

                const point = getPoint(event);
                startX = point.x;
                startY = point.y;
                dragStartTranslateX = translateX;
                dragStartTranslateY = translateY;
            });

            mapViewport.addEventListener('touchstart', (event) => {
                if (zoomLevel <= 1) {
                    return;
                }

                event.preventDefault();

                isDragging = true;
                mapViewport.classList.add('is-dragging');

                const point = getPoint(event);
                startX = point.x;
                startY = point.y;
                dragStartTranslateX = translateX;
                dragStartTranslateY = translateY;
            }, {
                passive: false
            });

            window.addEventListener('mousemove', (event) => {
                if (!isDragging) {
                    return;
                }

                const point = getPoint(event);
                translateX = dragStartTranslateX + (point.x - startX);
                translateY = dragStartTranslateY + (point.y - startY);
                clampTranslation();
                mapSurface.style.transform = `translate(${translateX}px, ${translateY}px) scale(${zoomLevel})`;
            });

            window.addEventListener('touchmove', (event) => {
                if (!isDragging) {
                    return;
                }

                event.preventDefault();

                const point = getPoint(event);
                translateX = dragStartTranslateX + (point.x - startX);
                translateY = dragStartTranslateY + (point.y - startY);
                clampTranslation();
                mapSurface.style.transform = `translate(${translateX}px, ${translateY}px) scale(${zoomLevel})`;
            }, {
                passive: false
            });

            window.addEventListener('mouseup', stopDragging);
            window.addEventListener('touchend', stopDragging);
            window.addEventListener('touchcancel', stopDragging);

            mapViewport.addEventListener('wheel', (event) => {
                event.preventDefault();

                if (event.deltaY < 0) {
                    zoomLevel = Math.min(maxZoom, +(zoomLevel + step).toFixed(2));
                } else {
                    zoomLevel = Math.max(minZoom, +(zoomLevel - step).toFixed(2));
                }

                applyZoom();
            }, {
                passive: false
            });

            window.addEventListener('resize', applyZoom);
            applyZoom();
        }

        tabs.forEach((tab) => {
            tab.addEventListener('click', () => {
                showRegion(tab.dataset.region);
            });
        });
    });
</script>
@endpush
