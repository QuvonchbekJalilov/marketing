<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('provider_id')->constrained('users', 'id')->cascadeOnDelete();
            $table->foreignId('service_sub_category_id')->constrained('service_sub_categories', 'id')->cascadeOnDelete();
            $table->string('work_title');
            $table->json('multi_image_video');
            $table->string('budget')->nullable();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->text('introduction')->nullable();
            $table->text('challenges')->nullable();
            $table->text('solution')->nullable();
            $table->text('impact')->nullable();
            $table->string('source_link')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
