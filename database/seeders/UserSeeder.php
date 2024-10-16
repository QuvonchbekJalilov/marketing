<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\ProviderCompany;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // admin user 
        User::create([
            'language_id' => 1, // English role
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 1, // admin role
        ]);

        // Create 10 providers
        for ($i = 1; $i <= 10; $i++) {
            // Create the provider user
            $provider = User::create([
                'name' => 'Provider ' . $i,
                'email' => 'provider' . $i . '@example.com',
                'password' => Hash::make('password'),
                'role_id' => 2, // Assuming 2 is the 'provider' role id
                'language_id' => 1, // Assuming 1 is a valid language ID
            ]);

            // Create a company for the provider
            $company = Company::create([
                'name' => 'Company ' . $i,
                'number_of_team' => rand(5, 50), // Random team size
                'address' => 'Address ' . $i,
                'phone_number' => '123-456-789' . $i,
                'email' => 'company' . $i . '@example.com',
                'website' => 'https://company' . $i . '.com',
                'turnover' => rand(100000, 500000), // Random turnover
                'founded' => '2020', // Example founded year
                'tagline' => 'The best company ' . $i,
                'logo' => 'logo' . $i . '.png', // Example logo
                'cover' => 'cover' . $i . '.jpg', // Example cover image
            ]);

            // Associate the provider with the company (using provider_companies pivot table)
            ProviderCompany::create([
                'provider_id' => $provider->id,
                'company_id' => $company->id,
            ]);
        }

        // Create 10 marketers
        for ($i = 1; $i <= 10; $i++) {
            // Create the marketer user
            $marketer = User::create([
                'name' => 'Marketer '. $i,
                'email' =>'marketer'. $i. '@example.com',
                'password' => Hash::make('password'),
                'role_id' => 4, // Assuming 4 is the'marketer' role id
                'language_id' => 1, // Assuming 1 is a valid language ID
            ]);
        }

        // Create 10 clients
        for ($i = 1; $i <= 10; $i++) {
            // Create the client user
            $client = User::create([
                'name' => 'Client '. $i,
                'email' => 'client'. $i. '@example.com',
                'password' => Hash::make('password'),
                'role_id' => 3, // Assuming 3 is the 'client' role id
                'language_id' => 1, // Assuming 1 is a valid language ID
            ]);
        }

    }
}
