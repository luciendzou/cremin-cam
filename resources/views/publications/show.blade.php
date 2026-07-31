@extends('layouts.app')

@section('title', 'CREMIN-CAM | ' . $publication->title)

@push('styles')
<link rel="stylesheet" href="{{ asset('css/cremin_cam_publications.css') }}">
@endpush

@section('content')
<div class="publication-page">
    <main class="publication-main">
        <section class="publication-hero publication-hero--detail">
            <div class="publication-hero-copy">
                <div class="section-tag">Banque</div>
                <h1 class="section-title">{{ $publication->title }}</h1>
                <p class="section-sub">{{ $publication->excerpt }}</p>
            </div>
        </section>

        <section class="publication-detail">
            <div class="publication-detail-card">
                <div class="publication-detail-meta">
                <span>{{ $publication->published_at?->format('d M Y') ?? $publication->created_at->format('d M Y') }}</span>
                @if($publication->author)
                    <span>• par {{ $publication->author }}</span>
                @endif
            </div>

            <article class="publication-content">
                {!! $publication->content !!}
            </article>

            <div class="publication-detail-actions">
                <a href="{{ route('publications.index') }}" class="btn-outline-b">Retour à Inside</a>
            </div>        </div>        </section>
    </main>
</div>
@endsection
