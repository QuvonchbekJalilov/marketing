<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'provider_id',
        'budget_score',
        'quality_score',
        'schedule_score',
        'collaboration_score',
        'behind_collaboration',
        'during_collaboration',
        'improvements',
        'service_sub_category_id',
        'recommend',
        'full_name',
        'email',
        'job_title',
        'company_name',
        'company_industry',
        'company_size',
        'status'
        ];


    public function provider()
    {
        return $this->belongsTo(User::class, 'provider_id');
    }


    // Review modeliga qo'shing
    public function serviceSubCategory()
    {
        return $this->belongsTo(ServiceSubCategory::class, 'service_sub_category_id');
    }

// ServiceSubCategory modelida service ga bog'lanish



}
