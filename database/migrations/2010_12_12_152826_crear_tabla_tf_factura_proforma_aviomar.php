<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaTfFacturaProformaAviomar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tf_factura_proforma_aviomar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('factura',15);
            $table->unsignedInteger('referencia_id');
            $table->foreign('referencia_id','fk_referencia_factura')->references('id')->on('tf_referencias')->onDelete('restrict')->onUpdate('restrict');
            $table->string('factura_contable',10);
            $table->date('fecha_factura');
            $table->unsignedInteger('plazo_id');
            $table->foreign('plazo_id','fk_plazo_factura')->references('id')->on('tf_plazos')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('tipo_factura_id');
            $table->foreign('tipo_factura_id','fk_tipo_fact_factura')->references('id')->on('tf_tipo_factura')->onDelete('restrict')->onUpdate('restrict');
            $table->double('valor',20,2);
            $table->double('pagado',20,2);
            $table->double('pendiente',20,2);
            $table->string('valor_letas',100);
            $table->unsignedInteger('estado_id');
            $table->foreign('estado_id','fk_estado_factura')->references('id')->on('tf_estados')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('tf_factura_proforma_aviomar');
    }
}
