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
        Schema::create('provider_companies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('provider_id')->constrained('users', 'id')->cascadeOnDelete();
            $table->foreignId('company_id')->constrained('companies', 'id')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('provider_companies');
    }
};
