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
        Schema::create('sports', function (Blueprint $table) {

            $table->id();
            $table->string('nom');
            $table->unsignedBigInteger('id_coach');
            $table->unsignedBigInteger('id_seance');

            $table->foreign('id_coach')->references('id')->on('coachs')->onDelete('cascade');
            $table->foreign('id_seance')->references('id')->on('seances')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sports');
    }
};
