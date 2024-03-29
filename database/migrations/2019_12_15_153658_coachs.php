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
        Schema::create('coachs', function (Blueprint $table) {

            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->unsignedBigInteger('id_sport');
            $table->string('photo_path')->nullable();
            $table->timestamps();
            $table->foreign('id_sport')->references('id')->on('sports')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coachs');
    }
};