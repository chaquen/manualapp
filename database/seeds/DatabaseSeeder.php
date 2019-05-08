<?php

use Illuminate\Database\Seeder;
use App\Instruccion;
use App\DetalleInstruccion;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //$this->call(UsersTableSeeder::class);
         //
        Instruccion::truncate();
        $ins1=Instruccion::insertGetId(['titulo_instruccion'=>'Ingresar a la app',
        					 'descripcion_instruccion'=>'Debes accedes a el link metalbit.co/core',
        					 'imagen_instruccion'=>'archivos/manual_metal_bit',
        					 'video_instruccion'=>'']);

        $ins2=Instruccion::insertGetId(['titulo_instruccion'=>'Registro a la app',
        					 'descripcion_instruccion'=>'Debes accedes a el link metalbit.co/core/register',
        					 'imagen_instruccion'=>'archivos/manual_metal_bit/Selelction_004.png','video_instruccion'=>'']);


        DetalleInstruccion::create(['titulo_detalle_instruccion'=>'Completar formulario',
        					 'descripcion_detalle_instruccion'=>'Debes completar el formulario',
        					 'imagen_detalle_instruccion'=>'archivos/manual_metal_bit/Selelction_008.png',
        					 'video_detalle_instruccion'=>'',
        					 'id_instruccion'=>$ins2]);

        DetalleInstruccion::create(['titulo_detalle_instruccion'=>'Confirma tu correo',
        					 'descripcion_detalle_instruccion'=>'Ingresa a l correo suministrado y accede a neustro correo con tus datos de acceso',
        					 'imagen_detalle_instruccion'=>'archivos/manual_metal_bit/Selelction_012.png',
        					 'video_detalle_instruccion'=>"",
        					 'id_instruccion'=>$ins2]);
        
    }
}
