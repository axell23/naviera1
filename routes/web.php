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

Route::resource('ing', 'IngresosController');
Route::resource('Reg', 'ProductoController');
Route::resource('cat', 'CategoriaController');
Route::resource('bah', 'BahiaController');

Route::get('/Ingresosactuales', 'IngresosController@index2')->name('Ingresos');
Route::get('/Productos', 'ProductoController@index2')->name('productos');
Route::get('/pdf/{id}', 'IngresosController@notaDeIngreso')->name('pdfingreso');