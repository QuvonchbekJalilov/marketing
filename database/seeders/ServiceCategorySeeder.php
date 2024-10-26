<?php

namespace Database\Seeders;

use App\Models\ServiceCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ServiceCategory::create([
            'name_uz' => 'Reklama va marketing',
            'name_ru' => 'Реклама и маркетинг',
            'name_en' => 'Adversting & maketing',
        ]);
        ServiceCategory::create([
            'name_uz' => 'Ijodiy va vizual',
            'name_ru' => 'Творческий и визуальный',
            'name_en' => 'Creative & visual',
        ]);
        ServiceCategory::create([
            'name_uz' => 'Rivojlanish va mahsulot',
            'name_ru' => 'Разработка и продукт',
            'name_en' => 'Development & product',
        ]);

    }
}
