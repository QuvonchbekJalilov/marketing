<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['provider_id', 'image', 'description'];

    /**
     * A team belongs to a provider (user).
     */
    public function provider()
    {
        return $this->belongsTo(User::class, 'provider_id');
    }
}
