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
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->text('content'); // Text content for history
            $table->string('image_one')->nullable(); // First image
            $table->string('image_two')->nullable(); // Second image
            $table->string('image_three')->nullable(); // Third image
            $table->integer('order')->unique(); // Ordering (must be unique)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('histories');
    }
};
