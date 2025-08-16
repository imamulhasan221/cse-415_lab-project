<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        return view('review');
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'title' => 'required|string|max:255',
        'rating' => 'required|integer|min:1|max:5',
        'review' => 'required|string|min:10',
    ]);

    $review = Review::create($validated);

    if ($review) {
        return back()->with('success', 'Review saved successfully!');
    } else {
        return back()->with('error', 'Failed to save review!');
    }
}

}