<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class GuestController extends Controller
{
    public function index(): View
    {
        $guests = Guest::orderByDesc('created_at')->get();

        return view('anniversaire.register', compact('guests'));
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'nom' => ['required', 'string', 'max:100'],
            'prenom' => ['required', 'string', 'max:100'],
            'telephone' => ['required', 'string', 'max:30'],
            'numero_compte' => ['nullable', 'string', 'max:60'],
            'photo' => ['nullable', 'image', 'max:2048'],
        ]);

        if ($request->hasFile('photo')) {
            $data['photo_path'] = $request->file('photo')->store('guests', 'public');
        }

        $data['status'] = 'valide';

        Guest::create($data);

        return redirect()
            ->route('invites.index')
            ->with('success', "Invité {$data['prenom']} {$data['nom']} enregistré avec succès.");
    }
}
