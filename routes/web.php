<?php

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

/*
Route::get('/', function () {
    return view('Sistema.entrada');
    return view('principal');
//    return view('welcome');
});
*/
Route::get('/',[SistemaController::class,'entrada']);
Route::post('validar',[SistemaController::class, 'validar'])->name('validar');


Route::post('procesar', function (Request $solicitud){
    //echo "dependiendo el idioma asi te saludaré";
    $lenguaje = $solicitud->input('idioma');
    //dump($lenguaje);
    switch ($lenguaje) {
        case 'español':
            return view('saludos.español');
            break;
        case 'frances':
            return view('saludos.frances');
            break;
        case 'italiano':
            return view('saludos.italiano');
            break;
        default:
            echo "Disculpa ese idioma no lo hablo.";
            break;
    }
})->name('otro');


Route::get('saludar/{nombre}', function ( $nombre){
    return view('saludos.español',compact('nombre'));
})->name('r1');
Route::get('salutare/{nombre}', function ($nombre){
    return view('saludos.italiano')->with('nombre',$nombre);
})->name('r2');
Route::get('saluer/{nombre?}', function ($nombre= null){
    return view('saludos.frances',['nombre' => $nombre]);
})->name('r3');