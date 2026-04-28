@extends('layouts.app')

@section('title', 'CREMIN-CAM | Nos Services')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cremin_cam_solutions_services.css') }}">
@endpush

@section('content')
    <h1 class="sr-only">Page Services CREMIN-CAM Microfinance</h1>

    <div class="stripe"></div>

    <main>
        <div class="hero-band">
            <div class="hero-band-in">
                <div class="hero-band-copy">
                    <div class="hero-tag">Nos Services</div>
                    <h1>Des services pensés pour<br>votre quotidien bancaire</h1>
                    <p>Des opérations, canaux et accompagnements qui facilitent la gestion de vos comptes, vos paiements et vos échanges au jour le jour.</p>
                    <div class="hero-band-btns">
                        <a href="{{ route('contact') }}" class="btn-orange">Nous contacter</a>
                        <a href="{{ route('solutions') }}" class="btn-outline-w">Voir les solutions</a>
                    </div>
                </div>

                <div class="hero-band-visual" aria-hidden="true">
                    <div class="hero-band-portrait">
                        <img src="{{ asset('products/services-hero.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="services-intro">
            <div class="reveal">
                <div class="section-tag">Nos services bancaires</div>
                <h2 class="section-title">9 services pour <span class="bl">aller plus loin</span></h2>
                <p class="section-sub" style="margin-bottom:48px">Des services complémentaires pour encaisser, transférer, recevoir des alertes, protéger vos activités et fluidifier vos opérations au quotidien.</p>
            </div>
        </div>

        <div class="services-list-section">
            <div class="svc-grid reveal">
                @foreach($services as $slug => $s)
                    <div class="svc-card">
                        <div class="svc-num">{{ str_replace('Service ', '', $s['tag']) }}</div>
                        <div class="svc-icon">
                            {!! $s['icon'] !!}
                        </div>
                        <div class="svc-title">{{ $s['title'] }}</div>
                        <div class="svc-desc">{{ $s['hook'] }}</div>
                        <a href="{{ $s['url'] ?? route('services.show', $slug) }}" class="svc-link">
                            En savoir plus 
                            <svg viewBox="0 0 14 14"><path d="M1 7h12M8 3l5 4-5 4"></path></svg>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="project-cta reveal">
                <div class="project-box">
                    <div>
                        <div class="section-tag" style="margin-bottom:10px">Besoin d'orientation</div>
                        <h3>Vous cherchez le bon service pour votre situation ?</h3>
                        <p style="margin-top:12px">Notre équipe vous aide à identifier le canal, l’opération ou l’accompagnement le plus adapté à votre besoin actuel.</p>
                    </div>
                    <div class="project-box-btns">
                        <a href="{{ route('contact') }}" class="btn-blue">Parler à un conseiller</a>
                        <a href="{{ route('solutions') }}" class="btn-outline-b">Voir les solutions</a>
                    </div>
                </div>
            </div>
        </div>

        <section class="process-section">
            <div class="process-in">
                <div class="reveal" style="text-align:center">
                    <div class="section-tag" style="justify-content:center;display:flex">Comment ça marche</div>
                    <h2 class="section-title" style="text-align:center">Votre démarche en <span class="bl">4 étapes</span></h2>
                    <p style="font-size:15px;color:#666;line-height:1.7;max-width:480px;margin:12px auto 0">Simple, rapide et accompagnée à chaque instant.</p>
                </div>
                <div class="process-steps reveal">
                    <div class="pstep"><div class="pstep-num"><span>01</span></div><h4>Prise de contact</h4><p>Appelez-nous ou passez en agence pour exposer votre besoin.</p></div>
                    <div class="pstep"><div class="pstep-num"><span>02</span></div><h4>Analyse du besoin</h4><p>Nous identifions le bon service ou le bon canal de traitement.</p></div>
                    <div class="pstep"><div class="pstep-num"><span>03</span></div><h4>Constitution rapide</h4><p>Nous vous indiquons les pièces ou informations utiles pour avancer.</p></div>
                    <div class="pstep"><div class="pstep-num"><span>04</span></div><h4>Traitement & suivi</h4><p>Votre demande est prise en charge avec un accompagnement clair jusqu’à sa résolution.</p></div>
                </div>
            </div>
        </section>

        <div class="cta-band">
            <div class="cta-band-in">
                <div>
                    <h2>Un service vous intéresse ?</h2>
                    <p>Notre équipe est disponible pour répondre à vos questions et vous orienter vers le bon service.</p>
                </div>
                <div class="cta-band-btns">
                    <a href="{{ route('contact') }}" class="btn-orange">Nous contacter</a>
                    <a href="{{ route('branches') }}" class="btn-outline-w">Voir les agences</a>
                </div>
            </div>
        </div>
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
