<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MultimediaInstrucciones extends Model
{
    //
    public function instruccion(){
    	return $this->belongsTo(Instruccion::class,'id');
    }

    public function scopeImagenes($query){

    	return $query->where('tipo_multimedia_instruccion','imagen');
    }

    public function scopeVideos($query){

    	return $query->where('tipo_multimedia_instruccion','video');
    }
}
