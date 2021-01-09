@extends('layouts.plantillabase');
@section('contenido')
<a href="productos/create" class="btn btn-primary"> CREAR </a>

<table class="table table-striped mt-4">
    <thead>
        <tr>
            <th scope="col"> ID </th>
            <th scope="col"> Nombre </th>
            <th scope="col"> Cantidad </th>
            <th scope="col"> Precio </th>
            <th scope="col"> Descripción </th>
            <th scope="col"> Acciones </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
        
        <tr>
            <td>{{$producto->id}}</td>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->cantidad}}</td>
            <td>{{$producto->precio}}</td>
            <td>{{$producto->descripcion}}</td>
            <td>
            <form action="{{route('productos.destroy', $producto->id)}}" method="POST">
            
                <a href="/productos/{{$producto->id}}/edit" class="btn btn-info"> Editar </a>
            @csrf
            @method('DELETE')
                <button type="submit" class="btn btn-danger"> Eliminar </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection