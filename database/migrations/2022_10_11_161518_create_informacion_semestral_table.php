<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informacion_semestral', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger("horas_semanales"); // actividades
            $table->decimal("promedio_parcial", 5, 2)->nullable(); // encuesta
            $table->decimal("promedio_final", 5, 2)->nullable(); // encuesta
            $table->unsignedTinyInteger("num_cursos");
            $table->unsignedTinyInteger("num_silabos_publicados")->nullable();
            $table->unsignedTinyInteger("num_notas_registardos")->nullable();

            $table->foreignId('docente_id')->constrained();
            $table->foreignId('semestre_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informacion_semestral');
    }
};
