@extends('plantillas.principal')
@section('contenido')
    <form action="{{route("procesar")}}" method="post">
        @csrf
        QUE IDIOMA DESEAS USAR:
        <input type="text" name="idioma" >
        <input type="submit" value="Enviar">    
    </form>    
@endsection