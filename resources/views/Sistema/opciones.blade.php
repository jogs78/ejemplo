@extends('plantillas.principal')
@section('contenido')
<ul>
    <li><a href="{{route("saludar")}}">SALUDAR</a></li>
    <li><a href="{{route("despedir")}}">DESPEDIR</a></li>
    <li><a href="{{route("seleccionar")}}" >SELECCIONAR IDIOMA</a></li>
    <li><a href="{{route("salida")}}" >SALIR</a></li>
</ul>
@endsection
