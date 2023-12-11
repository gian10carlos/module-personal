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
        Schema::create('discapacidad', function (Blueprint $table) {
            $table->increments('id');

            $table->string('descripcion');
            $table->string('entidad');
            $table->string('num_conadis');
            $table->string('fech_emi_con');
            $table->string('grad_discap');

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
        Schema::dropIfExists('discapacidad');
    }
};
