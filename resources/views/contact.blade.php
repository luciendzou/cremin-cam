@extends('layouts.app')

@section('title', 'CREMIN-CAM | Contacts')

@php
    $destinations = [
        ['name' => 'Direction Générale', 'email' => 'info.cremincam@cremincam.com'],
        ['name' => 'Agence Yaoundé', 'email' => 'info.cremincamyaounde@cremincam.com'],
        ['name' => 'Agence Douala', 'email' => 'info.cremincamdouala@cremincam.com'],
        ['name' => 'Agence Garoua', 'email' => 'info.cremincamgaroua@cremincam.com'],
    ];

    $hours = [
        ['day' => 'Lundi', 'hours' => '7h30 - 16h00'],
        ['day' => 'Mardi', 'hours' => '7h30 - 16h00'],
        ['day' => 'Mercredi', 'hours' => '7h30 - 16h00'],
        ['day' => 'Jeudi', 'hours' => '7h30 - 16h00'],
        ['day' => 'Vendredi', 'hours' => '7h30 - 16h00'],
        ['day' => 'Samedi', 'hours' => '8h00 - 12h00'],
        ['day' => 'Dimanche', 'hours' => 'Fermé'],
    ];

    $branches = [
        ['name' => 'Agence Douala - Akwa', 'info' => 'Littoral · Agence', 'phone' => '(+237) 655 71 73 86', 'href' => 'tel:+237655717386', 'color' => '#2472C8'],
        ['name' => 'Agence Garoua', 'info' => 'Nord · Agence', 'phone' => '(+237) 697 04 69 25', 'href' => 'tel:+237697046925', 'color' => '#0F3D72'],
        ['name' => 'Guichet Nkongsamba', 'info' => 'Littoral · Guichet', 'phone' => '(+237) 655 71 73 86', 'href' => 'tel:+237655717386', 'color' => '#F5A020'],
        ['name' => 'Guichet Maroua', 'info' => 'Extrême-Nord · Guichet', 'phone' => '(+237) 675 42 75 22', 'href' => 'tel:+237675427522', 'color' => '#F5A020'],
    ];

    $faqs = [
        ['q' => 'Comment ouvrir un compte chez CREMIN-CAM ?', 'a' => 'Rendez-vous dans l’une de nos agences avec votre pièce d’identité nationale, une photo d’identité et un justificatif de domicile. L’équipe vous guide ensuite à chaque étape.'],
        ['q' => 'Quels documents faut-il pour demander un crédit ?', 'a' => 'Pièce d’identité valide, justificatifs de revenus, relevés récents et, selon le projet, devis ou plan de localisation. Un conseiller vous précisera les pièces exactes.'],
        ['q' => 'Comment télécharger et utiliser l’application SOLO ?', 'a' => 'L’application SOLO est disponible sur Android. Après installation, vous utilisez votre numéro de compte et les accès remis lors de votre inscription.'],
        ['q' => 'Comment fonctionne la carte Visa prépayée ?', 'a' => 'La carte est rechargeable et utilisable en ligne, en boutique et aux distributeurs. Elle permet de mieux maîtriser les dépenses tout en restant liée à votre compte.'],
        ['q' => 'Comment participer au programme "Un membre, un terrain" ?', 'a' => 'Il faut être membre actif, présenter une capacité de remboursement justifiée et déposer un dossier complet auprès de l’agence ou par contact initial avec la direction.'],
        ['q' => 'CREMIN-CAM propose-t-il des services aux entreprises ?', 'a' => 'Oui, notamment comptes professionnels, domiciliation bancaire, financement de marchés, encaissement caisse et vente de devises selon le besoin.'],
        ['q' => 'Quels délais pour le traitement d’une demande de crédit ?', 'a' => 'Les dossiers simples sont généralement étudiés en quelques jours ouvrés après remise des pièces complètes. Les projets plus structurés demandent davantage de validation.'],
        ['q' => 'Comment bénéficier du financement agricole avec le FODECC ?', 'a' => 'Les agriculteurs, coopératives et GIC peuvent présenter leur projet en agence avec leurs justificatifs d’activité et leurs documents d’identification.'],
    ];

    $newsletterBenefits = [
        'Nouvelles offres de crédit et d’épargne',
        'Actualités du programme immobilier',
        'Informations sur les projets agricoles FODECC',
        'Mises à jour de l’application SOLO',
        'Événements et assemblées générales',
    ];

    $quickLinks = [
        ['label' => 'Téléphone direct', 'value' => '(+237) 697 04 69 25', 'href' => 'tel:+237697046925', 'icon' => 'phone'],
        ['label' => 'Email général', 'value' => 'info.cremincam@cremincam.com', 'href' => 'mailto:info.cremincam@cremincam.com', 'icon' => 'mail'],
        ['label' => 'Adresse du siège', 'value' => 'Face Camp SIC, Messa-Mokolo, Yaoundé', 'href' => 'https://maps.google.com/?q=Messa-Mokolo,Yaounde,Cameroun', 'icon' => 'pin'],
        ['label' => 'Application mobile', 'value' => 'SOLO by CREMIN-CAM', 'href' => 'https://play.google.com/store/apps/details?id=com.cagecfi.pmobile_cremincam_client', 'icon' => 'phone-app'],
    ];

    $responseItems = [
        ['label' => 'Réponse email :', 'value' => 'sous 24h ouvrées', 'color' => '#1E6B45'],
        ['label' => 'Téléphone :', 'value' => 'Lun-Ven 7h30-16h00', 'color' => '#1A5FA8'],
        ['label' => 'Agences :', 'value' => 'Lun-Sam dès 7h30', 'color' => '#F5A020'],
        ['label' => 'Urgences :', 'value' => 'via SOLO App 24h/24', 'color' => '#C4C4C4'],
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
                    <p class="hero-subtitle">Notre équipe est disponible du lundi au samedi pour répondre à vos questions, par téléphone, par email ou directement en agence.</p>
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
                        {{ $item['label'] }} <strong>{{ $item['value'] }}</strong>
                    </div>
                @endforeach
            </div>
        </section>

        <section class="main">
            <div class="reveal">
                <div class="section-tag">Formulaire de contact</div>
                <h2 class="section-title">Envoyez-nous <span>un message</span></h2>
                <p class="section-subtitle">Choisissez l’agence ou le service concerné, remplissez le formulaire et nous vous répondrons dans les plus brefs délais.</p>

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
                            <label for="contact-phone">Numéro de téléphone</label>
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
                                <option value="">-- Sélectionner un objet --</option>
                                <option>Ouverture de compte</option>
                                <option>Demande de crédit</option>
                                <option>Carte Visa prépayée</option>
                                <option>Épargne & placement</option>
                                <option>Programme immobilier</option>
                                <option>Projet agricole / FODECC</option>
                                <option>Application SOLO</option>
                                <option>Réclamation</option>
                                <option>Autre demande</option>
                            </select>
                        </div>
                    </div>

                    <div class="field">
                        <label for="contact-message">Votre message <span class="required">*</span></label>
                        <textarea id="contact-message" maxlength="1000" placeholder="Décrivez votre demande en quelques lignes..." required></textarea>
                    </div>
                    <div class="char-count"><span id="char-count">0</span>/1000 caractères</div>

                    <div class="submit-row">
                        <button class="btn-primary" id="submit-button" type="submit">Envoyer le message</button>
                        <button class="btn-outline" type="reset">Réinitialiser</button>
                    </div>
                    <p class="privacy-note">En soumettant ce formulaire, vous acceptez notre politique de confidentialité. Vos données ne sont jamais partagées avec des tiers.</p>
                </form>

                <div class="success-message" id="success-message">
                    <strong>Message envoyé avec succès.</strong>
                    <p>Merci de nous avoir contactés. Notre équipe vous répondra dans les 24 heures ouvrées.</p>
                </div>
            </div>

            <aside class="sidebar">
                <div class="info-card reveal delay-1">
                    <div class="info-header">
                        <div class="info-header-title">Siège social</div>
                        <div class="info-header-subtitle">Yaoundé - Messa-Mokolo</div>
                    </div>
                    <div class="info-body">
                        <div class="info-row">
                            <div class="info-icon"><svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg></div>
                            <div>
                                <div class="info-label">Adresse</div>
                                <div class="info-value">Face Camp SIC, Messa-Mokolo<br>BP 16578 - Yaoundé, Cameroun</div>
                            </div>
                        </div>
                        <div class="info-row">
                            <div class="info-icon"><svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 3.07 8.81 2 2 0 0 1 5.09 3h3a2 2 0 0 1 2 1.72"></path></svg></div>
                            <div>
                                <div class="info-label">Téléphone</div>
                                <div class="info-value"><a href="tel:+237697046925">(+237) 697 04 69 25</a><br><a href="tel:+237656851262">(+237) 656 85 12 62</a></div>
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

                <div class="hours-card reveal delay-2">
                    <div class="hours-title"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>Horaires d'ouverture</div>
                    <div class="hours-status is-open" id="hours-status"><span class="status-pulse"></span><span id="hours-status-text">Ouvert aujourd'hui</span></div>
                    @foreach ($hours as $index => $hour)
                        <div class="hours-row" data-day-index="{{ ($index + 1) % 7 }}">
                            <span class="hours-day">{{ $hour['day'] }}</span>
                            <span class="hours-time {{ $hour['hours'] === 'Fermé' ? 'is-closed' : '' }}">{{ $hour['hours'] }}</span>
                        </div>
                    @endforeach
                </div>

                <div class="branch-card reveal delay-3">
                    <div class="hours-title"><svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path></svg>Autres agences</div>
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

                <div class="solo-card reveal">
                    <div class="solo-icon"><svg viewBox="0 0 24 24"><rect x="5" y="2" width="14" height="20" rx="2"></rect><path d="M12 18h.01"></path></svg></div>
                    <h4>Gérez tout depuis SOLO</h4>
                    <p>Virements, consultation de solde, épargne : disponible 24h/24 sans vous déplacer.</p>
                    <a class="btn-accent" href="https://play.google.com/store/apps/details?id=com.cagecfi.pmobile_cremincam_client" target="_blank" rel="noreferrer">Télécharger SOLO</a>
                </div>
            </aside>
        </section>

        <section class="map-section">
            <div class="section-center reveal">
                <div class="section-tag">Nous trouver</div>
                <h2 class="section-title">Notre <span>localisation</span></h2>
                <p class="section-subtitle">Retrouvez-nous au cœur de Yaoundé ou dans l'une de nos agences régionales.</p>
            </div>

            <div class="map-layout reveal">
                <div class="map-frame">
                    <iframe src="https://www.openstreetmap.org/export/embed.html?bbox=11.4820%2C3.8550%2C11.5100%2C3.8850&layer=mapnik&marker=3.8700%2C11.4960" title="CREMIN-CAM Yaoundé Messa-Mokolo" loading="lazy"></iframe>
                </div>

                <div>
                    <div class="address-card">
                        <div class="address-tag">Siège social - Agence principale</div>
                        <h3>CREMIN-CAM Yaoundé</h3>
                        <div class="address-copy">Face Camp SIC, Messa-Mokolo<br>BP 16578 - Yaoundé, Cameroun<br><br>Tél : (+237) 697 04 69 25<br>Email : info.cremincam@cremincam.com</div>
                        <div class="map-buttons">
                            <a href="https://maps.google.com/?q=Messa-Mokolo,Yaounde,Cameroun" class="btn-map btn-outline" target="_blank" rel="noreferrer">Google Maps</a>
                            <a href="tel:+237697046925" class="btn-secondary">Appeler</a>
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
                    <div class="section-tag">Questions fréquentes</div>
                    <h2 class="section-title">Avant de nous <span>écrire...</span></h2>
                    <p class="section-subtitle">Les réponses aux questions les plus courantes de nos membres.</p>
                </div>

                <div class="faq-grid reveal">
                    @foreach ($faqs as $faq)
                        <article class="faq-item">
                            <div class="faq-question">
                                <span>{{ $faq['q'] }}</span>
                                <span class="faq-toggle"><svg viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg></span>
                            </div>
                            <div class="faq-answer">{{ $faq['a'] }}</div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="newsletter-section">
            <div class="newsletter-inner">
                <div class="reveal">
                    <div class="section-tag">Newsletter CREMIN-CAM</div>
                    <h2 class="section-title">Restez informé de nos <span>offres & actualités</span></h2>
                    <div class="newsletter-form">
                        <input id="newsletter-email" type="email" placeholder="Votre adresse email..." aria-label="Email newsletter">
                        <button class="newsletter-button" id="newsletter-button" type="button">S'abonner</button>
                    </div>
                    <p class="newsletter-note" id="newsletter-note">Pas de spam, désabonnement en un clic à tout moment.</p>
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
                    <h2>Prêt à nous rejoindre ?</h2>
                    <p>Ouvrez votre compte dès aujourd'hui et accédez à nos services financiers avec un accompagnement de proximité.</p>
                </div>
                <div class="cta-buttons">
                    <a href="tel:+237697046925" class="btn-secondary">Appeler maintenant</a>
                    <a href="#" class="btn-map btn-outline">Ouvrir un compte</a>
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

            const today = new Date().getDay();
            const hoursStatus = document.getElementById('hours-status');
            const hoursStatusText = document.getElementById('hours-status-text');
            document.querySelectorAll('.contact-page .hours-row').forEach(function (row) {
                if (Number(row.dataset.dayIndex) === today) {
                    row.classList.add('is-today');
                    if (today === 0) {
                        hoursStatus.classList.remove('is-open');
                        hoursStatus.classList.add('is-closed');
                        hoursStatusText.textContent = 'Fermé aujourd\'hui';
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
                    newsletterNote.textContent = 'Merci, votre inscription à la newsletter a bien été prise en compte.';
                    newsletterEmail.value = '';
                });
            }
        });
    </script>
@endpush
