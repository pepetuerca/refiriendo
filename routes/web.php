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
Route::get('/inicio', function () {
    return "hola pijertos!!! bienvenidos al inicio";
});

Route::get('/inicio/{id}',function($id){
    return view("detalleCategoria",compact("id"));
});
Route::get('/categorias','CategoriesController@listarTodo'); //la ruta /categorias llama al metodo listarTodo del controlador

Route::get('/servicio/{id}','ServiceController@mostrarPorId');

Route::get('/servicios','ServiceController@listarTodo');
