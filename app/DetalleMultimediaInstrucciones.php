<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleMultimediaInstrucciones extends Model
{
    //
    protected $fillable = [
        'tipo_detalle_multimedia_instruccion', 'id_detalle_instruccion', 'detalle_multimedia_instruccion'
    ];


    public function detalle_instruccion(){
    	return $this->belongsTo(DetalleInstruccion::class,'id');
    }
}
