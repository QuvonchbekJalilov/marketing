<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name', 'number_of_team', 'address', 'phone_number', 'email', 'description',
        'website', 'turnover', 'founded', 'tagline', 'logo', 'cover'
    ];

    /**
     * A company can have many providers (users).
     */
    public function providers()
    {
        return $this->belongsToMany(User::class, 'provider_companies', 'company_id', 'provider_id');
    }
}
