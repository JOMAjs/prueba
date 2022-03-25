<?php

use Illuminate\Support\Facades\Route;

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

Route::get('tareas', 'TareasController@index')->name('tarea.home');
Route::post('tareas-formulario','TareasController@show')->name('tarea.abrir-formulario');
Route::post('tareas-guardar', 'TareasController@create')->name('tarea.guardar');
Route::post('tareas-eliminar','TareasController@destroy')->name('tarea.eliminar');

/////////////////////////////////
//////////// Reporte ///////////
Route::get('reporte', 'TareasController@reporte')->name('tarea.reporte');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
