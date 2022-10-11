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
        Schema::create('investigacion_documentos', function (Blueprint $table) {
            $table->id();
            $table->string("denominacion", 150);
            $table->date("fecha_validacion")->nullable();
            $table->text("observacion")->nullable();

            $table->foreignId('documento_id')->constrained();
            $table->foreignId('investigacion_id')->constrained('investigaciones');
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
        Schema::dropIfExists('investigacion_documentos');
    }
};
