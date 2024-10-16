<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Models\ProviderCompany;
use App\Models\User;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ManagerController extends Controller
{
    /**
     * Display a listing of the managers.
     */
    public function index()
    {
        $provider = Auth::user(); // Assuming the logged-in user is the provider
    
        $providerCompany = ProviderCompany::where('provider_id', $provider->id)->first();
        $company = Company::where('id', $providerCompany->company_id)->first();
        // Get the provider's companies
        $providerCompanies = $provider->companies()->pluck('companies.id');
        // Fetch managers (users with role_id == 5) that belong to the same company as the provider
        $managers = User::where('role_id', 5)
            ->whereHas('companies', function ($query) use ($providerCompanies) {
                $query->whereIn('companies.id', $providerCompanies);
            })
            ->get();
    
        return view('provider.managers.index', compact('managers', 'company'));
    }

    /**
     * Show the form for creating a new manager.
     */
    public function create()
    {
        $provider = Auth::user();
        $companies = $provider->companies; // List the companies this provider is associated with
        return view('provider.managers.create', compact('companies'));
    }

    /**
     * Store a newly created manager in storage.
     */
    public function store(Request $request)
    {
        // Validate request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'company_id' => 'required|exists:companies,id', // Ensure the company exists
        ]);

        // Create new manager
        $manager = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role_id' => 5, // Set the role to manager
        ]);

        // Attach the manager to the provider's company
        ProviderCompany::create([
            'provider_id' => $manager->id,
            'company_id' => $request->input('company_id'),
        ]);

        return redirect()->route('managers.index')->with('success', 'Manager created successfully.');
    }

    /**
     * Display the specified manager.
     */
    public function show(string $id)
    {
        $manager = User::findOrFail($id);
        return view('provider.managers.show', compact('manager'));
    }

    /**
     * Show the form for editing the specified manager.
     */
    public function edit(string $id)
    {
        $manager = User::findOrFail($id);
        $provider = Auth::user();
        $companies = $provider->companies; // List the companies this provider is associated with
        return view('provider.managers.edit', compact('manager', 'companies'));
    }

    /**
     * Update the specified manager in storage.
     */
    public function update(Request $request, string $id)
    {
        $manager = User::findOrFail($id);

        // Validate request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $manager->id, // Allow the current email
            'password' => 'nullable|min:6|confirmed',
            'company_id' => 'required|exists:companies,id',
        ]);

        // Update manager details
        $manager->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->filled('password') ? Hash::make($request->input('password')) : $manager->password,
        ]);

        return redirect()->route('provider.managers.index')->with('success', 'Manager updated successfully.');
    }

    /**
     * Remove the specified manager from storage.
     */
    public function destroy(string $id)
    {
        $manager = User::findOrFail($id);

        // Detach the manager from provider companies
        ProviderCompany::where('provider_id', Auth::id())->where('company_id', $manager->companies()->pluck('companies.id'))->delete();

        // Delete the manager
        $manager->delete();

        return redirect()->route('provider.managers.index')->with('success', 'Manager deleted successfully.');
    }
}
