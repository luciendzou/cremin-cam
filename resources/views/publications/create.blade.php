@extends('layouts.app')

@section('title', 'CREMIN-CAM | Inside')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/cremin_cam_publications.css') }}">
<link rel="stylesheet" href="{{ asset('css/cremin_cam_publication_create.css') }}">
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endpush

@section('content')
<div class="publication-page">
    <main class="publication-main">
        <section class="publication-hero">
            <div class="publication-hero-in">
                <div class="publication-hero-copy">
                    <div class="section-tag">Banque</div>
                    <h1 class="section-title">Créer un Inside</h1>
                    <p class="section-sub">Rédigez votre Inside avec un éditeur riche Quill. Le contenu est sauvegardé au format HTML et peut être affiché sur une page dédiée.</p>
                </div>
                <div class="publication-hero-note">
                    <strong>Astuce</strong>
                    <p>Utilisez les titres, les listes et les liens pour structurer votre article et faciliter la lecture.</p>
                </div>
            </div>
        </section>

        <section class="publication-form-section">
            <form action="{{ route('publications.store') }}" method="POST" class="publication-form">
                @csrf

                @if ($errors->any())
                    <div class="form-errors">
                        <strong>Merci de corriger les éléments suivants :</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="publication-form-grid">
                    <label>
                        <span>Titre</span>
                        <input type="text" name="title" value="{{ old('title') }}" required>
                    </label>

                    <label>
                        <span>Extrait</span>
                        <textarea name="excerpt">{{ old('excerpt') }}</textarea>
                    </label>

                    <label>
                        <span>Auteur</span>
                        <input type="text" name="author" value="{{ old('author') }}">
                    </label>

                    <label>
                        <span>Date de publication</span>
                        <input type="date" name="published_at" value="{{ old('published_at', now()->format('Y-m-d')) }}">
                    </label>
                </div>

                <label class="quill-label">
                    <span>Contenu</span>
                    <div id="quill-editor"></div>
                </label>

                <input type="hidden" name="content" id="publication-content" value="{{ old('content') }}">

                <div class="publication-form-actions">
                    <button type="submit" class="btn-orange">Publier l'Inside</button>
                    <a href="{{ route('publications.index') }}" class="btn-outline-b">Retour à Inside</a>
                </div>
            </form>
        </section>
    </main>
</div>
@endsection

@push('scripts')
<script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const editor = new Quill('#quill-editor', {
            theme: 'snow',
            placeholder: 'Rédigez votre contenu ici...',
            modules: {
                toolbar: [
                    [{ header: [1, 2, 3, false] }],
                    ['bold', 'italic', 'underline', 'strike'],
                    ['blockquote', 'code-block'],
                    [{ list: 'ordered' }, { list: 'bullet' }],
                    [{ indent: '-1' }, { indent: '+1' }],
                    [{ color: [] }, { background: [] }],
                    ['link', 'image'],
                    ['clean']
                ]
            }
        });

        const contentInput = document.getElementById('publication-content');
        const form = document.querySelector('.publication-form');

        if (contentInput.value) {
            editor.root.innerHTML = contentInput.value;
        }

        form.addEventListener('submit', () => {
            contentInput.value = editor.root.innerHTML;
        });
    });
</script>
@endpush
