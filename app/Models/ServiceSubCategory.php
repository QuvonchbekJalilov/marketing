<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceSubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_category_id',
        'name_uz',
        'name_ru',
        'name_en',
    ];

    public function category()
    {
        return $this->belongsTo(ServiceCategory::class, 'id');
    }

    public function skills(){
        return $this->hasMany(Skill::class, 'service_id');
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
