<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'provider_id',
        'service_sub_category_id',
        'work_title',
        'multi_image_video',
        'budget',
        'start_date',
        'end_date',
        'introduction',
        'challenges',
        'solution',
        'impact',
        'source_link',
    ];

    protected $casts = [
        'multi_image_video' => 'array',
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    public function provider()
    {
        return $this->belongsTo(User::class, 'provider_id');
    }

    public function subCategory()
    {
        return $this->belongsTo(ServiceSubCategory::class,'service_sub_category_id');
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'portfolio_skills');
    }

    public function clients()
    {
        return $this->hasMany(PortfolioClient::class);
    }

    public function awards()
    {
        return $this->hasMany(Award::class);
    }
}
