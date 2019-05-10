<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMultimediaInstruccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multimedia_instrucciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_instruccion');
            $table->enum('tipo_multimedia_instruccion',['nota','video','imagen']);
            $table->string('multimedia_instruccion');
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
        Schema::dropIfExists('multimedia_instrucciones');
    }
}
