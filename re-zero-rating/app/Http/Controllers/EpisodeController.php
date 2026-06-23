<?php

namespace App\Http\Controllers;

use App\Models\Episode;

class EpisodeController extends Controller
{
    public function index()
    {
        $episodes = Episode::with(['reviews' => function ($query) {
            $query->latest()->limit(3);
        }])->get();

        return view('episodes', ['episodes' => $episodes]);
    }

    public function show(Episode $episode)
    {
        $reviews = $episode->reviews()
            ->with('user')
            ->when(request('stars'), fn($q) => $q->where('rating', request('stars')))
            ->latest()
            ->get();

        $userReview = auth()->check()
            ? $episode->reviews()->where('user_id', auth()->id())->first()
            : null;

        return view('episode', compact('episode', 'reviews', 'userReview'));
    }
}