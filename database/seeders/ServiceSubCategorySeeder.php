<?php

namespace Database\Seeders;

use App\Models\ServiceSubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ServiceSubCategory::create([
            'service_category_id' => '1',
            'name_uz' => 'reklama',
            'name_ru' => 'реклама',
            'name_en' => 'advertising',
        ]);
        ServiceSubCategory::create([
            'service_category_id' => '1',
            'name_uz' => 'Jamiyat boshqaruvi',
            'name_ru' => 'Управление сообществом',
            'name_en' => 'Community Management',
        ]);
        ServiceSubCategory::create([
            'service_category_id' => '1',
            'name_uz' => 'Kontent strategiyasi',
            'name_ru' => 'Стратегия контента',
            'name_en' => 'Content strategy',
        ]);

        ServiceSubCategory::create([
            'service_category_id' => '2',
            'name_uz' => '3D',
            'name_ru' => '3D',
            'name_en' => '3D',
        ]);
        ServiceSubCategory::create([
            'service_category_id' => '2',
            'name_uz' => '3D',
            'name_ru' => '3D',
            'name_en' => '3D',
        ]);
        ServiceSubCategory::create([
            'service_category_id' => '2',
            'name_uz' => 'Audio ishlab chiqarish',
            'name_ru' => 'Аудиопродукция',
            'name_en' => 'Audio production',
        ]);
        ServiceSubCategory::create([
            'service_category_id' => '2',
            'name_uz' => 'Kopirayterlik',
            'name_ru' => 'Копирайтинг',
            'name_en' => 'Copywriting',
        ]);

        ServiceSubCategory::create([
            'service_category_id' => '3',
            'name_uz' => 'Sun\'iy intellekt',
            'name_ru' => 'Искусственный интеллект',
            'name_en' => 'Artificial intelligence',
        ]);
        ServiceSubCategory::create([
            'service_category_id' => '3',
            'name_uz' => 'Ma\'lumotlar bo\'yicha konsalting',
            'name_ru' => 'Консалтинг данных',
            'name_en' => 'Data consulting',
        ]);
        ServiceSubCategory::create([
            'service_category_id' => '3',
            'name_uz' => 'Elektron tijorat',
            'name_ru' => 'E-Электронная коммерция',
            'name_en' => 'E-commerce',
        ]);
    }
}
