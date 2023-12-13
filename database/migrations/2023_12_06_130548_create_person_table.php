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
        Schema::create('person', function (Blueprint $table) {
            $table->increments('id');

            $table->string('dni', 8);
            $table->string('foto');
            $table->string('apell_pat', 200);
            $table->string('apell_mat', 200);
            $table->string('nombre', 200);
            $table->string('sexo', 200);
            $table->string('ruc', 200);
            $table->string('nivel_educ', 200);
            $table->string('fech_nac', 200);
            $table->string('nacionalidad', 200);
            $table->string('telefono', 9);
            $table->string('email_per', 200);
            $table->string('email_lab', 200);
            $table->string('telefono_emerg', 9);
            $table->string('id_dist_nac', 200);
            $table->string('est_civ', 200);
            $table->string('id_dist_dom', 200);
            
            $table->string('dirc_dom', 200);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('person');
    }
};
