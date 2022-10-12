<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurados', function (Blueprint $table) {
            $table->id();
            $table->string("num_resolucion_asignacion", 50)->nullable();
            $table->date("fecha_registro");
            $table->unsignedTinyInteger("estado_validacion")->default(1);
            $table->date("fecha_validacion")->nullable();
            $table->text("observacion")->nullable();

            $table->foreignId('docente_id')->constrained(); // jurado
            $table->foreignId('documento_id')->constrained(); // resolucion
            $table->foreignId('tesis_id')->constrained('tesis');
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
        Schema::dropIfExists('jurados');
    }
};
