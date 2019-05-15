<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MultimediaInstrucciones;
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
       return view('instrucciones.detalle')
                ->with('instrucciones',Instruccion::all());
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
        $id=Instruccion::insertGetId(["titulo_instruccion"=>$request->input('titulo_instruccion'),"descripcion_instruccion"=>$request->input('descripcion_instruccion')]);
        foreach ($request->input('lista_archivos') as $key => $ruta) {
            MultimediaInstrucciones::create(['tipo_multimedia_instruccion'=>'imagen','id_instruccion'=>$id,'multimedia_instruccion'=>$ruta]);
        }
        if($request->input('video')!=false){


            MultimediaInstrucciones::create(['tipo_multimedia_instruccion'=>'video','id_instruccion'=>$id,'multimedia_instruccion'=>$request->input('url_video')]);

        }

        return response()->json(["id"=>$id]);

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

    public function subir_imagenes(Request $request){
        //ini
         $url=$request->file('file');
         //aqui solo se debe mover a la carpeta, la asociacion se hara cuando el usuariod e guardar
        
        if(config('app.debug')){
            $filename = $request->file('file')->move('archivos/manual_metal_bit');

            
            dump($filename,realpath(dirname($filename))."/".$_FILES['file']['name']);
            rename($filename,realpath(dirname($filename))."/".$_FILES['file']['name']);
        }
        
        $ruta="manual_metal_bit/".$_FILES['file']['name'];
        

        return  response()->json(['respuesta'=>true,'mensaje'=>'Se ha agregado una imagen',"ruta"=>$ruta]);
        
        //end
    }

    

    public function lista_instrucciones(){
        
        return  response()->json(Instruccion::all());
    }
}
