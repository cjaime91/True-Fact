<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaTfAgentes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tf_agentes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo',30);
            $table->string('razon_social',200);
            $table->string('direccion',125);
            $table->string('telefono',20);
            $table->string('correo',60);
            $table->unsignedInteger('ciudad_id');
            $table->foreign('ciudad_id','fk_ciudad_agente')->references('id')->on('tf_ciudades')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('estado_id');
            $table->foreign('estado_id','fk_estado_agente')->references('id')->on('tf_estados')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('tf_agentes');
    }
}
