<?php

namespace App\Http\Controllers\provider;

use App\Http\Controllers\Controller;
use App\Mail\ReviewConfirmationMail;
use App\Models\ProviderCompany;
use App\Models\Review; // Make sure to include the Review model
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ReviewController extends Controller
{

    public function index()
    {
        $clients = User::where('role_id', 3)->get();
        // Get the provider's company
        $providerCompany = ProviderCompany::where('provider_id', Auth::user()->id)->first();

        if ($providerCompany) {
            // Get all providers for this company
            $providerIds = ProviderCompany::where('company_id', $providerCompany->company_id)
                ->pluck('provider_id');
            
            // Get the latest team info for all providers in the company
            $reviews = Review::whereIn('provider_id', $providerIds)->get();
        } else {
            // If the provider is not associated with any company, return an empty collection
            $reviews = collect();
        }
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
