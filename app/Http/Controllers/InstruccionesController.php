<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instruccion;


class InstruccionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('instrucciones.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('instrucciones.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('instrucciones.detalle')
                ->with('instrucciones',Instruccion::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function subir_imagenes(){
        //ini
         $url=$request->file('file');

        
        $filename = $request->file('file')->move('archivos/');

        $newname="/archivoexcel.".explode(".",$_FILES['file']['name'])[1];

        rename($filename,realpath(dirname($filename)).$newname);
        $datos=ControlProceso::obtener_datos_archivo($newname);
       
        $i=0;
        $rep=0;
        foreach($datos as $d ){
            //dump($d);
            $fecha=array_reverse(explode("-",explode("\n",$d[9])[1]));
            
            $fecha=ControlProceso::validar_fecha($fecha);
            $pro=ControlProceso::where('link_proceso',$d[2])->get();
            if(count($pro)==0){
                ControlProceso::create([
                    'numero_proceso'=>$d[1],
                    'link_proceso'=>$d[2],
                    'tipo_proceso'=>$d[3],
                    'estado_proceso'=>$d[4],
                    'entidad'=>$d[5],
                    'objeto'=>$d[6],
                    'dpto_ciudad'=>$d[7],
                    'cuantia'=>explode('$',$d[8])[1],
                    'fecha_apertura'=>implode('-',$fecha),
                    'id_usuario_asignado'=>$request['usuario'],
                    'id_empresa'=>$request['empresa'],                
                    
                ]);
                $i++;
            }else{
                $rep++;
            }
             
        }
        $msn="";
        if($rep>0){
            $msn=" y se identificaron ".$rep." procesos repetidos los cuales no se agregaron al sistema.";
        }else{
            $msn=".";
        }
        return  response()->json(['respuesta'=>true,'mensaje'=>'Se han agregado ']);
        //end
    }
}
