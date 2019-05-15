<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleInstruccion extends Model
{
    //
    protected $fillable = [
        'titulo_detalle_instruccion', 'descripcion_detalle_instruccion','id_instruccion'
    ];

    public function instruccion(){
    	return $this->belongsTo(Instruccion::class,'id');
    }

    public function detalles_de_la_instruccion(){
    	return $this->hasMany(DetalleMultimediaInstrucciones::class,'id_detalle_instruccion');
    }
    public function multimedia_del_detalle_de_la_instruccion(){
        return $this->hasMany(DetalleMultimediaInstrucciones::class,'id_detalle_instruccion');
    }
}
