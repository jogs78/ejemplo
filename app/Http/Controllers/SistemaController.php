<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SistemaController extends Controller
{
    public function entrada(){
        return view('Sistema.entrada');
    }
    public function validar(Request $solicitud){
//        dump($solicitud->all());
        $usuario = $solicitud->input('usuario');
        $password = $solicitud->input('password');
        if($usuario==$password) echo "si puede entrar";
        else echo "no puede entrar";
    }
    public function saludar(){

    }
    public function salir(){

    }
}
