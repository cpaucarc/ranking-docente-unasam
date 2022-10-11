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
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();
            $table->string("codigo", 15)->nullable()->unique();
            $table->unsignedTinyInteger("grado");
            $table->unsignedTinyInteger("categoria");
            $table->unsignedTinyInteger("condicion");
            $table->unsignedTinyInteger("dedicacion");

            $table->foreignId('departamento_id')->constrained();
            $table->foreignId('persona_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docentes');
    }
};
