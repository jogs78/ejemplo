@extends('plantillas.principal')
@section('contenido')
    lista de paquetes
      
    {{-- 
    @dump($paquetes)
    --}}
        <table border="1">
            <thead>
                <th>CLAVE</th>
                <th>VALOR</th>
                <th>opciones</th>
            </thead>
            <tbody>
                @foreach ($paquetes as $clave => $valor)
                <tr>
                    <td>{{$clave}}</td>
                    <td>{{$valor}}</td>
                    <td>
                        <a href="{{route('paquetes.edit',$clave)}}">ACTUALIZAR</a>
                        <form action="{{route('paquetes.destroy', $clave)}}" method="post">
                            @method('DELETE')
                            @csrf
                            <input type="submit" value="BORRAR">
                        </form>
                        
                     </td>
                </tr>
                @endforeach
            </tbody>
        </table>


    <a href="{{route('paquetes.create')}}">AGREGAR UN NUEVO PAQUETE</a>
@endsection