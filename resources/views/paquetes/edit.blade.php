@extends('plantillas.principal')
@section('contenido')


<form action="{{route('paquetes.update', $paquete_encontrado->id)}}" method="post">
    @method('PUT')
    @csrf
    <label for='id'>ID</label>
    <input type='text' name='id' id='id' value="{{$paquete_encontrado->id}}">
    <br>
    <label for='nombre'>Nombre</label>
    <input type='text' name='nombre' id='nombre' value="{{$paquete_encontrado->nombre}}">
    <br>
    <input type="submit" value="ACTUALIZAR">
</form>


@endsection