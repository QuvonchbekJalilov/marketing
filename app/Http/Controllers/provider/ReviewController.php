<?php

namespace App\Http\Controllers\provider;

use App\Http\Controllers\Controller;
use App\Mail\ReviewConfirmationMail;
use App\Models\Review; // Make sure to include the Review model
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReviewController extends Controller
{

    public function index()
    {
        $clients = User::where('role_id', 3)->get();
        $reviews = Review::all(); // Fetch all reviews
        return view('provider.reviews.index', compact('reviews', 'clients')); // Return the view with reviews
    }


    public function create()
    {
        return view('provider.reviews.create'); // Return the create view
    }


    public function store(Request $request)
    {
        $request->validate([
            'provider_id' => 'required|exists:users,id',
            'client_id' => 'required|exists:users,id',
            'scoro' => 'required|integer|min:1|max:5', // Example validation
            'description' => 'required|string|max:255',
            'review_source' => 'nullable|string|max:255',
        ]);

        $review = Review::create($request->all()); // Store the new review

        Mail::to($review->client->email)->send(new ReviewConfirmationMail($review));


        return redirect()->route('reviews.index')->with('success', 'Review created successfully.');
    }


    public function show(string $id)
    {
        $review = Review::findOrFail($id); // Fetch the review
        return view('provider.reviews.show', compact('review')); // Return the view with review
    }


    public function edit(string $id)
    {
        $review = Review::findOrFail($id); // Fetch the review for editing
        return view('provider.reviews.edit', compact('review')); // Return the edit view
    }


    public function update(Request $request, string $id)
    {
        $request->validate([
            'provider_id' => 'required|exists:users,id',
            'client_id' => 'required|exists:users,id',
            'scoro' => 'required|integer|min:1|max:5', // Example validation
            'description' => 'required|string|max:255',
            'review_source' => 'nullable|string|max:255',
        ]);

        $review = Review::findOrFail($id); // Fetch the review to update
        $review->update($request->all()); // Update the review
        return redirect()->route('reviews.index')->with('success', 'Review updated successfully.');
    }


    public function destroy(string $id)
    {
        $review = Review::findOrFail($id); // Fetch the review to delete
        $review->delete(); // Delete the review
        return redirect()->route('reviews.index')->with('success', 'Review deleted successfully.');
    }

    public function confirm(string $id)
    {
        $review = Review::findOrFail($id); // Fetch the review
        $review->status = 'confirmed'; // Update status to confirmed
        $review->save(); // Save the changes

        return redirect()->route('reviews.index')->with('success', 'Review confirmed successfully.');
    }
}
