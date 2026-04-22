@extends('layouts.app')

@section('title', 'CREMIN-CAM | Contacts')

@php
    $destinations = [
        ['name' => 'Direction Generale', 'email' => 'info.cremincam@cremincam.com'],
        ['name' => 'Agence Yaounde', 'email' => 'info.cremincamyaounde@cremincam.com'],
        ['name' => 'Agence Douala', 'email' => 'info.cremincamdouala@cremincam.com'],
        ['name' => 'Agence Garoua', 'email' => 'info.cremincamgaroua@cremincam.com'],
    ];

    $hours = [
        ['day' => 'Lundi', 'hours' => '8h00 - 16h30'],
        ['day' => 'Mardi', 'hours' => '8h00 - 16h30'],
        ['day' => 'Mercredi', 'hours' => '8h00 - 16h30'],
        ['day' => 'Jeudi', 'hours' => '8h00 - 16h30'],
        ['day' => 'Vendredi', 'hours' => '8h00 - 16h30'],
        ['day' => 'Samedi', 'hours' => '9h30 - 13h00'],
        ['day' => 'Dimanche', 'hours' => 'Ferme'],
    ];

    $branches = [
        ['name' => 'Agence Yaounde', 'info' => 'Face Camp Sic Messa, Immeuble de la Solidarite', 'phone' => '(+237) 656 85 12 62', 'href' => 'tel:+237656851262', 'color' => '#1A5FA8'],
        ['name' => 'Agence Douala', 'info' => 'Akwa, face Restaurant White House', 'phone' => '(+237) 655 71 73 86', 'href' => 'tel:+237655717386', 'color' => '#2472C8'],
        ['name' => 'Agence Garoua', 'info' => 'Avenue des Banques face ECOBANK', 'phone' => '(+237) 699 46 08 81', 'href' => 'tel:+237699460881', 'color' => '#0F3D72'],
        ['name' => 'Guichet Nkongsamba', 'info' => 'Face Congelcam, Immeuble La Sabine', 'phone' => '(+237) 699 17 16 08', 'href' => 'tel:+237699171608', 'color' => '#F5A020'],
        ['name' => 'Guichet Maroua', 'info' => 'Domaya, Derriere CAMAIR CO', 'phone' => '(+237) 675 42 75 22', 'href' => 'tel:+237675427522', 'color' => '#F5A020'],
    ];

    $newsletterBenefits = [
        'Actualites et annonces institutionnelles',
        'Nouvelles offres de produits et services',
        'Informations sur les projets immobiliers et agricoles',
        'Mises a jour de l application SOLO',
        'Conseils utiles pour vos demarches',
    ];

    $quickLinks = [
        ['label' => 'Telephone siege', 'value' => '(+237) 222 23 53 80', 'href' => 'tel:+237222235380', 'icon' => 'phone'],
        ['label' => 'Email general', 'value' => 'info.cremincam@cremincam.com', 'href' => 'mailto:info.cremincam@cremincam.com', 'icon' => 'mail'],
        ['label' => 'Adresse du siege', 'value' => 'Face Camp Sic Messa, Immeuble de la Solidarite, Yaounde', 'href' => 'https://maps.google.com/?q=3.8713198576177925,11.505841952453975', 'icon' => 'pin'],
        ['label' => 'Application mobile', 'value' => 'SOLO by CREMIN-CAM', 'href' => 'https://play.google.com/store/apps/details?id=com.cagecfi.pmobile_cremincam_client', 'icon' => 'phone-app'],
    ];

    $responseItems = [
        ['label' => 'Reponse email :', 'value' => 'sous 24h ouvrables', 'color' => '#1E6B45'],
        ['label' => 'Telephone :', 'value' => 'Lun-Ven 8h00-16h30', 'color' => '#1A5FA8'],
        ['label' => 'Accueil en agence :', 'value' => 'Samedi 9h30-13h00', 'color' => '#F5A020'],
        ['label' => 'Canal digital :', 'value' => 'SOLO disponible', 'color' => '#C4C4C4'],
    ];
