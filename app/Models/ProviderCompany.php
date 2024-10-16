<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ProviderCompany extends Pivot
{
    protected $table = 'provider_companies';
    protected $fillable = ['provider_id', 'company_id'];

    /**
     * ProviderCompany belongs to a provider.
     */
    public function provider()
    {
        return $this->belongsTo(User::class, 'provider_id');
    }

    /**
     * ProviderCompany belongs to a company.
     */
    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
}
