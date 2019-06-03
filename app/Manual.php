<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manual extends Model
{
    //
    protected $fillable = [
        'nombre_manual', 'logo_manual','carpeta','url_app'
    ];
    public function instrucciones(){
    	return $this->hasMany(Instruccion::class,'id_manual');
    }
}
