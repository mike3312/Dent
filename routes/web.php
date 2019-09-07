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

Route::get('/Ruta1', function(){
    return 'Hola mundo.';
});
Route::get('/name/{name}', function($name){
    return 'hola soy'.$name;
});
//Route::get('productos', 'ProductoController@store');
Route::Resource('productos', 'ProductoController');



