<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaTfPagosAgentes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tf_pagos_agentes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('factura_agente_id');
            $table->foreign('factura_agente_id', 'fk_pago_factura_agente')->references('id')->on('tf_factura_proforma_agentes')->onDelete('restrict')->onUpdate('restrict');
            $table->dateTime('fecha_h_pago');
            $table->string('documento_pago');
            $table->double('valor_pagado', 20, 2);
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
        Schema::dropIfExists('tf_pagos_agentes');
    }
}
