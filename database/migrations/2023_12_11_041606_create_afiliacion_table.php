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
        Schema::create('afiliacion', function (Blueprint $table) {
            $table->increments('id');

            $table->string('reg_lab');
            $table->string('sctr_salud');
            $table->string('nom_eps');
            $table->string('sit_eps');

            $table->unsignedInteger('id_contrato');

            $table->foreign('id_contrato')->references('id')->on('contrato')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('afiliacion');
    }
};
