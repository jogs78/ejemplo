<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class IdiomaControler extends Controller
{
    public  function seleccionar(){
        return view("seleccionar");
    }
    public function procesar(Request $solicitud){
       $idioma = $solicitud->input("idioma");
       Session::put('idioma',$idioma);
       //session(['idioma' => $idioma]);
       return redirect("ropciones");
    }

    public function saludar(){
        $idioma =Session::get('idioma','español');
        switch ($idioma) {
            case 'frances':
                $mensaje = "bon jour";
                break;
            case 'italiano':
                $mensaje = "ciao";
                break;
            case 'ingles':
                $mensaje = "hello";
                break;
            default:
                $mensaje = "???";
            break;
        }
        $mensaje = $idioma . ":" . $mensaje;
        return view('saludar', compact('mensaje'));
    }
    public function despedir(){
        $idioma =Session::get('idioma','español');
        switch ($idioma) {
            case 'frances':
                $mensaje = "adieu";
                break;
            case 'italiano':
                $mensaje = "addio";
                break;
            case 'ingles':
                $mensaje = "bye";
                break;
            default:
                $mensaje = "adios";
            break;
        }
        return view('despedir', compact('mensaje'));
    }
}
