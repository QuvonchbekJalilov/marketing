<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'provider_id', 'linkedin', 'youtube', 'facebook', 'twitter', 
        'instagram', 'telegram', 'pinterest'
    ];

    /**
     * A contact belongs to a provider (user).
     */
    public function provider()
    {
        return $this->belongsTo(User::class, 'provider_id');
    }
}
