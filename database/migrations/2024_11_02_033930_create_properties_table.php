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
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->decimal('price', 8, 2);
            $table->float('area', 8, 2);
            $table->smallInteger('room')->unsigned(); // no max 10
            $table->smallInteger('parking')->unsigned(); // no max 10
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('cep');
            $table->timestamps(); // Adiciona created_at e updated_at
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
