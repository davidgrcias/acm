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
        Schema::dropIfExists('team_members');
        Schema::create('team_members', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200); // Maximum length as per form validation
            $table->string('member_image')->nullable(); // Allows null as it might not be provided
            $table->string('role', 100); // Maximum length as per form validation
            $table->integer('order')->unique(); // Ensures that each member has a unique order
            $table->timestamps(); // Includes created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_members');
    }
};
