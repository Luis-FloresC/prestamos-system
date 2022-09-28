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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',60);
            $table->string('apellido',60);
            $table->string('dni',13);
            $table->date('fechaNacimiento');
            $table->string('correo',60)->unique();
            $table->string('telefono',20)->nullable();
            $table->string('lugarTrabajo',50);
            $table->tinyInteger('estado')->default(1)->comment('0: Deshabilitado, 1: Habilitado');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
};
