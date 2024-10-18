<?php

namespace App\Http\Controllers\provider;

use App\Http\Controllers\Controller;
use App\Models\ProviderCompany;
use App\Models\Service;
use App\Models\ServiceSubCategory;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    /**
     * Display a listing of the services.
     */
    public function index()
    {
        // Get the provider's company
        $providerCompany = ProviderCompany::where('provider_id', Auth::user()->id)->first();

        if ($providerCompany) {
            // Get all providers for this company
            $providerIds = ProviderCompany::where('company_id', $providerCompany->company_id)
                ->pluck('provider_id');
            
            // Get the latest team info for all providers in the company
            $services = Service::whereIn('provider_id', $providerIds)->get();
        } else {
            // If the provider is not associated with any company, return an empty collection
            $services = collect();
        }
        $skills = Skill::all();
        $serviceTypes = ServiceSubCategory::all();
        return view('provider.services.index', compact('services', 'skills', 'serviceTypes'));
    }

    /**
     * Show the form for creating a new service.
     */
    public function create()
    {
        $skills = Skill::all();
        $serviceTypes = ServiceSubCategory::all();
        return view('provider.services.create', compact('skills', 'serviceTypes'));
    }

    /**
     * Store a newly created service in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'service_sub_category_id' => 'required|exists:service_sub_categories,id',
            'price' => 'required',
            'description' => 'required|string|max:255',
            'skills' => 'array',
            'skills.*' => 'exists:skills,id',
        ]);
        if ($request->price == 'custom') {
            $request->merge(['price' => $request->custom_price]);
        }
        // If validation fails, return errors
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        // Create a new service
        $service = Service::create([
            'provider_id' => auth()->user()->id,
            'service_sub_category_id' => $request->service_sub_category_id,
            'price' => $request->price,
            'description' => $request->description,
        ]);

        // Attach selected skills
        if ($request->has('skills')) {
            $service->skills()->attach($request->skills);
        }

        // Redirect to the service index with success message
        return redirect()->route('service.index')->with('success', 'Service created successfully.');
    }

    /**
     * Display the specified service.
     */
    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('provider.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified service.
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        $skills = Skill::all();
        $serviceTypes = ServiceSubCategory::all();
        return view('provider.services.edit', compact('service', 'skills', 'serviceTypes'));
    }

    /**
     * Update the specified service in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'service_sub_category_id' => 'required|exists:service_sub_categories,id',
            'price' => 'required',
            'description' => 'required|string|max:255',
            'skills' => 'array',
            'skills.*' => 'exists:skills,id',
        ]);
        if ($request->price == 'custom') {
            $request->merge(['price' => $request->custom_price]);
        }
        // If validation fails, return errors
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        
        // Find the service and update it
        $service = Service::findOrFail($id);
        $service->update([
            'service_sub_category_id' => $request->service_sub_category_id,
            'price' => $request->price,
            'description' => $request->description,
        ]);

        // Update attached skills
        if ($request->has('skills')) {
            $service->skills()->sync($request->skills);
        }

        // Redirect to the service index with success message
        return redirect()->route('service.index')->with('success', 'Service updated successfully.');
    }

    /**
     * Remove the specified service from storage.
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        // Detach any associated skills before deleting
        $service->skills()->detach();
        
        // Delete the service
        $service->delete();

        // Redirect to the service index with success message
        return redirect()->route('service.index')->with('success', 'Service deleted successfully.');
    }
}
