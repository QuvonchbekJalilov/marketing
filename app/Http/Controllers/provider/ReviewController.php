<?php

namespace App\Http\Controllers\provider;

use App\Http\Controllers\Controller;
use App\Mail\ReviewConfirmationMail;
use App\Models\ProviderCompany;
use App\Models\Review;

// Make sure to include the Review model
use App\Models\ServiceCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ReviewController extends Controller
{

    public function index()
    {
        $clients = User::where('role_id', 3)->get();
        $service_categories = ServiceCategory::all();

        $providerCompany = ProviderCompany::where('provider_id', Auth::user()->id)->first();

        if ($providerCompany) {
            $providerIds = ProviderCompany::where('company_id', $providerCompany->company_id)
                ->pluck('provider_id');

            // Get reviews and calculate average score for each review
            $reviews = Review::whereIn('provider_id', $providerIds)->get()->map(function ($review) {
                $review->average_score = ($review->burget_score + $review->quality_score + $review->schedule_score + $review->colloboration_score) / 4;
                return $review;
            });
        } else {
            $reviews = collect();
        }

        return view('provider.reviews.index', compact('reviews', 'clients', 'service_categories'));
    }





    public function create()
    {
        return view('provider.reviews.create'); // Return the create view
    }


    public function store(Request $request)
    {
        $request->validate([
            'provider_id' => 'required|exists:users,id',
            'burget_score' => 'required|integer|min:1|max:5',
            'quality_score' => 'required|integer|min:1|max:5',
            'schedule_score' => 'required|integer|min:1|max:5',
            'colloboration_score' => 'required|integer|min:1|max:5',
            'behind_collaboration' => 'required|nullable',
            'during_collaboration' => 'required|nullable',
            'improvements' => 'required|nullable',
            'service_category_id' => 'required|exists:service_categories,id',
            'recommend' => 'required|in:yes,no',
            'full_name' => 'required|nullable',
            'email' => 'required|nullable',
            'job_title' => 'required|nullable',
            'company_name' => 'required|nullable',
            'company_industry' => 'required|nullable',
            'company_size' => 'required|nullable',
        ]);

        $review = Review::create($request->all()); // Store the new review

        Mail::to($review->email)->send(new ReviewConfirmationMail($review));


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
            'burget_score' => 'required|integer|min:1|max:5',
            'quality_score' => 'required|integer|min:1|max:5',
            'schedule_score' => 'required|integer|min:1|max:5',
            'colloboration_score' => 'required|integer|min:1|max:5',
            'behind_collaboration' => 'required|nullable',
            'during_collaboration' => 'required|nullable',
            'improvements' => 'required|nullable',
            'service_category_id' => 'required|exists:service_categories,id',
            'recommend' => 'required|in:yes,no',
            'full_name' => 'required|nullable',
            'email' => 'required|nullable',
            'job_title' => 'required|nullable',
            'company_name' => 'required|nullable',
            'company_industry' => 'required|nullable',
            'company_size' => 'required|nullable',

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

    public function saveReview(Request $request)
    {
        // Ma'lumotlarni tekshirish
        $validatedData = $request->validate([
            'provider_id' => 'required|integer',
            'burget_score' => 'required|numeric|min:1|max:5',
            'quality_score' => 'required|numeric|min:1|max:5',
            'schedule_score' => 'required|numeric|min:1|max:5',
            'colloboration_score' => 'required|numeric|min:1|max:5',
            'behind_collaboration' => 'required|string',
            'during_collaboration' => 'required|string',
            'improvements' => 'required|string',
            'service_category_id' => 'required|integer',
            'recommend' => 'required|boolean',
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'job_title' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'company_industry' => 'required|string|max:255',
            'company_size' => 'required|string|max:255',
        ]);

        // Yangi review yaratish
        Review::create($validatedData);

        // Muvaffaqiyatli javob
        return response()->json(['message' => 'Ma\'lumotlar muvaffaqiyatli saqlandi!']);
    }


}
