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
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger("num_sesiones");
            $table->unsignedTinyInteger("num_asistencias");
            $table->unsignedTinyInteger("semana");
            $table->date("fecha_inicio");
            $table->date("fecha_fin");

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
        Schema::dropIfExists('asistencias');
    }
};
