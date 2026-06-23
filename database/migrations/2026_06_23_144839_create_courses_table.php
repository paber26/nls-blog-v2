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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('full_title')->nullable();
            $table->string('subject')->nullable();
            $table->string('category')->nullable();
            $table->string('level')->nullable();
            $table->string('price')->nullable();
            $table->string('enrolled')->nullable();
            $table->string('last_updated')->nullable();
            $table->boolean('certificate')->default(false);
            $table->string('instructor')->nullable();
            $table->string('instructor_role')->nullable();
            $table->text('short_description')->nullable();
            $table->text('about')->nullable();
            $table->json('highlights')->nullable();
            $table->json('disclaimer_sources')->nullable();
            $table->json('tags')->nullable();
            $table->json('content_sections')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
