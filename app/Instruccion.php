<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instruccion extends Model
{
    //
     protected $fillable = [
        'titulo_instruccion', 'descripcion_instruccion','id_manual'
    ];

    
    public function detalles_de_la_instruccion(){
    	return $this->hasMany(DetalleInstruccion::class,'id_instruccion');
    }

    public function multimedia_de_la_instruccion(){
    	return $this->hasMany(MultimediaInstrucciones::class,'id_instruccion');
    }

    public function manual(){
        return $this->belongsTo(Manual::class,'id');
    }

}
