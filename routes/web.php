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
     return view('auth.login');
 }); // Pagina principal
// Route::get('/empleados', 'App\Http\Controllers\EmpleadosController@index');
// Route::get('/empleados/create', 'App\Http\Controllers\EmpleadosController@create');
// Route::get('/empleados/edit', 'App\Http\Controllers\EmpleadosController@edit');


Route::resource('empleados', 'App\Http\Controllers\EmpleadosController' )->middleware('auth');

Auth::routes(/*['register'=>false,'reset'=>false]*/); // Descomentar si se quiere  utilizar la opcion para registro y 
                                                      // resetear contra

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
