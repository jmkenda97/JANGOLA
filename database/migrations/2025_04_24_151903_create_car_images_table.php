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
        Schema::create('car_images', function (Blueprint $table) {
            $table->id();

            // Fix: Use 'cars' here because your table is named 'cars' in the database
            $table->foreignId('car_id')->constrained('cars')->onDelete('cascade');

            $table->string('image_path', 255);
            $table->integer('position');

            // Optional: Timestamps if you need them
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_images');
    }
};
