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
    return view('index');
});

Route::get('/produtos', 'ControllerProduto@index');
Route::get('/categorias', 'ControllerCategoria@index');
Route::get('/categorias/novo', 'ControllerCategoria@create');
Route::post('/categorias', 'ControllerCategoria@store');
Route::get('/categorias/remover/{id}', 'ControllerCategoria@destroy');
Route::get('/categorias/editar/{id}', 'ControllerCategoria@edit');
Route::post('/categorias/{id}', 'ControllerCategoria@update');