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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('instrucciones','InstruccionesController');


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