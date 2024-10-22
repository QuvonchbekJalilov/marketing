<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'provider_id',
        'burget_score',
        'quality_score',
        'schedule_score',
        'colloboration_score',
        'behind_collaboration',
        'during_collaboration',
        'improvements',
        'service_category_id',
        'recommend',
        'full_name',
        'email',
        'job_title',
        'company_name',
        'company_industry',
        'company_size',
        ];


    public function provider()
    {
        return $this->belongsTo(User::class, 'provider_id');
    }


    public function serviceCategory()
    {
        return $this->belongsTo(ServiceCategory::class, 'service_category_id');
    }




}