@endphp

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cremin_cam_contact.css') }}">
@endpush

@section('content')
    <main class="contact-page">
        <div class="contact-stripe"></div>

        <section class="hero">
            <div class="hero-inner reveal">
                <div>
                    <div class="eyebrow">Nous contacter</div>
                    <h1>Parlons de votre<br><span>projet financier</span></h1>
                    <p class="hero-subtitle">Notre equipe est disponible du lundi au samedi pour repondre a vos questions, par telephone, par email ou directement en agence.</p>
                </div>

                <div class="quick-links">
                    @foreach ($quickLinks as $link)
                        <a href="{{ $link['href'] }}" class="quick-link" @if (str_starts_with($link['href'], 'http')) target="_blank" rel="noreferrer" @endif>
                            <div class="icon-box">
                                @if ($link['icon'] === 'phone')
                                    <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 3.07 8.81 2 2 0 0 1 5.09 3h3a2 2 0 0 1 2 1.72"></path></svg>
                                @elseif ($link['icon'] === 'mail')
                                    <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                @elseif ($link['icon'] === 'pin')
                                    <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                @else
                                    <svg viewBox="0 0 24 24"><rect x="5" y="2" width="14" height="20" rx="2"></rect><path d="M12 18h.01"></path></svg>
                                @endif
                            </div>
                            <div>
                                <div class="quick-link-label">{{ $link['label'] }}</div>
                                <div class="quick-link-value">{{ $link['value'] }}</div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="response-bar">
            <div class="response-inner">
                @foreach ($responseItems as $item)
                    <div class="response-item">
                        <span class="response-dot" style="background: {{ $item['color'] }}"></span>
                        <div class="response-copy">
                            <span class="response-label">{{ $item['label'] }}</span>
                            <strong>{{ $item['value'] }}</strong>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <section class="main">
            <div class="reveal">
                <div class="section-tag">Formulaire de contact</div>
                <h2 class="section-title">Envoyez-nous <span>un message</span></h2>
                <p class="section-subtitle">Choisissez l agence ou le service concerne, remplissez le formulaire et nous vous repondrons dans les plus brefs delais.</p>

                <div class="destination-label">Choisissez votre destination <span class="required">*</span></div>
                <div class="destination-grid" id="destination-grid">
                    @foreach ($destinations as $index => $destination)
                        <label class="destination-card {{ $index === 0 ? 'is-selected' : '' }}">
                            <input type="radio" name="destination" value="{{ $destination['email'] }}" {{ $index === 0 ? 'checked' : '' }}>
                            <div class="destination-header">
                                <span class="radio-circle"><span class="radio-dot"></span></span>
                                <span class="destination-name">{{ $destination['name'] }}</span>
                            </div>
                            <div class="destination-email">{{ $destination['email'] }}</div>
                        </label>
                    @endforeach
                </div>

                <form class="contact-form" id="contact-form" novalidate>
                    <div class="row">
                        <div class="field">
                            <label for="contact-name">Nom complet <span class="required">*</span></label>
                            <input id="contact-name" type="text" placeholder="Jean MBARGA" required>
                        </div>
                        <div class="field">
                            <label for="contact-phone">Numero de telephone</label>
                            <input id="contact-phone" type="tel" placeholder="(+237) 6XX XXX XXX">
                        </div>
                    </div>

                    <div class="row">
                        <div class="field">
                            <label for="contact-email">Adresse email <span class="required">*</span></label>
                            <input id="contact-email" type="email" placeholder="votre@email.com" required>
                        </div>
                        <div class="field">
                            <label for="contact-subject">Objet de votre message</label>
                            <select id="contact-subject">
                                <option value="">-- Selectionner un objet --</option>
                                <option>Ouverture de compte</option>
                                <option>Demande de credit</option>
                                <option>Carte Visa prepayee</option>
                                <option>Epargne et placement</option>
                                <option>Programme immobilier</option>
                                <option>Projet agricole</option>
                                <option>Application SOLO</option>
                                <option>Reclamation</option>
                                <option>Autre demande</option>
                            </select>
                        </div>
                    </div>

                    <div class="field">
                        <label for="contact-message">Votre message <span class="required">*</span></label>
                        <textarea id="contact-message" maxlength="1000" placeholder="Decrivez votre demande en quelques lignes..." required></textarea>
                    </div>
                    <div class="char-count"><span id="char-count">0</span>/1000 caracteres</div>

                    <div class="submit-row">
                        <button class="btn-primary" id="submit-button" type="submit">Envoyer le message</button>
                        <button class="btn-outline" type="reset">Reinitialiser</button>
                    </div>
                    <p class="privacy-note">En soumettant ce formulaire, vous acceptez notre politique de confidentialite. Vos donnees ne sont pas partagees avec des tiers.</p>
                </form>

                <div class="success-message" id="success-message">
                    <strong>Message envoye avec succes.</strong>
                    <p>Merci de nous avoir contactes. Notre equipe vous repondra dans les 24 heures ouvrables.</p>
                </div>
            </div>

            <aside class="sidebar">
                <div class="info-card contact-collapse is-open reveal delay-1">
                    <button class="contact-collapse-toggle" type="button" aria-expanded="true">
                        <div class="info-header bg-white">
                            <div class="info-header-title">Siege social</div>
                            <div class="info-header-subtitle">Yaounde - Face Camp Sic Messa</div>
                        </div>
                        <span class="contact-collapse-chevron" aria-hidden="true">
                            <svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </span>
                    </button>
                    <div class="contact-collapse-body info-body">
                        <div class="info-row">
                            <div class="info-icon"><svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg></div>
                            <div>
                                <div class="info-label">Adresse</div>
                                <div class="info-value">Face Camp Sic Messa<br>Immeuble de la Solidarite, Yaounde</div>
                            </div>
                        </div>
                        <div class="info-row">
                            <div class="info-icon"><svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 3.07 8.81 2 2 0 0 1 5.09 3h3a2 2 0 0 1 2 1.72"></path></svg></div>
                            <div>
                                <div class="info-label">Telephone</div>
                                <div class="info-value"><a href="tel:+237222235380">(+237) 222 23 53 80</a><br><a href="tel:+237656851262">(+237) 656 85 12 62</a></div>
                            </div>
                        </div>
                        <div class="info-row">
                            <div class="info-icon"><svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></div>
                            <div>
                                <div class="info-label">Email</div>
                                <div class="info-value"><a href="mailto:info.cremincam@cremincam.com">info.cremincam@cremincam.com</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hours-card contact-collapse reveal delay-2">
                    <button class="contact-collapse-toggle" type="button" aria-expanded="false">
                        <div class="hours-title"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>Horaires d'ouverture</div>
                        <span class="contact-collapse-chevron" aria-hidden="true">
                            <svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </span>
                    </button>
                    <div class="contact-collapse-body">
                        <div class="hours-status is-open" id="hours-status"><span class="status-pulse"></span><span id="hours-status-text">Ouvert aujourd'hui</span></div>
                        @foreach ($hours as $index => $hour)
                            <div class="hours-row" data-day-index="{{ ($index + 1) % 7 }}">
                                <span class="hours-day">{{ $hour['day'] }}</span>
                                <span class="hours-time {{ $hour['hours'] === 'Ferme' ? 'is-closed' : '' }}">{{ $hour['hours'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="branch-card contact-collapse reveal delay-3">
                    <button class="contact-collapse-toggle" type="button" aria-expanded="false">
                        <div class="hours-title"><svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path></svg>Agences et guichets</div>
                        <span class="contact-collapse-chevron" aria-hidden="true">
                            <svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </span>
                    </button>
                    <div class="contact-collapse-body">
                        @foreach ($branches as $branch)
                            <div class="branch-item">
                                <span class="branch-dot" style="background: {{ $branch['color'] }}"></span>
                                <div>
                                    <div class="branch-name">{{ $branch['name'] }}</div>
                                    <div class="branch-info">{{ $branch['info'] }}</div>
                                    <a href="{{ $branch['href'] }}" class="branch-phone">{{ $branch['phone'] }}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </aside>
        </section>

        <section class="map-section">
            <div class="section-center reveal">
                <div class="section-tag">Nous trouver</div>
                <h2 class="section-title">Notre <span>localisation</span></h2>
                <p class="section-subtitle">Retrouvez-nous au coeur de Yaounde ou dans l'une de nos agences regionales.</p>
            </div>

            <div class="map-layout reveal">
                <div class="map-frame">
                    <iframe src="https://www.openstreetmap.org/export/embed.html?bbox=11.495841952453975%2C3.8613198576177926%2C11.515841952453975%2C3.8813198576177925&layer=mapnik&marker=3.8713198576177925%2C11.505841952453975" title="CREMIN-CAM Yaounde Face Camp Sic Messa" loading="lazy"></iframe>
                </div>

                <div>
                    <div class="address-card">
                        <div class="address-tag">Siege social - Agence principale</div>
                        <h3>CREMIN-CAM Yaounde</h3>
                        <div class="address-copy">Face Camp Sic Messa<br>Immeuble de la Solidarite, Yaounde<br><br>Tel : (+237) 222 23 53 80<br>Email : info.cremincam@cremincam.com</div>
                        <div class="map-buttons">
                            <a href="https://maps.google.com/?q=3.8713198576177925,11.505841952453975" class="btn-map btn-outline" target="_blank" rel="noreferrer">Google Maps</a>
                            <a href="tel:+237222235380" class="btn-secondary">Appeler</a>
                        </div>
                    </div>

                    <div class="offices-title">Autres points de contact</div>
                    @foreach ($branches as $branch)
                        <div class="office-item">
                            <span class="office-dot" style="background: {{ $branch['color'] }}"></span>
                            <div style="flex: 1">
                                <div class="office-name">{{ $branch['name'] }}</div>
                                <div class="office-address">{{ $branch['info'] }}</div>
                            </div>
                            <a href="{{ $branch['href'] }}" class="office-phone">{{ preg_replace('/[^0-9 ]/', '', $branch['phone']) }}</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="faq-section">
            <div class="faq-inner">
                <div class="section-center reveal">
                    <div class="section-tag">Questions frequentes</div>
                    <h2 class="section-title">Avant de nous <span>ecrire...</span></h2>
                    <p class="section-subtitle">Les reponses aux questions les plus courantes de nos membres.</p>
                    <div class="faq-section-action">
                        <a href="{{ route('faq') }}" class="btn-map btn-outline">Voir toutes les FAQs</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="newsletter-section">
            <div class="newsletter-inner">
                <div class="reveal">
                    <div class="section-tag">Newsletter CREMIN-CAM</div>
                    <h2 class="section-title">Restez informe de nos <span>offres et actualites</span></h2>
                    <div class="newsletter-form">
                        <input id="newsletter-email" type="email" placeholder="Votre adresse email..." aria-label="Email newsletter">
                        <button class="newsletter-button" id="newsletter-button" type="button">S'abonner</button>
                    </div>
                    <p class="newsletter-note" id="newsletter-note">Pas de spam, desabonnement en un clic a tout moment.</p>
                </div>

                <div class="newsletter-benefits reveal delay-2">
                    @foreach ($newsletterBenefits as $benefit)
                        <div class="newsletter-benefit">
                            <span class="benefit-dot"><svg viewBox="0 0 12 12"><path d="M1 6l3 3 6-6"></path></svg></span>
                            <span>{{ $benefit }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="cta-band">
            <div class="cta-inner">
                <div class="cta-copy">
                    <h2>Pret a nous rejoindre ?</h2>
                    <p>Ouvrez votre compte des aujourd'hui et accedez a nos services financiers avec un accompagnement de proximite.</p>
                </div>
                <div class="cta-buttons">
                    <a href="tel:+237222235380" class="btn-secondary">Appeler maintenant</a>
                    <a href="{{ route('open-account') }}" class="btn-map btn-outline">Ouvrir un compte</a>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const reveals = document.querySelectorAll('.contact-page .reveal');
            const observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.12 });

            reveals.forEach(function (element) {
                observer.observe(element);
            });

            const destinationCards = document.querySelectorAll('.contact-page .destination-card');
            destinationCards.forEach(function (card) {
                card.addEventListener('click', function () {
                    destinationCards.forEach(function (item) {
                        item.classList.remove('is-selected');
                        item.querySelector('input').checked = false;
                    });
                    card.classList.add('is-selected');
                    card.querySelector('input').checked = true;
                });
            });

            const messageField = document.getElementById('contact-message');
            const charCount = document.getElementById('char-count');
            if (messageField && charCount) {
                messageField.addEventListener('input', function () {
                    charCount.textContent = messageField.value.length;
                });
            }

            const contactForm = document.getElementById('contact-form');
            const successMessage = document.getElementById('success-message');
            if (contactForm && successMessage) {
                contactForm.addEventListener('submit', function (event) {
                    event.preventDefault();
                    if (!contactForm.reportValidity()) {
                        return;
                    }
                    successMessage.classList.add('is-visible');
                    contactForm.reset();
                    charCount.textContent = '0';
                    destinationCards.forEach(function (item, index) {
                        item.classList.toggle('is-selected', index === 0);
                        item.querySelector('input').checked = index === 0;
                    });
                });
            }

            document.querySelectorAll('.contact-page .faq-item').forEach(function (item) {
                item.addEventListener('click', function () {
                    item.classList.toggle('is-open');
                });
            });

            document.querySelectorAll('.contact-page .contact-collapse-toggle').forEach(function (toggle) {
                toggle.addEventListener('click', function () {
                    const card = toggle.closest('.contact-collapse');
                    const isOpen = card.classList.contains('is-open');

                    document.querySelectorAll('.contact-page .contact-collapse').forEach(function (item) {
                        item.classList.remove('is-open');
                        const itemToggle = item.querySelector('.contact-collapse-toggle');
                        if (itemToggle) {
                            itemToggle.setAttribute('aria-expanded', 'false');
                        }
                    });

                    if (!isOpen) {
                        card.classList.add('is-open');
                        toggle.setAttribute('aria-expanded', 'true');
                    }
                });
            });

            const today = new Date().getDay();
            const hoursStatus = document.getElementById('hours-status');
            const hoursStatusText = document.getElementById('hours-status-text');
            document.querySelectorAll('.contact-page .hours-row').forEach(function (row) {
                if (Number(row.dataset.dayIndex) === today) {
                    row.classList.add('is-today');
                    if (today === 0) {
                        hoursStatus.classList.remove('is-open');
                        hoursStatus.classList.add('is-closed');
                        hoursStatusText.textContent = 'Ferme aujourd hui';
                    }
                }
            });

            const newsletterButton = document.getElementById('newsletter-button');
            const newsletterEmail = document.getElementById('newsletter-email');
            const newsletterNote = document.getElementById('newsletter-note');
            if (newsletterButton && newsletterEmail && newsletterNote) {
                newsletterButton.addEventListener('click', function () {
                    if (!newsletterEmail.value.trim()) {
                        newsletterNote.textContent = 'Saisissez votre adresse email pour vous abonner.';
                        return;
                    }
                    newsletterNote.textContent = 'Merci, votre inscription a la newsletter a bien ete prise en compte.';
                    newsletterEmail.value = '';
                });
            }
        });
    </script>
@endpush
