<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['provider_id', 'client_id', 'scoro', 'description', 'review_source', 'status'];

    
    public function provider()
    {
        return $this->belongsTo(User::class, 'provider_id');
    }

   
    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }
}
