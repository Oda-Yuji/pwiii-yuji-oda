<?php

namespace App\Http\Controllers;

use App\Models\Season;
use App\Models\Episode;

class EpisodeController extends Controller
{
    public function index()
    {
        $seasons = Season::with(['episodes.reviews'])->orderBy('number')->get();

        return view('episodes', ['seasons' => $seasons]);
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