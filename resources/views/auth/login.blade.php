@extends('layouts.app')

@section('title', 'Connexion CREMIN-CAM')

@push('styles')
    <style>
        .login-page {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: calc(100vh - 140px);
            padding: 3rem 1.5rem;
            background: linear-gradient(180deg, #f8fbff 0%, #eff6ff 100%);
        }

        .login-card {
            width: min(520px, 100%);
            background: #fff;
            border: 1px solid #dbe4ef;
            border-radius: 28px;
            padding: 42px 36px;
            box-shadow: 0 28px 70px rgba(15, 61, 114, 0.08);
        }

        .login-card h1 {
            margin-bottom: 24px;
            font-size: 2rem;
            color: #102a56;
        }

        .login-card p {
            margin-bottom: 28px;
            color: #5b708e;
            line-height: 1.7;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            color: #243c5a;
            font-weight: 700;
        }

        .form-group input {
            width: 100%;
            padding: 14px 16px;
            border: 1px solid #cbd6e8;
            border-radius: 14px;
            background: #f8fbff;
            color: #102a56;
            font-size: 1rem;
        }

        .form-group input:focus {
            outline: none;
            border-color: #1a5fa8;
            box-shadow: 0 0 0 4px rgba(26, 95, 168, 0.12);
        }

        .form-error {
            color: #b91c1c;
            font-size: 0.95rem;
            margin-top: 10px;
        }

        .login-actions {
            display: flex;
            gap: 14px;
            align-items: center;
            margin-top: 24px;
        }

        .btn-primary,
        .btn-secondary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 14px 28px;
            border-radius: 999px;
            font-weight: 700;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background: #1a5fa8;
            color: #fff;
        }

        .btn-secondary {
            background: transparent;
            color: #1a5fa8;
            border: 1px solid rgba(26, 95, 168, 0.2);
        }
    </style>
@endpush

@section('content')
    <main class="login-page">
        <section class="login-card">
            <h1>Connexion</h1>
            <p>Connectez-vous avec votre numéro de compte et votre mot de passe pour accéder à l’espace Inside.</p>
            <form method="POST" action="{{ route('login.submit') }}">
                @csrf

                <div class="form-group">
                    <label for="numero_de_compte">Numéro de compte</label>
                    <input id="numero_de_compte" name="numero_de_compte" type="text" value="{{ old('numero_de_compte') }}" required autofocus>
                    @error('numero_de_compte')
                        <div class="form-error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input id="password" name="password" type="password" required>
                    @error('password')
                        <div class="form-error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="login-actions">
                    <button type="submit" class="btn-primary">Se connecter</button>
                    <a href="{{ route('open-account') }}" class="btn-secondary">Ouvrir un compte</a>
                </div>
            </form>
        </section>
    </main>
@endsection
