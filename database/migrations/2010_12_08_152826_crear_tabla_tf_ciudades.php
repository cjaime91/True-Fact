<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaTfCiudades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tf_ciudades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ciudad',30);
            $table->unsignedInteger('pais_id');
            $table->foreign('pais_id','fk_pais_ciudad')->references('id')->on('tf_paises')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('tf_ciudades');
    }
}
