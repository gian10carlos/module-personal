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
        Schema::create('asistencia_outs', function (Blueprint $table) {
            $table->increments('id');

            $table->string('fechaSalida');
            $table->string('horaSalida');

            $table->unsignedInteger('id_person');
            $table->foreign('id_person')->references('id')->on('person')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asistencia_outs');
    }
};