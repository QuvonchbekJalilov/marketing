<?php

namespace App\Http\Controllers\provider;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Language;
use App\Models\Portfolio;
use App\Models\ProviderCompany;
use App\Models\Review;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
        /**
     * Display a listing of the resource.
     */

    public function dashboard(){
        $provider = Auth::user(); // Get the authenticated user
        $providerCompany = ProviderCompany::where('provider_id', $provider->id)->first();
        $company = Company::where('id', $providerCompany->company_id)->first();
        return redirect()->route('providers.profile', compact('company'));
    }
    public function profile()
    {
        $provider = Auth::user(); // Get the authenticated user
        $providerCompany = ProviderCompany::where('provider_id', $provider->id)->first();
        $company = Company::where('id', $providerCompany->company_id)->first();
        $portfolios = Portfolio::where('provider_id', $provider->id)->get();
        $reviews = Review::where('provider_id', $provider->id)->get();
        $services = Service::all();
        // $providers = Manager::where('provider_id', $user->id)->get();
        $categories = ServiceCategory::all();
        $languages = Language::all();
        $providerLanguageCodes = $provider->language()->pluck('code')->toArray(); // Get language codes associated with the provider

        return view('provider.profile.index', compact('provider', 'services', 'languages', 'providerLanguageCodes', 'providerCompany','company'));
    }

    public function show($id)
    {
        $provider = Auth::user();

        return view('admin.providers.profile.show', compact('provider'));
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'turnover' => 'nullable|integer|min:0',
            'teamSize' => 'required|integer|min:1',
            'tagline' => 'nullable|string|max:255',
            'founded' => 'nullable|date',
            'description' => 'nullable|string',
            'logo' => 'nullable|image|max:10240', // 10MB for logo
            'cover' => 'nullable|image|max:10240', // 10MB for cover
            'address' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:20',
            'email' => [
                'nullable',
                'email',
                'max:255',
            ],
            'password' => 'nullable|string|min:8|confirmed',
            'companies' => 'nullable|array', // Companies array input for provider
            'languages' => 'nullable|array', // Languages array input
        ]);
    
        // Retrieve the logged-in provider
        $provider = Auth::user(); // Assuming the logged-in user is the provider
        $providerCompany = ProviderCompany::where('provider_id', $provider->id)->first();
        $company = Company::where('id', $providerCompany->company_id)->first();
    
        // Update company details
        if ($company) {
            $companyData = [
                'name' => $request->input('name'),
                'turnover' => $request->input('turnover'),
                'number_of_team' => $request->input('teamSize'),
                'tagline' => $request->input('tagline'),
                'founded' => $request->input('founded'),
                'address' => $request->input('address'),
                'phone_number' => $request->input('phone_number'),
                'description' => $request->input('description'),
                'website' => $request->input('website'),
                'email' => $request->input('email'),
            ];
    
            // Handle company logo file upload
            if ($request->hasFile('logo')) {
                if ($company->logo) {
                    Storage::disk('public')->delete($company->logo); // Delete old logo
                }
                $companyData['logo'] = $request->file('logo')->store('logos', 'public'); // Save new logo
            }
    
            // Handle company cover file upload
            if ($request->hasFile('cover')) {
                if ($company->cover) {
                    Storage::disk('public')->delete($company->cover); // Delete old cover
                }
                $companyData['cover'] = $request->file('cover')->store('covers', 'public'); // Save new cover
            }
    
            // Update the company with the new data
            $company->update($companyData);
        }
    
        // Update provider details
        if ($request->has('languages')) {
            $languageCodes = $request->input('languages'); // Get language codes from request
            $languageIds = Language::whereIn('code', $languageCodes)->pluck('id')->toArray(); // Get language IDs
            $provider->language_id = $languageIds[0]; // Assuming single language
            $provider->save();
        }
    
        if ($request->has('companies')) {
            $companyIds = $request->input('companies');
            $provider->companies()->sync($companyIds); // Sync companies with provider
        }
    
        if ($request->filled('password')) {
            $validatedData['password'] = Hash::make($request->input('password'));
        }
    
    
        return redirect()->route('providers.profile')->with('success', __('messages.profile_update'));
    }
    
    
    
}
