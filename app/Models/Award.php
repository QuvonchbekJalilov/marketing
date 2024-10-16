<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    use HasFactory;

    protected $fillable = [
        'provider_id',
        'portfolio_id',
        'name',
        'category',
        'date',
    ];

    protected $casts = [
        'date' => 'date',
    ];

    public function provider()
    {
        return $this->belongsTo(User::class, 'provider_id');
    }

    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }
}
