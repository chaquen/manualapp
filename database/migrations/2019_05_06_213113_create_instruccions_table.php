<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstruccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instruccions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo_instruccion');
            $table->string('descripcion_instruccion');
            $table->string('imagen_instruccion')->nullable();
            $table->string('video_instruccion')->nullable();
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
        Schema::dropIfExists('instruccions');
    }
}
