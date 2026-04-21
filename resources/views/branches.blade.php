@extends('layouts.app')

@section('title', 'CREMIN-CAM | Nos Agences')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cremin_cam_branches.css') }}">
@endpush

@section('content')
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
                            <div class="hstat-num">3<sup>+</sup></div>
                            <div class="hstat-label">Agences principales</div>
                        </div>
                        <div class="hstat">
                            <div class="hstat-num">2<sup>+</sup></div>
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
                    Toutes les régions <span class="rtab-count">5</span>
                </button>
                <button class="rtab" type="button" data-region="centre">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                    </svg>
                    Centre <span class="rtab-count">1</span>
                </button>
                <button class="rtab" type="button" data-region="littoral">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                    </svg>
                    Littoral <span class="rtab-count">2</span>
                </button>
                <button class="rtab" type="button" data-region="nord">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                    </svg>
                    Nord <span class="rtab-count">1</span>
                </button>
                <button class="rtab" type="button" data-region="extreme-nord">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                    </svg>
                    Extrême-Nord <span class="rtab-count">1</span>
                </button>
            </div>
        </section>

        <section class="main-layout">
            <div class="map-wrap reveal">
                <div class="map-card">
                    <div class="map-title">Réseau CREMIN-CAM</div>
                    <div class="map-sub">Présence nationale au Cameroun</div>
                    <div class="map-svg-wrap">
                        <svg viewBox="0 0 320 420" width="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
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
                                filter="url(#shadow)"
                            />
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
                    </div>
                    <div class="map-legend">
                        <div class="map-leg-item"><div class="map-leg-dot primary"></div>Agence principale</div>
                        <div class="map-leg-item"><div class="map-leg-dot orange"></div>Agence Littoral</div>
                        <div class="map-leg-item"><div class="map-leg-dot muted"></div>Guichet</div>
                    </div>
                </div>
            </div>

            <div class="agencies-content">
                <div class="region-section active reveal" id="sec-all">
                    <div class="region-block" data-region-block="centre">
                        <div class="region-header">
                            <div class="region-name">Région Centre</div>
                            <div class="region-title">Agence de Yaoundé</div>
                            <p class="region-desc">Siège social de CREMIN-CAM - notre agence principale au coeur de la capitale camerounaise, point de référence pour tous nos services.</p>
                        </div>
                        <div class="agency-cards">
                            <div class="agency-card">
                                <div class="agency-card-header">
                                    <div>
                                        <div class="agency-type-badge"><span aria-hidden="true">&#9679;</span> Agence principale · Siège</div>
                                        <div class="agency-name">Agence de Yaoundé</div>
                                    </div>
                                    <div class="agency-status"><span class="status-dot"></span>Ouverte</div>
                                </div>
                                <div class="agency-card-body">
                                    <div class="agency-info-grid">
                                        <div class="ainfo">
                                            <div class="ainfo-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
                                            <div>
                                                <div class="ainfo-label">Adresse</div>
                                                <div class="ainfo-val">Face Camp SIC<br>Messa-Mokolo, Yaoundé</div>
                                            </div>
                                        </div>
                                        <div class="ainfo">
                                            <div class="ainfo-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 8.81"/></svg></div>
                                            <div>
                                                <div class="ainfo-label">Téléphone</div>
                                                <div class="ainfo-val"><a href="tel:+237656851262">(+237) 656 85 12 62</a></div>
                                            </div>
                                        </div>
                                        <div class="ainfo">
                                            <div class="ainfo-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div>
                                            <div>
                                                <div class="ainfo-label">Email</div>
                                                <div class="ainfo-val"><a href="mailto:info.cremincamyaounde@cremincam.com">info.cremincamyaounde<br>@cremincam.com</a></div>
                                            </div>
                                        </div>
                                        <div class="ainfo">
                                            <div class="ainfo-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg></div>
                                            <div>
                                                <div class="ainfo-label">Services disponibles</div>
                                                <div class="ainfo-val">Tous les services<br>+ Carte Visa + Crédits</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="agency-card-footer">
                                    <div class="hours-row"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>Lun-Ven : 8h-17h | Sam : 8h-13h</div>
                                    <a href="https://maps.google.com/?q=Messa-Mokolo+Yaounde+Cameroun" target="_blank" rel="noopener noreferrer" class="btn-itineraire"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10"/></svg>Itinéraire</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="region-block" data-region-block="littoral">
                        <div class="region-header">
                            <div class="region-name">Région Littoral</div>
                            <div class="region-title">Douala &amp; Nkongsamba</div>
                            <p class="region-desc">Deux points de présence dans la capitale économique et dans la région du Moungo pour servir au mieux nos membres de l'Ouest.</p>
                        </div>
                        <div class="agency-cards">
                            <div class="agency-card">
                                <div class="agency-card-header orange-header">
                                    <div>
                                        <div class="agency-type-badge light-badge"><span aria-hidden="true">&#9679;</span> Agence principale</div>
                                        <div class="agency-name">Agence de Douala</div>
                                    </div>
                                    <div class="agency-status"><span class="status-dot"></span>Ouverte</div>
                                </div>
                                <div class="agency-card-body">
                                    <div class="agency-info-grid">
                                        <div class="ainfo">
                                            <div class="ainfo-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
                                            <div>
                                                <div class="ainfo-label">Adresse</div>
                                                <div class="ainfo-val">Akwa, Douala<br>Région du Littoral</div>
                                            </div>
                                        </div>
                                        <div class="ainfo">
                                            <div class="ainfo-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 8.81"/></svg></div>
                                            <div>
                                                <div class="ainfo-label">Téléphone</div>
                                                <div class="ainfo-val"><a href="tel:+237655717386">(+237) 655 71 73 86</a></div>
                                            </div>
                                        </div>
                                        <div class="ainfo">
                                            <div class="ainfo-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div>
                                            <div>
                                                <div class="ainfo-label">Email</div>
                                                <div class="ainfo-val"><a href="mailto:info.cremincamdouala@cremincam.com">info.cremincamdouala<br>@cremincam.com</a></div>
                                            </div>
                                        </div>
                                        <div class="ainfo">
                                            <div class="ainfo-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg></div>
                                            <div>
                                                <div class="ainfo-label">Services disponibles</div>
                                                <div class="ainfo-val">Tous les services<br>+ Transferts internationaux</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="agency-card-footer">
                                    <div class="hours-row"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>Lun-Ven : 8h-17h | Sam : 8h-13h</div>
                                    <a href="https://maps.google.com/?q=Akwa+Douala+Cameroun" target="_blank" rel="noopener noreferrer" class="btn-itineraire"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10"/></svg>Itinéraire</a>
                                </div>
                            </div>

                            <div class="agency-card">
                                <div class="agency-card-header muted-header">
                                    <div>
                                        <div class="agency-type-badge guichet"><span aria-hidden="true">&#9670;</span> Guichet de proximité</div>
                                        <div class="agency-name">Guichet de Nkongsamba</div>
                                    </div>
                                    <div class="agency-status"><span class="status-dot"></span>Ouvert</div>
                                </div>
                                <div class="agency-card-body">
                                    <div class="agency-info-grid">
                                        <div class="ainfo">
                                            <div class="ainfo-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
                                            <div>
                                                <div class="ainfo-label">Adresse</div>
                                                <div class="ainfo-val">Face Congelcam<br>Immeuble La Sabine, Nkongsamba</div>
                                            </div>
                                        </div>
                                        <div class="ainfo">
                                            <div class="ainfo-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 8.81"/></svg></div>
                                            <div>
                                                <div class="ainfo-label">Téléphone</div>
                                                <div class="ainfo-val"><a href="tel:+237655717386">(+237) 655 71 73 86</a></div>
                                            </div>
                                        </div>
                                        <div class="ainfo">
                                            <div class="ainfo-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg></div>
                                            <div>
                                                <div class="ainfo-label">Services disponibles</div>
                                                <div class="ainfo-val">Dépôts, retraits<br>Épargne, Transferts</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="agency-card-footer">
                                    <div class="hours-row"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>Lun-Ven : 8h-16h | Sam : 8h-12h</div>
                                    <a href="https://maps.google.com/?q=Nkongsamba+Cameroun" target="_blank" rel="noopener noreferrer" class="btn-itineraire"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10"/></svg>Itinéraire</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="region-block" data-region-block="nord">
                        <div class="region-header">
                            <div class="region-name">Région Nord</div>
                            <div class="region-title">Agence de Garoua</div>
                            <p class="region-desc">Au coeur du Grand Nord, notre agence de Garoua accompagne les membres de la région dans tous leurs projets financiers.</p>
                        </div>
                        <div class="agency-cards">
                            <div class="agency-card">
                                <div class="agency-card-header">
                                    <div>
                                        <div class="agency-type-badge"><span aria-hidden="true">&#9679;</span> Agence principale</div>
                                        <div class="agency-name">Agence de Garoua</div>
                                    </div>
                                    <div class="agency-status"><span class="status-dot"></span>Ouverte</div>
                                </div>
                                <div class="agency-card-body">
                                    <div class="agency-info-grid">
                                        <div class="ainfo"><div class="ainfo-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="ainfo-label">Adresse</div><div class="ainfo-val">Garoua<br>Région du Nord</div></div></div>
                                        <div class="ainfo"><div class="ainfo-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 8.81"/></svg></div><div><div class="ainfo-label">Téléphone</div><div class="ainfo-val"><a href="tel:+237697046925">(+237) 697 04 69 25</a></div></div></div>
                                        <div class="ainfo"><div class="ainfo-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div><div><div class="ainfo-label">Email</div><div class="ainfo-val"><a href="mailto:info.cremincamgaroua@cremincam.com">info.cremincamgaroua<br>@cremincam.com</a></div></div></div>
                                        <div class="ainfo"><div class="ainfo-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg></div><div><div class="ainfo-label">Services disponibles</div><div class="ainfo-val">Tous les services<br>+ Financement agricole</div></div></div>
                                    </div>
                                </div>
                                <div class="agency-card-footer">
                                    <div class="hours-row"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>Lun-Ven : 8h-17h | Sam : 8h-13h</div>
                                    <a href="https://maps.google.com/?q=Garoua+Cameroun" target="_blank" rel="noopener noreferrer" class="btn-itineraire"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10"/></svg>Itinéraire</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="region-block" data-region-block="extreme-nord">
                        <div class="region-header">
                            <div class="region-name">Région Extrême-Nord</div>
                            <div class="region-title">Guichet de Maroua</div>
                            <p class="region-desc">Un guichet de proximité au carrefour Foyer des Jeunes à Domayo pour desservir les populations de l'Extrême-Nord.</p>
                        </div>
                        <div class="agency-cards">
                            <div class="agency-card">
                                <div class="agency-card-header muted-header">
                                    <div>
                                        <div class="agency-type-badge guichet"><span aria-hidden="true">&#9670;</span> Guichet de proximité</div>
                                        <div class="agency-name">Guichet de Maroua</div>
                                    </div>
                                    <div class="agency-status"><span class="status-dot"></span>Ouvert</div>
                                </div>
                                <div class="agency-card-body">
                                    <div class="agency-info-grid">
                                        <div class="ainfo"><div class="ainfo-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="ainfo-label">Adresse</div><div class="ainfo-val">Domayo, Carrefour<br>Foyer des Jeunes, Maroua</div></div></div>
                                        <div class="ainfo"><div class="ainfo-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 8.81"/></svg></div><div><div class="ainfo-label">Téléphone</div><div class="ainfo-val"><a href="tel:+237675427522">(+237) 675 42 75 22</a></div></div></div>
                                        <div class="ainfo"><div class="ainfo-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg></div><div><div class="ainfo-label">Services disponibles</div><div class="ainfo-val">Dépôts, retraits<br>Épargne, Renseignements</div></div></div>
                                    </div>
                                </div>
                                <div class="agency-card-footer">
                                    <div class="hours-row"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>Lun-Ven : 8h-16h | Sam : 8h-12h</div>
                                    <a href="https://maps.google.com/?q=Maroua+Cameroun" target="_blank" rel="noopener noreferrer" class="btn-itineraire"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10"/></svg>Itinéraire</a>
                                </div>
                            </div>
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
                        <div class="find-way"><div class="fw-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 8.81a19.79 19.79 0 01-3.07-8.67A2 2 0 012 0h3a2 2 0 012 1.72c.13.96.36 1.9.7 2.81a2 2 0 01-.45 2.11L6.91 7.91a16 16 0 006.18 6.18l1.27-1.27a2 2 0 012.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0122 14.92z"/></svg></div><div><div class="fw-title">Par téléphone</div><div class="fw-desc">Appelez le <strong>(+237) 697 04 69 25</strong> - disponible pendant les heures d'ouverture.</div></div></div>
                        <div class="find-way"><div class="fw-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div><div><div class="fw-title">Par email</div><div class="fw-desc">Écrivez-nous à <strong>info.cremincam@cremincam.com</strong> - réponse sous 24h ouvrables.</div></div></div>
                        <div class="find-way"><div class="fw-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg></div><div><div class="fw-title">Via l'application SOLO</div><div class="fw-desc">Gérez tout depuis votre smartphone - disponible sur Android, sans file d'attente.</div></div></div>
                    </div>
                </div>
                <div class="find-side-card reveal d1">
                    <div class="find-side-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--blue)" stroke-width="1.8" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
                    <div class="find-side-title">Trouver l'agence<br>la plus proche</div>
                    <p class="find-side-copy">Utilisez les onglets ci-dessus pour filtrer par région et trouver l'agence ou le guichet le plus proche de chez vous.</p>
                    <div class="hours-box">
                        <div class="hours-title">Horaires généraux</div>
                        <div class="hours-line"><span>Lundi - Vendredi</span><strong>8h00 - 17h00</strong></div>
                        <div class="hours-line"><span>Samedi</span><strong>8h00 - 13h00</strong></div>
                        <div class="hours-line closed"><span>Dimanche &amp; Fériés</span><strong>Fermé</strong></div>
                    </div>
                    <a href="tel:+237697046925" class="call-now">Appeler maintenant</a>
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
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        revealObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.07 });

            document.querySelectorAll('.branches-page .reveal').forEach((element) => revealObserver.observe(element));

            const tabs = document.querySelectorAll('.branches-page .rtab');
            const blocks = document.querySelectorAll('.branches-page [data-region-block]');

            tabs.forEach((tab) => {
                tab.addEventListener('click', () => {
                    const region = tab.dataset.region;

                    tabs.forEach((item) => item.classList.remove('active'));
                    tab.classList.add('active');

                    blocks.forEach((block) => {
                        block.style.display = region === 'all' || block.dataset.regionBlock === region ? '' : 'none';
                    });
                });
            });
        });
    </script>
@endpush
