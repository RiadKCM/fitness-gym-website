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
        Schema::create('seances', function (Blueprint $table) {
            $table->id();
            $table->string('type_cours'); // type de la séance. collectif ou individuel
            $table->string('intensite');
            $table->unsignedBigInteger('capacite');
            $table->time('duree');
            $table->unsignedBigInteger('id_sport');
            $table->unsignedBigInteger('id_coach');

            $table->foreign('id_coach')->references('id')->on('coachs')->onDelete('cascade');
            $table->foreign('id_sport')->references('id')->on('sports')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seances');
    }
};