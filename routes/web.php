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
    return view('prueba.vehiculo');
});

Route::resource('/', 'App\Http\Controllers\vehiculocontroler');
Route::resource('Propietario', 'App\Http\Controllers\PropietarioController');
Route::resource('Conductor', 'App\Http\Controllers\ConductorController');
Route::resource('Vehiculo', 'App\Http\Controllers\vehiculo_create');


