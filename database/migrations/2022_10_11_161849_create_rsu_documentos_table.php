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
        Schema::create('rsu_documentos', function (Blueprint $table) {
            $table->id();
            $table->string("denominacion", 150);
            $table->unsignedTinyInteger("estado_validacion")->default(1);
            $table->date("fecha_validacion")->nullable();
            $table->text("observacion")->nullable();

            $table->foreignId('documento_id')->constrained();
            $table->foreignId('rsu_id')->constrained('responsabilidad_social');
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
        Schema::dropIfExists('rsu_documentos');
    }
};
