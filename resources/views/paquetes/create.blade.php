@extends('plantillas.principal')
@section('contenido')


<form action="{{route('paquetes.store')}}" method="post">
    @csrf
    <label for='id'>ID</label>
    <input type='text' name='id' id='id'>
    <br>
    <label for='nombre'>Nombre</label>
    <input type='text' name='nombre' id='nombre'>
    <br>
    <input type="submit" value="GUARDAR">
</form>


@endsection