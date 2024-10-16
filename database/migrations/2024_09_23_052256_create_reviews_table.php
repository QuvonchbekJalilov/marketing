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
            $table->foreignId('client_id')->constrained('users', 'id')->cascadeOnDelete();
            $table->integer('scoro');
            $table->string('description');
            $table->string('review_source')->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
