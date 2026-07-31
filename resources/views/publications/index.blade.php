@extends('layouts.app')

@section('title', 'CREMIN-CAM | Inside')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/cremin_cam_publications.css') }}">
@endpush

@section('content')
    <div class="publication-page">
        <section class="publication-hero publication-hero--list">
            <div class="publication-hero-in">
                <div class="publication-hero-copy">
                    <h1 class="section-title">Inside</h1>
                    <p class="hero-sub">Bienvenue dans Inside, le point de vue CREMIN-CAM sur l'actualité bancaire, les
                        services et les opportunités clients.</p>
                    <div class="publication-hero-btns">
                        <a href="#publication-list" class="btn-orange">Voir les Inside</a>
                    </div>
                    <p class="publication-hero-meta">{{ $publications->count() }}
                        Inside{{ $publications->count() > 1 ? 's' : '' }} publiés</p>
                </div>
            </div>
        </section>

        <section class="publication-list" id="publication-list">
            @if ($publications->isEmpty())
                <div class="publication-empty">
                    <p>Aucun Inside disponible pour le moment.</p>
                    <a href="{{ route('publications.create') }}" class="btn-orange">Créer le premier Inside</a>
                </div>
            @else
                <div class="publication-grid">
                    @foreach ($publications as $publication)
                        <a href="{{ route('publications.show', $publication->slug) }}" class="publication-card-link">
                            <article class="publication-card">
                                <div class="publication-card-meta">
                                    <time
                                        datetime="{{ $publication->published_at?->toDateString() ?? $publication->created_at->toDateString() }}">
                                        {{ $publication->published_at?->format('d M Y') ?? $publication->created_at->format('d M Y') }}
                                    </time>
                                    @if ($publication->author)
                                        <span class="publication-author">par {{ $publication->author }}</span>
                                    @endif
                                </div>

                                <h2>{{ $publication->title }}</h2>
                                <p>{{ $publication->excerpt }}</p>
                                <div class="publication-card-footer">Lire la suite</div>
                            </article>
                        </a>
                    @endforeach
                </div>
            @endif
        </section>
    </div>
@endsection
