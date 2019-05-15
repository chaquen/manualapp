<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetalleInstruccion;
use App\DetalleMultimediaInstrucciones;


class DetalleInstruccionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $id=DetalleInstruccion::insertGetId(["titulo_detalle_instruccion"=>$request->input('titulo_detalle_instruccion'),"descripcion_detalle_instruccion"=>$request->input('descripcion_detalle_instruccion'),'id_instruccion'=>$request->input('id_instruccion')]);
        foreach ($request->input('lista_archivos') as $key => $ruta) {
            DetalleMultimediaInstrucciones::create(['tipo_detalle_multimedia_instruccion'=>'imagen','id_detalle_instruccion'=>$id,'detalle_multimedia_instruccion'=>$ruta]);
        }
        if($request->input('video')!=false){


            DetalleMultimediaInstrucciones::create(['tipo_detalle_multimedia_instruccion'=>'video','id_detalle_instruccion'=>$id,'detalle_multimedia_instruccion'=>$request->input('url_video')]);

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


}
