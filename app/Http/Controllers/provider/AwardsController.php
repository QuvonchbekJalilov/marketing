<?php

namespace App\Http\Controllers\provider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Award;

class AwardsController extends Controller
{
   
    public function index()
    {
        $awards = Award::all(); // Retrieve all awards
        return view('provider.awards.index', compact('awards'));
    }

    
    public function create()
    {
        return view('provider.awards.create'); // Render the form for creating an award
    }

    
    public function store(Request $request)
    {
        // Validate the input data
        $request->validate([
            'provider_id' => 'required|exists:users,id', // assuming 'provider_id' is a User ID
            'portfolio_id' => 'required|exists:portfolios,id', // assuming 'portfolio_id' is from the portfolios table
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        // Create the new award
        Award::create($request->all());

        return redirect()->route('awards.index')->with('success', 'Award created successfully!');
    }

    
    public function show(string $id)
    {
        $award = Award::findOrFail($id);
        return view('provider.awards.show', compact('award'));
    }

    
    public function edit(string $id)
    {
        $award = Award::findOrFail($id);
        return view('provider.awards.edit', compact('award'));
    }

    
    public function update(Request $request, string $id)
    {
        // Validate the input data
        $request->validate([
            'provider_id' => 'required|exists:users,id',
            'portfolio_id' => 'required|exists:portfolios,id',
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        // Find the award and update it
        $award = Award::findOrFail($id);
        $award->update($request->all());

        return redirect()->route('awards.index')->with('success', 'Award updated successfully!');
    }

   
    public function destroy(string $id)
    {
        $award = Award::findOrFail($id);
        $award->delete();

        return redirect()->route('awards.index')->with('success', 'Award deleted successfully!');
    }
}
