@extends('layout.plantillabase')

@section('contenido')
<h1 >VISTA INDEX</h1>
<div class="container">
    <a href="producto/create" class="btn btn-sm btn-primary">Crear</a>
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>DESCRIPCION</th>
                    <th>PRECIO</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->producto_nombre}}</td>
                    <td>{{$item->producto_descripcion}}</td>
                    <td>{{$item->producto_precio}}</td>
                    <td>
                        <form action="{{route('producto.destroy',$item->id)}}" method="POST">
                        <a href="/producto/{{$item->id}}/edit" class="btn btn-info">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection