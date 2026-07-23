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
        Schema::create('sara_information', function (Blueprint $table) {
            $table->id();

            $table->string('profile_image')->nullable();

            $table->json('goals')->nullable();

            $table->json('activities')->nullable();

            $table->json('specializations')->nullable();

            $table->string('intro_title')->nullable();

            $table->longText('intro_text')->nullable();

            $table->unsignedSmallInteger('experience_years')->default(0);

            $table->string('phone')->nullable();

            $table->string('whatsapp')->nullable();

            $table->string('instagram_username')->nullable();

            $table->string('email')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sara_information');
    }
};
