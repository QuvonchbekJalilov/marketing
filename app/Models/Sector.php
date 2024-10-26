<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_uz',
        'name_ru',
        'name_en',
    ];

    public function portfolioClients()
    {
        return $this->hasMany(PortfolioClient::class);
    }

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
}
