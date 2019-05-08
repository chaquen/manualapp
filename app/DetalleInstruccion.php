<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleInstruccion extends Model
{
    //
    protected $fillable = [
        'titulo_detalle_instruccion', 'descripcion_detalle_instruccion', 'imagen_detalle_instruccion','video_detalle_instruccion','id_instruccion'
    ];

    public function instruccion(){
    	return $this->belongsTo(Instruccion::class,'id');
    }
}
