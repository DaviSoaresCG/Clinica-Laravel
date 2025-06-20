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
        Schema::create('animals', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nome', 255);
            $table->string('path_imagem');
            $table->unsignedBigInteger('especie_id');
            $table->unsignedBigInteger('raca_id');
            $table->unsignedBigInteger('dono_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
