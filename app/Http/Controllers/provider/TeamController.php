<?php

namespace App\Http\Controllers\provider;

use App\Http\Controllers\Controller;
use App\Models\ProviderCompany;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
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
        $team = Team::whereIn('provider_id', $providerIds)->latest()->first();
    } else {
        // If the provider is not associated with any company, return an empty collection
        $team = collect();
    }

    return view('provider.team.index', compact('team'));
}



    public function create()
    {
        return view('provider.team.create');
    }

    
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:4048',
            'description' => 'required|string',
            'provider_id' => 'required|exists:users,id',
        ]);

        // Initialize $path to null
        $path = null;

        // Check if the request contains an image file and store it
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
        }

        // Create a new team with the validated data
        Team::create([
            'image' => $path,
            'description' => $validatedData['description'],
            'provider_id' => $validatedData['provider_id'],
        ]);

        // Redirect back to the teams index with a success message
        return redirect()->route('teams.index')->with('success', 'Team image successfully saved');
    }


    public function show(Team $team)
    {
        return view('provider.team.show', compact('team'));
    }

 
    public function edit(Team $team)
    {
        return view('provider.team.edit', compact('team'));
    }

  
    public function update(Request $request, Team $team)
    {
        $validatedData = $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4048',
            'description' => 'required|string',
            'provider_id' => 'required|exists:users,id',
        ]);

        // Check if the request contains an image file and store it
        if ($request->hasFile('image')) {
            Storage::delete($team->image);
            $path = $request->file('image')->store('images', 'public');
        }

        // Create a new team with the validated data
        $team->update([
            'image' => $path ?? $team->image,
            'description' => $validatedData['description'],
            'provider_id' => $validatedData['provider_id'],
        ]);

        // Redirect back to the teams index with a success message
        return redirect()->route('teams.index')->with('success', 'Team image successfully updated');
    }

    
    public function destroy(Team $team)
    {
        if ($team->image) {
            Storage::delete($team->image);
        }

        $team->delete();

        return redirect()->back()->with('success', 'team information successfully deleted');
    }
}
