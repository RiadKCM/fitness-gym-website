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

        Schema::create('abonnements', function (Blueprint $table) {

            $table->id();
            $table->string('type_abonnement');
            $table->unsignedBigInteger('prix');
            $table->unsignedBigInteger('duree_validite');
            $table->string('description');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abonnements');
    }
};