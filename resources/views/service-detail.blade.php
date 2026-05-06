@extends('layouts.app')

@section('title', 'CREMIN-CAM | ' . $service['title'])

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cremin_cam_solutions_services.css') }}">
@endpush

@section('content')
    <div class="stripe"></div>

    <main class="service-detail-page">
        <div class="hero-band">
            <div class="hero-band-in service-detail-hero-in">
                <div class="service-detail-hero-copy">
                    <div class="hero-tag">{{ $service['tag'] }}</div>
                    <h1>{{ $service['title'] }}</h1>
                    <p>{{ $service['hook'] }}</p>
                    <div class="hero-band-btns">
                        <a href="{{ route('contact') }}" class="btn-orange">Nous contacter</a>
                        <a href="{{ route('services') }}" class="btn-outline-w">Tous les services</a>
                    </div>
                </div>

                @if (!empty($service['hero_visual']))
                    <div class="service-detail-hero-visual service-hero-illustration" aria-hidden="true">
                        @switch($service['hero_visual'])
                            @case('check-illustration')
                                <div class="service-check-card">
                                    <div class="service-check-top">
                                        <div class="service-check-brand">CREMIN-CAM</div>
                                        <div class="service-check-chip">Encaissement</div>
                                    </div>
                                    <div class="service-check-payee">
                                        <span>Ordre de</span>
                                        <strong>Votre remise de cheque</strong>
                                    </div>
                                    <div class="service-check-lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="service-check-bottom">
                                        <div class="service-check-amount">
                                            <small>Montant</small>
                                            <strong>FCFA</strong>
                                        </div>
                                        <div class="service-check-status">Verification securisee</div>
                                    </div>
                                </div>
                                @break
                            @case('transfer-illustration')
                                <div class="service-visual-card service-visual-card-transfer">
                                    <div class="service-visual-transfer-head">
                                        <div class="service-transfer-badge">Transfert</div>
                                        <div class="service-transfer-globe"></div>
                                    </div>
                                    <div class="service-transfer-flow">
                                        <div class="service-transfer-node">CM</div>
                                        <div class="service-transfer-arrow"></div>
                                        <div class="service-transfer-node service-transfer-node-orange">INT</div>
                                    </div>
                                    <div class="service-transfer-rails">
                                        <span></span><span></span><span></span>
                                    </div>
                                </div>
                                @break
                            @case('shield-illustration')
                                <div class="service-visual-card service-visual-card-shield">
                                    <div class="service-shield-orb"></div>
                                    <div class="service-shield-shape"></div>
                                    <div class="service-shield-lines">
                                        <span></span><span></span>
                                    </div>
                                </div>
                                @break
                            @case('currency-illustration')
                                <div class="service-visual-card service-visual-card-currency">
                                    <div class="service-currency-stack service-currency-stack-back"></div>
                                    <div class="service-currency-stack service-currency-stack-front">
                                        <div class="service-currency-symbol">$</div>
                                        <div class="service-currency-symbol service-currency-symbol-alt">€</div>
                                    </div>
                                </div>
                                @break
                            @case('sms-illustration')
                                <div class="service-visual-card service-visual-card-sms">
                                    <div class="service-phone-shell">
                                        <div class="service-phone-screen">
                                            <div class="service-sms-bubble"></div>
                                            <div class="service-sms-bubble service-sms-bubble-small"></div>
                                            <div class="service-sms-bubble service-sms-bubble-accent"></div>
                                        </div>
                                    </div>
                                </div>
                                @break
                            @case('domiciliation-illustration')
                                <div class="service-visual-card service-visual-card-domiciliation">
                                    <div class="service-building"></div>
                                    <div class="service-domiciliation-line"></div>
                                    <div class="service-domiciliation-card"></div>
                                </div>
                                @break
                            @case('money-illustration')
                                <div class="service-visual-card service-visual-card-money">
                                    <div class="service-wallet">
                                        <div class="service-wallet-pocket"></div>
                                    </div>
                                    <div class="service-wallet-coin service-wallet-coin-a"></div>
                                    <div class="service-wallet-coin service-wallet-coin-b"></div>
                                </div>
                                @break
                            @case('messenger-illustration')
                                <div class="service-visual-card service-visual-card-messenger">
                                    <div class="service-chat-bubble service-chat-bubble-main"></div>
                                    <div class="service-chat-bubble service-chat-bubble-side"></div>
                                    <div class="service-chat-lines">
                                        <span></span><span></span>
                                    </div>
                                </div>
                                @break
                            @case('credit-illustration')
                                <div class="service-visual-card service-visual-card-credit">
                                    <div class="service-credit-card"></div>
                                    <div class="service-credit-coin"></div>
                                    <div class="service-credit-bars">
                                        <span></span><span></span><span></span>
                                    </div>
                                </div>
                                @break
                        @endswitch
                    </div>
                @elseif (!empty($service['image_slots']))
                    <div class="service-detail-hero-visual">
                        @foreach ($service['image_slots'] as $slot)
                            <div class="service-hero-slot">{{ $slot }}</div>
                        @endforeach
                    </div>
                @else
                    <div class="service-detail-hero-visual service-detail-icon-bg">
                        {!! $service['icon'] !!}
                    </div>
                @endif
            </div>
        </div>

        <section class="service-detail-section">
            <div class="service-detail-grid">
                <div class="service-detail-main reveal">
                    <div class="section-tag">Présentation</div>
                    <h2 class="section-title">Ce service vous aide à <span class="bl">mieux avancer</span></h2>
                    <p class="service-detail-copy">{{ $service['description'] }}</p>

                    <div class="service-detail-block">
                        <h3>Les points clés</h3>
                        <div class="service-chip-list">
                            @foreach ($service['highlights'] as $highlight)
                                <span class="service-chip">{{ $highlight }}</span>
                            @endforeach
                        </div>
                    </div>

                    <div class="service-detail-block">
                        <h3>Pourquoi choisir ce service</h3>
                        <div class="service-benefit-list">
                            @foreach ($service['benefits'] as $benefit)
                                <div class="service-benefit-item">{{ $benefit }}</div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <aside class="service-detail-side reveal d2">
                    <div class="service-side-card">
                        <div class="section-tag">En pratique</div>
                        <h3>Votre démarche</h3>
                        <div class="service-step-list">
                            @foreach ($service['steps'] as $index => $step)
                                <div class="service-step-item">
                                    <div class="service-step-num">{{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }}</div>
                                    <p>{{ $step }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="service-side-card service-side-card-accent">
                        <h3>Besoin d’un accompagnement ?</h3>
                        <p>Nos équipes peuvent vous orienter vers le service le plus adapté à votre situation et vous indiquer les modalités utiles.</p>
                        <div class="hero-band-btns">
                            <a href="{{ route('contact') }}" class="btn-orange">Parler à un conseiller</a>
                            <a href="{{ route('branches') }}" class="btn-outline-b">Voir les agences</a>
                        </div>
                    </div>
                </aside>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.08 });

            document.querySelectorAll('.reveal').forEach((element) => observer.observe(element));
        });
    </script>
@endpush
