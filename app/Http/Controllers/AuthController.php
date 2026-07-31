<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function showLoginForm(): View
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'numero_de_compte' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if ($request->user()->numero_de_compte === 'A02@5526') {
                return Redirect::route('publications.create');
            }

            return Redirect::intended('/');
        }

        return back()->withErrors([
            'numero_de_compte' => 'Les identifiants sont incorrects.',
        ])->onlyInput('numero_de_compte');
    }
}
