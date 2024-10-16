<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Creating roles
        $adminRole = Role::create(['name' => "admin"]);
        $providerRole = Role::create(['name' => "provider"]);
        $clientRole = Role::create(['name' => "client"]);
        $marketerRole = Role::create(['name' => 'marketer']);

        // Create provider user
        $provider = User::create([
            'language_id' => 1,
            'email' => 'provider@gmail.com',
            'password' => Hash::make('provider@gmail.com'),
            'role_id' => $providerRole->id, // Dynamically getting role ID
        ]);

        // Create company
        $company = new Company();
        $company->name = 'Company Name';
        $company->number_of_team = 10;
        $company->address = 'Company Address';
        $company->phone_number = '1234567890';
        $company->email = 'company@gmail.com';
        $company->website = 'company.com';
        $company->turnover = 1000000;
        $company->founded = '2022-01-01';
        $company->tagline = 'Company Tagline';
        $company->logo = 'logo.png';
        $company->cover = 'cover.png';
        $company->save();

        // Attach provider to company
        $provider->companies()->attach($company->id);

        // Create admin user
        User::create([
            'language_id' => 1,
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin@gmail.com'),
            'role_id' => $adminRole->id, // Dynamically getting role ID
        ]);

        // Create client user
        User::create([
            'language_id' => 1,
            'email' => 'client@gmail.com',
            'password' => Hash::make('client@gmail.com'),
            'role_id' => $clientRole->id, // Dynamically getting role ID
        ]);

        // Create marketer user
        User::create([
            'language_id' => 1,
            'email' => 'marketer@gmail.com',
            'password' => Hash::make('marketer@gmail.com'),
            'role_id' => $marketerRole->id, // Dynamically getting role ID
        ]);
    }
}
