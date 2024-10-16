<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioClient extends Model
{
    use HasFactory;

    protected $fillable = [
        'portfolio_id',
        'sector_id',
        'company_name',
        'location',
        'geographic_scope',
        'audience',
    ];

    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }
}
