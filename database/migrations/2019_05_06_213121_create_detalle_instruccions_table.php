<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleInstruccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_instruccions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo_detalle_instruccion');
            $table->string('descripcion_detalle_instruccion');
            $table->string('imagen_detalle_instruccion')->nullable();
            $table->string('video_detalle_instruccion')->nullable();
            $table->integer('id_instruccion');
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
        Schema::dropIfExists('detalle_instruccions');
    }
}
