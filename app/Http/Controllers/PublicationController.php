<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\View\View;

class PublicationController extends Controller
{
    public function index(): View
    {
        $publications = Publication::orderByDesc('published_at')
            ->orderByDesc('created_at')
            ->get();

        return view('publications.index', compact('publications'));
    }

    public function create(): View
    {
        return view('publications.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'excerpt' => ['nullable', 'string', 'max:500'],
            'content' => ['required', 'string'],
            'author' => ['nullable', 'string', 'max:120'],
            'published_at' => ['nullable', 'date'],
        ]);

        $slug = Str::slug($data['title']);
        if (! $slug) {
            $slug = 'publication-' . time();
        }

        $originalSlug = $slug;
        $count = 1;
        while (Publication::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        $data['slug'] = $slug;
        $data['published_at'] = $data['published_at'] ?? now();

        Publication::create($data);

        return Redirect::route('publications.index')
            ->with('success', 'Publication créée avec succès.');
    }

    public function show(string $slug): View
    {
        $publication = Publication::where('slug', $slug)->firstOrFail();

        return view('publications.show', compact('publication'));
    }
}
