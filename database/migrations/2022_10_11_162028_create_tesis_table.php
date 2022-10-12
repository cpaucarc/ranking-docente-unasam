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
        Schema::create('tesis', function (Blueprint $table) {
            $table->id();
            $table->string("titulo");
            $table->string("tesista_dni", 8);
            $table->string("tesista_nombre");
            $table->string("num_resolucion_asignacion", 50)->nullable();
            $table->unsignedTinyInteger("estado_ejecucion");
            $table->unsignedTinyInteger("estado_validacion")->default(1);
            $table->date("fecha_registro");
            $table->date("fecha_validacion")->nullable();
            $table->text("observacion")->nullable();

            $table->foreignId('docente_id')->constrained(); // asesor
            $table->foreignId('documento_id')->constrained(); // resolucion
            $table->foreignId('escuela_id')->constrained();
            $table->foreignId('semestre_id')->constrained();
            $table->foreignId('user_id')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tesis');
    }
};
