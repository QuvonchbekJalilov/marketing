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
        Schema::create('portfolio_clients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('portfolio_id')->constrained('portfolios', 'id')->cascadeOnDelete();
            $table->foreignId('sector_id')->constrained('sectors', 'id')->cascadeOnDelete();
            $table->string('company_name');
            $table->string('location');
            $table->string('geographic_scope');
            $table->string('audience');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolio_clients');
    }
};
