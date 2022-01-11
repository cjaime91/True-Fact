<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaTfConceptosProformas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tf_conceptos_proformas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('factura_proforma_aviomar_id');
            $table->foreign('factura_proforma_aviomar_id', 'fk_concepto_factura_aviomar')->references('id')->on('tf_factura_proforma_aviomar')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('factura_proforma_agente_id');
            $table->foreign('factura_proforma_agente_id', 'fk_concepto_factura_agente')->references('id')->on('tf_factura_proforma_agentes')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('concepto_id');
            $table->foreign('concepto_id', 'fk_concepto_proformas')->references('id')->on('tf_conceptos')->onDelete('restrict')->onUpdate('restrict');
            $table->string('detalle',150);
            $table->double('valor',20,2);
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
        Schema::dropIfExists('tf_conceptos_proformas');
    }
}
