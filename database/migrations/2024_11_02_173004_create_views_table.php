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
        Schema::create('views', function (Blueprint $table) {
            $table->id();
            $table->string('favicon_logo')->nullable(); // Circular image
            $table->string('title')->nullable();
            // $table->string('organization_name')->nullable();
            $table->string('greeting_message')->nullable();
            // $table->text('placeholder_text')->nullable();
            $table->string('tagline')->nullable();
            $table->string('introduction_banner_1')->nullable(); // Image (16:9)
            $table->string('introduction_banner_2')->nullable(); // Image (16:9)
            $table->string('introduction_banner_3')->nullable(); // Image (16:9)
            $table->string('introduction_banner_4')->nullable(); // Image (16:9)
            $table->string('quotes')->nullable();
            $table->string('quotesby')->nullable();
            $table->text('explanation')->nullable();
            $table->string('testimonial_title')->nullable();
            // $table->string('testimonial_image_1')->nullable(); // Image
            // $table->string('testimonial_image_2')->nullable(); // Image
            $table->string('contact_title')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('contact_phone_number')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('copyright_text')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('whatsapp_link')->nullable();
            $table->string('linktree_link')->nullable();
            $table->string('gmail_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('views');
    }
};
