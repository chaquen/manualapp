<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','InstruccionesController@index');
Route::resource('instrucciones','InstruccionesController');

Route::resource('detalle_instrucciones','DetalleInstruccionesController');

Route::post('subir_imagenes_instrucciones','InstruccionesController@subir_imagenes');
Route::post('subir_imagenes_idetalles','InstruccionesController@subir_imagenes');
Route::post('agregar_video_instruccion/{id}','InstruccionesController@agregar_video_instruccion');
Route::get('lista_instrucciones','InstruccionesController@lista_instrucciones');
/*
Route::get('/ver_instrucciones', function () {
    return view('instrucciones.index');
});

Route::get('/ver_detalle_instruccion', function () {
    return view('instrucciones.detalle');
})->name('ver_detalle_instruccion');
Route::get('/crear_instrucciones', function () {
    return view('instrucciones.crear');
});
*/