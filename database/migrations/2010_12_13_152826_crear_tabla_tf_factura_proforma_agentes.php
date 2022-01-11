<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaTfFacturaProformaAgentes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tf_factura_proforma_agentes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('factura_agente', 15);
            $table->string('doc_aviomar', 20);
            $table->unsignedInteger('agente_id');
            $table->foreign('agente_id', 'fk_agente_factura')->references('id')->on('tf_agentes')->onDelete('restrict')->onUpdate('restrict');
            $table->date('fecha_factura');
            $table->unsignedInteger('plazo_id');
            $table->foreign('plazo_id', 'fk_plazo_factura_agente')->references('id')->on('tf_plazos')->onDelete('restrict')->onUpdate('restrict');
            $table->string('referencia_agente', 30);
            $table->string('referencia_aviomar', 30);
            $table->string('cliente', 60);
            $table->double('valor', 20, 2);
            $table->double('pagado', 20, 2);
            $table->double('pendiente', 20, 2);
            $table->string('valor_letas', 100);
            $table->unsignedInteger('estado_id');
            $table->foreign('estado_id', 'fk_estado_factura_agente')->references('id')->on('tf_estados')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('tf_factura_proforma_agentes');
    }
}
