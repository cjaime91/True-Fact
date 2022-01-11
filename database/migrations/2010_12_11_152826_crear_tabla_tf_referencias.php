<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaTfReferencias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tf_referencias', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('agente_id');
            $table->foreign('agente_id','fk_agente_referencia')->references('id')->on('tf_agentes')->onDelete('restrict')->onUpdate('restrict');
            $table->string('referencia_aviomar',20);
            $table->string('referencia_agente',20);
            $table->string('contacto', 100);
            $table->string('correo');
            $table->unsignedInteger('ciudad_or_id');
            $table->foreign('ciudad_or_id','fk_ciudad_or_referencia')->references('id')->on('tf_ciudades')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('ciudad_ds_id');
            $table->foreign('ciudad_ds_id','fk_ciudad_ds_referencia')->references('id')->on('tf_ciudades')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('ttrasn_id');
            $table->foreign('ttrasn_id','fk_tipo_transporte_referencia')->references('id')->on('tf_tipo_transporte')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('responsable_id');
            $table->foreign('responsable_id','fk_tipo_responsable_referencia')->references('id')->on('tf_responsable')->onDelete('restrict')->onUpdate('restrict');
            $table->double('volumen',20,2);
            $table->double('peso',20,2);
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
        Schema::dropIfExists('tf_referencias');
    }
}
