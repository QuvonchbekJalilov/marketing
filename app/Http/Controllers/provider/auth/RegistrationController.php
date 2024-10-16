<?php

namespace App\Http\Controllers\provider\auth;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\ProviderCompany;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
     // Step 1: Show the company name form
     public function showCompanyNameForm()
     {
         return view('provider.auth.register.step1');
     }
 
     // Step 1: Handle company name submission
     public function handleCompanyName(Request $request)
     {
         $validatedData = $request->validate([
             'name' => 'required|string|max:255|unique:companies,name', // Ensures 'name' is unique in the 'companies' table
         ]);
 
         // Save company name in session
         $request->session()->put('company', $validatedData);
 
         return redirect()->route('providerRegisterStep2');
     }
 
     // Step 2: Show company additional details form
     public function showCompanyDetailsForm()
     {
         // You can pass additional data here if needed, such as supported languages or services.
         return view('provider.auth.register.step2');
     }
 
     // Step 2: Handle company details submission
     public function handleCompanyDetails(Request $request)
     {
         $validatedData = $request->validate([
             'company_address' => 'required|string|max:255',
             'company_website' => 'required|url|max:255',
             'company_phone' => 'required|string|max:15',
             'teamSize' => 'required|integer',
             'founded' => 'nullable|date', // Assuming 'founded' is a date column
             'tagline' => 'nullable|string|max:255',
         ]);
 
         // Get the existing company session data
         $companyData = $request->session()->get('company');
 
         // Merge the additional details with the company session data
         $companyData = array_merge($companyData, $validatedData);
 
         // Save the updated company data in the session
         $request->session()->put('company', $companyData);
 
         return redirect()->route('providerRegisterStep3');
     }
 
     // Step 3: Show manager account creation form
     public function showManagerForm()
     {
         return view('provider.auth.register.step3');
     }
 
     // Step 3: Handle manager account creation and save provider and company
     public function storeProviderWithCompany(Request $request)
     {
         $validatedData = $request->validate([
             'name' => 'required|string|max:255',
             'email' => 'required|string|email|max:255|unique:users,email',
             'password' => 'required|string|confirmed|min:8',
         ]);
 
         // Retrieve company data from the session
         $companyData = session()->get('company');
 
         if (! $companyData) {
             return redirect()->route('providerRegisterStep1')->with('error', 'Company data not found in session.');
         }
 
         // Create the company using the session data
         $company = Company::create([
             'name' => $companyData['name'],
             'address' => $companyData['company_address'],
             'phone_number' => $companyData['company_phone'],
             'website' => $companyData['company_website'],
             'number_of_team' => $companyData['teamSize'],
             'founded' => $companyData['founded'] ?? null,
             'tagline' => $companyData['tagline'] ?? null,
             // Add 'logo' and 'cover' fields if needed
         ]);
 
         // Create the user (provider)
         $user = User::create([
            'language_id' => 1,
            'role_id' =>2, 
             'name' => $validatedData['name'],
             'email' => $validatedData['email'],
             'password' => Hash::make($validatedData['password']),
         ]);
 
         // Associate the user with the company in the pivot table
         ProviderCompany::create([
             'provider_id' => $user->id,
             'company_id' => $company->id,
         ]);
 
         // Log the user (provider) in
         Auth::login($user);
 
         // Clear the session data related to company
         session()->forget('company');
 
         // Redirect to the provider's profile page with a success message
         return redirect()->route('providers.profile')->with('success', 'Profile updated successfully');
     }
}
