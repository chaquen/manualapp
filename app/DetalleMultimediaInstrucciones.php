<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleMultimediaInstrucciones extends Model
{
    //
    public function detalle_instruccion(){
    	return $this->belongsTo(DetalleInstruccion::class,'id');
    }
}
