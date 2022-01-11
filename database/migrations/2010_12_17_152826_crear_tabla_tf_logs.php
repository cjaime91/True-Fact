<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaTfLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tf_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tabla_bd');
            $table->string('campo');
            $table->string('detalle');
            $table->string('dato_ant');
            $table->string('dato_post');
            $table->unsignedInteger('usuario_id');
            $table->foreign('usuario_id','fk_usuario_modifica')->references('id')->on('tf_usuarios')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('tf_logs');
    }
}
