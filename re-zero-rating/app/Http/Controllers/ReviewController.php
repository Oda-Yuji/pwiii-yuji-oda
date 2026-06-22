<?php

namespace App\Http\Controllers;

use App\Models\Review; 
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public readonly Review $review;

    public function __construct()
    {
        $this->review = new Review();
    }

    public function index()
    {
        $reviews = $this->review->all();
        return view('reviews', ['reviews' => $reviews]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        $this->authorize('update', $review);
        return view('reviews-edit', ['review' => $review]);
    }

    public function update(Request $request, Review $review)
    {
        $this->authorize('update', $review);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $review->update($validated);
        return redirect()->route('reviews.index');
    }

    public function destroy(Review $review)
    {
        $this->authorize('delete', $review);
        $review->delete();
        return redirect()->route('reviews.index');
    }
}
