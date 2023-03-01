<?php

use App\Http\Controllers\IdiomaControler;
use App\Http\Controllers\SistemaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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
Route::get('login',[SistemaController::class,'entrada'])->name("login");
Route::post('validar',[SistemaController::class, 'validar'])->name('validar');
Route::get('ropciones',[SistemaController::class, 'mopciones'])->name('nopciones');

Route::get('seleccionar',[IdiomaControler::class, 'seleccionar'])->name("seleccionar");
Route::post('procesar',[IdiomaControler::class, 'procesar'])->name("procesar");

Route::get('saludar',[IdiomaControler::class, 'saludar'])->name("saludar")->middleware("checaridioma");
Route::get('despedir',[IdiomaControler::class, 'despedir'])->name("despedir")->middleware("checaridioma");

Route::get('salir',[SistemaController::class, 'salir'])->name('salida');