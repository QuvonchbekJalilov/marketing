<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = ['name','service_id'];

    public function service(){
        return $this->belongsTo(ServiceSubCategory::class, 'service_id');
    }
    public function services()
    {
        return $this->belongsToMany(Service::class, 'service_skills');
    }

    public function portfolios()
    {
        return $this->belongsToMany(Portfolio::class, 'portfolio_skills');
    }
}
