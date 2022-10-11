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
        Schema::create('responsabilidad_social', function (Blueprint $table) {
            $table->id();
            $table->string("titulo");
            $table->string("lugar");
            $table->string("num_resolucion", 50)->nullable();
            $table->date("fecha_inicio");
            $table->date("fecha_fin");
            $table->unsignedTinyInteger("estado_ejecucion");
            $table->unsignedTinyInteger("estado_validacion");
            $table->date("fecha_registro");
            $table->date("fecha_validacion")->nullable();
            $table->text("observacion")->nullable();

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
        Schema::dropIfExists('responsabilidad_social');
    }
};
