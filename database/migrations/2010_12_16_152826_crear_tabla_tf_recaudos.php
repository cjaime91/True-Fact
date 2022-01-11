<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaTfRecaudos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tf_recaudos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('factura_aviomar_id');
            $table->foreign('factura_aviomar_id', 'fk_pago_factura_aviomar')->references('id')->on('tf_factura_proforma_aviomar')->onDelete('restrict')->onUpdate('restrict');
            $table->datetime('fecha_recaudo');
            $table->string('documento');
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
        Schema::dropIfExists('tf_recaudos');
    }
}
