<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('provider_id')->constrained('users', 'id')->cascadeOnDelete();
            $table->foreign('service_category_id')->references('id')->on('service_categories')->onDelete('cascade');
            $table->integer('burget_score'); // integer baholash qiymatlari uchun
            $table->integer('quality_score');
            $table->integer('schedule_score');
            $table->integer('colloboration_score');
            $table->text('behind_collaboration'); // uzun matn saqlash uchun text
            $table->text('during_collaboration');
            $table->text('improvements')->nullable(); // optional ustun
            $table->string('recommend'); // tavsiya qiladimi yoki yo'q boolean qiymat
            $table->string('full_name'); // mijozning to'liq ismi
            $table->string('email'); // email manzil
            $table->string('job_title')->nullable(); // ish unvoni
            $table->string('company_name')->nullable(); // kompaniya nomi
            $table->string('company_industry')->nullable(); // kompaniya sohasi
            $table->string('company_size')->nullable(); // kompaniya hajmi
            $table->timestamps(); // created_at va updated_at maydonlari uchun
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
