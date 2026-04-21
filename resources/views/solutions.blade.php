@extends('layouts.app')

@section('title', 'CREMIN-CAM | Nos Solutions')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cremin_cam_solutions_services.css') }}">
@endpush

@section('content')
    <h1 class="sr-only">Page Solutions CREMIN-CAM Microfinance</h1>

    <div class="stripe"></div>

    <main>
        <div class="hero-band">
            <div class="hero-band-in">
                <div class="hero-tag">Nos Solutions</div>
                <h1>Des solutions pour votre<br>liberté financière</h1>
                <p>Des offres concrètes pour ouvrir un compte, épargner, payer, financer vos projets et garder votre argent accessible au quotidien.</p>
                <div class="hero-band-btns">
                    <a href="{{ route('open-account') }}" class="btn-orange">Ouvrir un compte</a>
                    <a href="{{ route('contact') }}" class="btn-outline-w">Contactez-nous</a>
                </div>
            </div>
        </div>

        <section class="products-section">
            <div class="reveal">
                <div class="section-tag">Nos solutions bancaires</div>
                <h2 class="section-title">5 solutions, <span class="bl">une seule mission</span></h2>
                <p class="section-sub">Chaque solution répond à un besoin précis : gérer votre argent, épargner, payer ou accéder à une offre bancaire adaptée à votre réalité.</p>
            </div>

            <div class="prod-grid">
                <div class="prod-card reveal d1">
                    <div class="prod-card-img"><img src="{{ asset('products/product-1.png') }}" alt="Mobile Banking"></div>
                    <div class="prod-card-body">
                        <div class="prod-icon-chip"><svg viewBox="0 0 24 24"><rect x="5" y="2" width="14" height="20" rx="2"></rect><path d="M12 18h.01"></path></svg></div>
                        <div class="prod-card-title">Mobile Banking <span class="badge-new">Nouveau</span></div>
                        <div class="prod-card-desc">SOLO by CREMIN-CAM met votre compte dans votre poche : consultation, opérations et suivi partout, à tout moment.</div>
                        <a href="{{ route('solutions.solo') }}" class="prod-card-link">Découvrir SOLO <svg viewBox="0 0 14 14"><path d="M1 7h12M8 3l5 4-5 4"></path></svg></a>
                    </div>
                </div>

                <div class="prod-card reveal d2">
                    <div class="prod-card-img"><img src="{{ asset('products/product-2.png') }}" alt="Cartes Visa prépayées"></div>
                    <div class="prod-card-body">
                        <div class="prod-icon-chip"><svg viewBox="0 0 24 24"><rect x="2" y="5" width="20" height="14" rx="2"></rect><path d="M2 10h20M6 15h2M10 15h4"></path></svg></div>
                        <div class="prod-card-title">Cartes Visa prépayées</div>
                        <div class="prod-card-desc">Accédez à votre argent partout dans le monde avec une carte rechargeable conçue pour les paiements et retraits sécurisés.</div>
                        <a href="{{ route('solutions.visa') }}" class="prod-card-link">En savoir plus <svg viewBox="0 0 14 14"><path d="M1 7h12M8 3l5 4-5 4"></path></svg></a>
                    </div>
                </div>

                <div class="prod-card reveal d3">
                    <div class="prod-card-img"><img src="{{ asset('products/product-3.png') }}" alt="Comptes d'épargnes"></div>
                    <div class="prod-card-body">
                        <div class="prod-icon-chip"><svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 100 20A10 10 0 0012 2z"></path><path d="M12 6v6l4 2"></path></svg></div>
                        <div class="prod-card-title">Comptes d'Épargnes</div>
                        <div class="prod-card-desc">Construisez votre sécurité financière avec une offre d’épargne pensée pour vos projets, vos proches et votre avenir.</div>
                        <a href="{{ route('solutions.epargne') }}" class="prod-card-link">En savoir plus <svg viewBox="0 0 14 14"><path d="M1 7h12M8 3l5 4-5 4"></path></svg></a>
                    </div>
                </div>

                <div class="prod-card reveal d4">
                    <div class="prod-card-img"><img src="{{ asset('products/product-4.png') }}" alt="Ouverture de compte"></div>
                    <div class="prod-card-body">
                        <div class="prod-icon-chip"><svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></div>
                        <div class="prod-card-title">Ouverture de compte</div>
                        <div class="prod-card-desc">Ouvrez votre compte simplement et démarrez votre relation bancaire avec une base claire, rapide et accompagnée.</div>
                        <a href="{{ route('open-account') }}" class="prod-card-link">Ouvrir un compte <svg viewBox="0 0 14 14"><path d="M1 7h12M8 3l5 4-5 4"></path></svg></a>
                    </div>
                </div>

                <div class="prod-card reveal d5">
                    <div class="prod-card-img"><img src="{{ asset('products/product-7.png') }}" alt="Crédits Bancaires"></div>
                    <div class="prod-card-body">
                        <div class="prod-icon-chip"><svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 100 20A10 10 0 0012 2z"></path><path d="M12 7v10M8.5 10.5c0-1.4 1.4-2.5 3.5-2.5s3.5 1.1 3.5 2.5-1.4 2.5-3.5 2.5-3.5 1.1-3.5 2.5S9.9 18 12 18s3.5-1.1 3.5-2.5"></path></svg></div>
                        <div class="prod-card-title">Crédits Bancaires</div>
                        <div class="prod-card-desc">Financez vos besoins personnels, familiaux ou professionnels avec des solutions de crédit adaptées à votre profil.</div>
                        <a href="{{ route('solutions.credits') }}" class="prod-card-link">Demander un crédit <svg viewBox="0 0 14 14"><path d="M1 7h12M8 3l5 4-5 4"></path></svg></a>
                    </div>
                </div>

            </div>
        </section>

        <div class="cta-band">
            <div class="cta-band-in">
                <div>
                    <h2>Prêt à choisir votre solution ?</h2>
                    <p>Notre équipe est disponible pour vous guider vers l’offre la plus adaptée à votre situation et à vos objectifs.</p>
                </div>
                <div class="cta-band-btns">
                    <a href="{{ route('open-account') }}" class="btn-orange">Ouvrir mon compte</a>
                    <a href="{{ route('contact') }}" class="btn-outline-w">Nous contacter</a>
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
