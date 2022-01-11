<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaTfConceptosOld extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tf_conceptos_old', function (Blueprint $table) {
            $table->increments('id');
            $table->string('concepto', 150);
            $table->unsignedInteger('proforma_id');
            $table->foreign('proforma_id','fk_old_proformas')->references('id')->on('tf_factura_proforma_aviomar')->onDelete('restrict')->onUpdate('restrict');
            $table->double('valor', 20, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tf_conceptos_old');
    }
}
