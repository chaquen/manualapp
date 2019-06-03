<?php

use Illuminate\Database\Seeder;
use App\Manual;
use App\Instruccion;
use App\DetalleInstruccion;
use App\MultimediaInstrucciones;
use App\DetalleMultimediaInstrucciones;

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

        Manual::truncate();

        $idm=Manual::insertGetId(['nombre_manual'=>"metalbit",'logo_manual'=>'AzulMetalicoHor_logo.png','carpeta'=>'archivos/manual_metal_bit','url_app'=>'http://metalbit.co/core']);
        Instruccion::truncate();
        $ins1=Instruccion::insertGetId(['titulo_instruccion'=>'Ingresar a la app',
        					 'descripcion_instruccion'=>'Debes accedes a el link metalbit.co/core',
                              'id_manual'=>$idm]);
        					 
        MultimediaInstrucciones::create([
                'id_instruccion'=>$ins1,
                'tipo_multimedia_instruccion'=>'imagen',
                'multimedia_instruccion'=>'archivos/manual_metal_bit/Selection_003.png']
                );

        $ins2=Instruccion::insertGetId(['titulo_instruccion'=>'Registro a la app',
        					 'descripcion_instruccion'=>'Debes accedes a el link metalbit.co/core/register','id_manual'=>$idm]);

        MultimediaInstrucciones::create(['id_instruccion'=>$ins2,
                'tipo_multimedia_instruccion'=>'imagen'
                ,'multimedia_instruccion'=>'archivos/manual_metal_bit/Selection_004.png']);

        
        $dtins1=DetalleInstruccion::insertGetId(['titulo_detalle_instruccion'=>'Completar formulario',
        					 'descripcion_detalle_instruccion'=>'Debes completar el formulario',
        					  'id_instruccion'=>$ins2]);
        
        DetalleMultimediaInstrucciones::create(['id_detalle_instruccion'=>$dtins1,
                'tipo_detalle_multimedia_instruccion'=>'imagen'
                ,'detalle_multimedia_instruccion'=>'archivos/manual_metal_bit/Selection_008.png']);

        $dtins2=DetalleInstruccion::insertGetId(['titulo_detalle_instruccion'=>'Confirma tu correo',
        					 'descripcion_detalle_instruccion'=>'Ingresa a l correo suministrado y accede a neustro correo con tus datos de acceso','id_instruccion'=>$ins2]);
        
        DetalleMultimediaInstrucciones::create(['id_detalle_instruccion'=>$dtins1,
                'tipo_detalle_multimedia_instruccion'=>'imagen'
                ,'detalle_multimedia_instruccion'=>'archivos/manual_metal_bit/Selection_008.png']);
        
    }
}
