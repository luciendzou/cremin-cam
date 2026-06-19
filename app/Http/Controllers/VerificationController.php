<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\VerificationLog;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class VerificationController extends Controller
{
    public function show(): View
    {
        $logs = VerificationLog::orderByDesc('created_at')->limit(50)->get();

        return view('anniversaire.verify', compact('logs'));
    }

    public function verify(Request $request): JsonResponse
    {
        $request->validate([
            'nom_complet' => ['required', 'string', 'max:150'],
        ]);

        $saisi = $request->input('nom_complet');
        $normSaisi = $this->normalize($saisi);

        /** @var Guest|null $guest */
        $guest = Guest::all()->first(function (Guest $g) use ($normSaisi) {
            return $this->normalize($g->prenom.' '.$g->nom) === $normSaisi
                || $this->normalize($g->nom.' '.$g->prenom) === $normSaisi;
        });

        if (! $guest) {
            $result = 'invalide';
            $payload = [
                'status' => $result,
                'message' => 'Aucun billet ne correspond à ce nom.',
            ];
        } elseif ($guest->status === 'utilise') {
            $result = 'deja_utilise';
            $payload = [
                'status' => $result,
                'message' => 'Ce billet a déjà été validé le '.$guest->used_at->format('d/m/Y à H:i').'.',
                'guest' => $this->guestPayload($guest),
            ];
        } else {
            $guest->update([
                'status' => 'utilise',
                'used_at' => now(),
            ]);
            $result = 'valide';
            $payload = [
                'status' => $result,
                'message' => 'Entrée autorisée.',
                'guest' => $this->guestPayload($guest),
            ];
        }

        VerificationLog::create([
            'nom_saisi' => $saisi,
            'guest_id' => $guest?->id,
            'result' => $result,
        ]);

        return response()->json($payload);
    }

    private function normalize(string $value): string
    {
        return Str::of($value)->ascii()->lower()->squish()->toString();
    }

    private function guestPayload(Guest $guest): array
    {
        return [
            'nom_complet' => $guest->prenom.' '.$guest->nom,
            'telephone' => $guest->telephone,
            'numero_compte' => $guest->numero_compte,
            'photo_url' => $guest->photo_url,
        ];
    }
}
