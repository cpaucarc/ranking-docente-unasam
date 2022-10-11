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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string("dni", 8)->unique();
            $table->string("apellidos", 150);
            $table->string("nombres", 150);
            $table->string("correo", 75)->nullable()->unique();
            $table->string("celular", 9)->nullable()->unique();
            $table->tinyInteger("genero");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
};
