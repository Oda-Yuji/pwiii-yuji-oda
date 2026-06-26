<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Episode;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request, Episode $episode)
    {
        $validated = $request->validate([
            'content' => 'required|string',
            'rating' => 'required|integer|min:1|max:10',
        ]);

        $episode->reviews()->updateOrCreate(
            ['user_id' => auth()->id()],
            [...$validated, 'user_id' => auth()->id()]
        );

        return redirect()->route('episodes.show', $episode);
    }

    public function edit(Review $review)
    {
        $this->authorize('update', $review);
        return redirect()->route('episodes.show', $review->episode_id);
    }

    public function update(Request $request, Review $review)
    {
        $this->authorize('update', $review);

        $validated = $request->validate([
            'content' => 'required|string',
            'rating' => 'required|integer|min:1|max:10',
        ]);

        $review->update($validated);
        return redirect()->route('episodes.show', $review->episode_id);
    }

    public function destroy(Review $review)
    {
        $this->authorize('delete', $review);
        $episode_id = $review->episode_id;
        $review->delete();
        return redirect()->route('episodes.show', $episode_id);
    }
}