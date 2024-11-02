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

    public function __get($key)
    {
        // Foydalanuvchi tanlagan tilni olish
        $locale = app()->getLocale();


        // Tilga mos maydon nomini yaratish (masalan: 'name_uz', 'description_en')
        $localizedField = $key . '_' . $locale;

        // Agar bu tilga mos maydon mavjud bo'lsa, shu qiymatni qaytarish
        if (array_key_exists($localizedField, $this->attributes)) {

            return $this->attributes[$localizedField];
        }

        // Aks holda, asosiy qiymatini qaytarish
        return parent::__get($key);
    }

    public function category()
    {
        return $this->belongsTo(ServiceCategory::class, 'service_category_id');
    }

    public function skills(){
        return $this->hasMany(Skill::class, 'service_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'service_sub_category_id');
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class, 'service_sub_category_id');
    }

}

