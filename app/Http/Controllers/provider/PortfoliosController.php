<?php

namespace App\Http\Controllers\provider;

use App\Http\Controllers\Controller;
use App\Http\Requests\PortfolioRequest;
use App\Models\Portfolio;
use App\Models\PortfolioClient;
use App\Models\ProviderCompany;
use App\Models\Sector;
use App\Models\ServiceSubCategory;
use App\Models\User;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PortfoliosController extends Controller
{
    public function index()
    {
        // Get the provider's company
        $providerCompany = ProviderCompany::where('provider_id', Auth::user()->id)->first();

        if ($providerCompany) {
            // Get all providers for this company
            $providerIds = ProviderCompany::where('company_id', $providerCompany->company_id)
                ->pluck('provider_id');
            
            // Get the latest team info for all providers in the company
            $portfolios = Portfolio::whereIn('provider_id', $providerIds)->orderBy('id', 'DESC')
            ->paginate(20);;
        } else {
            // If the provider is not associated with any company, return an empty collection
            $portfolios = collect();
        }
        $services = ServiceSubCategory::all();


        

        $sectors = Sector::all();

        return view('provider.portfolios.index', compact('portfolios', 'services', 'sectors'));
    }

    public function create()
    {
        $providers = User::where('role_id', 2)->get();
        $services = ServiceSubCategory::all();
        $skills = Skill::all();
        $sectors = Sector::all();

        return view('provider.portfolios.create', compact('providers', 'services', 'skills', 'sectors'));
    }

    public function store(PortfolioRequest $request)
    {
        // Validate input data
        $validatedData = $request->validated();
    
        // Handle multi-image/video upload
        if ($request->hasFile('multi_image_video')) {
            $multiImageVideoPaths = [];
            foreach ($request->file('multi_image_video') as $file) {
                $multiImageVideoPaths[] = $file->store('portfolio_media', 'public');
            }
            $validatedData['multi_image_video'] = $multiImageVideoPaths;
        }
    
        // Create the portfolio
        $portfolio = Portfolio::create([
            'provider_id' => $validatedData['provider_id'],
            'service_sub_category_id' => $validatedData['service_sub_category_id'],
            'work_title' => $validatedData['work_title'],
            'multi_image_video' => isset($validatedData['multi_image_video']) ? json_encode($validatedData['multi_image_video']) : null,
            'budget' => $validatedData['budget'],
            'start_date' => $validatedData['start_date'],
            'end_date' => $validatedData['end_date'],
            'introduction' => $validatedData['introduction'],
            'challenges' => $validatedData['challenges'],
            'solution' => $validatedData['solution'],
            'impact' => $validatedData['impact'],
            'source_link' => $validatedData['source_link'],
        ]);
    
        // Attach skills to portfolio if any
        if ($request->has('skills')) {
            $portfolio->skills()->sync($validatedData['skills']);
        }
    
        // Store client information
        PortfolioClient::create([
            'portfolio_id' => $portfolio->id,
            'company_name' => $validatedData['company_name'],
            'location' => $validatedData['company_location'],
            'sector_id' => $validatedData['sector_id'], // Assuming sector is a string, modify this if it's a relation
            'geographic_scope' => $validatedData['geographic_scope'],
            'audience' => $validatedData['audience'],
        ]);
    
        return redirect()->route('portfolios.index')->with('success', 'Portfolio created successfully');
    }
    

    public function edit(Portfolio $portfolio)
    {
        $providers = User::where('role_id', 2)->get();
        $services = ServiceSubCategory::all();
        $skills = Skill::all();
        $sectors = Sector::all();
        $client = PortfolioClient::where('provider_id', $portfolio->provider_id)->first();
        return view('provider.portfolios.edit', compact('portfolio', 'providers', 'services', 'skills', 'sectors', 'client'));
    }

    public function update(PortfolioRequest $request, Portfolio $portfolio)
    {
        // Validate input data
        $validatedData = $request->validated();
    
        // Handle multi-image/video upload
        if ($request->hasFile('multi_image_video')) {
            $multiImageVideoPaths = [];
            foreach ($request->file('multi_image_video') as $file) {
                $multiImageVideoPaths[] = $file->store('portfolio_media', 'public');
            }
            $validatedData['multi_image_video'] = $multiImageVideoPaths;
        }
    
        // Update the portfolio
        $portfolio->update([
            'provider_id' => $validatedData['provider_id'],
            'service_sub_category_id' => $validatedData['service_sub_category_id'],
            'work_title' => $validatedData['work_title'],
            'multi_image_video' => isset($validatedData['multi_image_video']) ? json_encode($validatedData['multi_image_video']) : $portfolio->multi_image_video,
            'budget' => $validatedData['budget'],
            'start_date' => $validatedData['start_date'],
            'end_date' => $validatedData['end_date'],
            'introduction' => $validatedData['introduction'],
            'challenges' => $validatedData['challenges'],
            'solution' => $validatedData['solution'],
            'impact' => $validatedData['impact'],
            'source_link' => $validatedData['source_link'],
        ]);
    
        // Sync skills if any
        if ($request->has('skills')) {
            $portfolio->skills()->sync($validatedData['skills']);
        }
    
        // Update client information
        $portfolio->clients()->updateOrCreate(
            ['portfolio_id' => $portfolio->id],
            [
                'company_name' => $validatedData['company_name'],
                'location' => $validatedData['company_location'],
                'sector_id' => $validatedData['sector_id'], // Modify if needed
                'geographic_scope' => $validatedData['geographic_scope'],
                'audience' => $validatedData['audience'],
            ]
        );
    
        return redirect()->route('portfolios.index')->with('success', 'Portfolio updated successfully');
    }
    

    public function destroy(Portfolio $portfolio)
    {
        if ($portfolio->multi_image_video) {
            $multiImageVideoPaths = json_decode($portfolio->multi_image_video, true);
    
            if (is_array($multiImageVideoPaths)) {
                foreach ($multiImageVideoPaths as $file) {
                    Storage::disk('public')->delete($file);
                }
            }
        }
    
        $portfolio->skills()->detach();
    
        $portfolio->delete();
    
        return redirect()->route('portfolios.index')->with('success', 'Portfolio successfully deleted.');
    }
    

    public function show(Portfolio $portfolio)
    {
        return view('provider.portfolios.show', compact('portfolio'));
    }

    // In your controller (e.g., PortfolioController)
    public function getSkillsByService($serviceId)
    {
        // Assuming you have a Service model and each service has a 'skills' relationship
        $service = ServiceSubCategory::find($serviceId);

        if ($service) {
            return response()->json($service->skills); // Return skills as JSON
        }

        return response()->json([]);
    }

}
