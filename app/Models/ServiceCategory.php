<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_uz',
        'name_ru',
        'name_en',
    ];

    public function subCategories()
    {
        return $this->hasMany(ServiceSubCategory::class);
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
}
