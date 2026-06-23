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
        Schema::create('tryouts', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('label')->nullable();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('audience')->nullable();
            $table->string('access')->nullable();
            $table->string('mode')->nullable();
            $table->string('url')->nullable();
            $table->string('theme')->nullable();
            $table->string('surface')->nullable();
            $table->json('points')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tryouts');
    }
};
