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

                @if (!empty($service['image_slots']))
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
