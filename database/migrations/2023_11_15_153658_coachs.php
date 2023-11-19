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
            $table->string('last_name');
            $table->string('name');
            $table->unsignedBigInteger('id_seance');

            $table->foreign('id_seance')->references('id')->on('seances')->onDelete('cascade');
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
