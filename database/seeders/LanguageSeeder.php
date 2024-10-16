<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Language::create([
            'name_uz' => 'Rus tili',
            'name_ru' => 'Русский',
            'name_en' => 'Russian',
            'code' => 'ru',
        ]);

        Language::create([
            'name_uz' => 'Ingliz tili',
            'name_ru' => 'Инглизкий',
            'name_en' => 'English',
            'code' => 'en',
        ]);

        Language::create([
            'name_uz' => 'O\'zbek tili',
            'name_ru' => 'Озбекский',
            'name_en' => 'Uzbek',
            'code' => 'uz',
        ]);
    }
}
