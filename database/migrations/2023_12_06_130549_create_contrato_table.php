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
        Schema::create('contrato', function (Blueprint $table) {

            $table->increments('id');

            $table->string('tipo_trabaj');
            $table->string('cond_lab');
            $table->string('categ_remun');
            $table->string('ocupacion');
            $table->string('turno');
            $table->string('local_ubic');
            $table->string('fech_cont');
            $table->string('fech_inic');
            $table->string('fech_fin');
            $table->string('hora_entr');
            $table->string('hora_sali');
            $table->string('salario');

            $table->unsignedInteger('id_person');
            $table->unsignedInteger('id_area');
            $table->unsignedInteger('id_cargo');

            $table->foreign('id_person')->references('id')->on('person')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_area')->references('id')->on('area')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_cargo')->references('id')->on('cargo')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contrato');
    }
};
