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
        Schema::create('properties', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->char('number', 10);
            $table->foreignId('condominium_id')->constrained(table:'condominiums', indexName:'properties_condominium_id');
            $table->foreignId('owner_id')->constrained();
            $table->foreignId('aliquot_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
