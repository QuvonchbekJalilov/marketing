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
        return view('provider.reviews.index', compact('reviews', 'clients', 'service_categories')); // Return the view with reviews
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

            $id = $request->provider_id;
        // Avvalgi ma'lumotlarni sessiyaga saqlash
        if ($request->has('burget_score')) {
            // Describe your experience formasi
            $request->session()->put('review.burget_score', $request->input('burget_score'));
            $request->session()->put('review.quality_score', $request->input('quality_score'));
            $request->session()->put('review.schedule_score', $request->input('schedule_score'));
            $request->session()->put('review.colloboration_score', $request->input('colloboration_score'));
        } elseif ($request->has('behind_collaboration')) {
            // Personal Information formasi
            $request->session()->put('review.behind_collaboration', $request->input('behind_collaboration'));
            $request->session()->put('review.during_collaboration', $request->input('during_collaboration'));
            $request->session()->put('review.improvements', $request->input('improvements'));
            $request->session()->put('review.service_category_id', $request->input('service_category_id'));
            $request->session()->put('review.recommend', $request->input('recommend'));
        } else {
            // Final forma
            $request->session()->put('review.full_name', $request->input('full_name'));
            $request->session()->put('review.email', $request->input('email'));
            $request->session()->put('review.job_title', $request->input('job_title'));
            $request->session()->put('review.company_name', $request->input('company_name'));
            $request->session()->put('review.company_industry', $request->input('company_industry'));
            $request->session()->put('review.company_size', $request->input('company_size'));
            $request->session()->put('review.provider_id', $request->input('provider_id'));

            // Bazaga saqlash
            $reviewData = $request->session()->get('review');
            Review::create($reviewData);

            // Sessiyani tozalash
            $request->session()->forget('review');
            return redirect()->route('singleProviders',['id'=> $id])->with('success', 'Review muvaffaqiyatli saqlandi.');
        }

        // Keyingi forma ko'rinishini qaytarish
        return redirect()->back()->with('success', 'Ma\'lumotlar muvaffaqiyatli saqlandi.');
    }


}
