@extends('layout.plantillabase')
@section('contenido')
<h2>EDITAR REGISTRO</h2>
<form action="/producto/{{$producto->id}}" method="POST">
    @csrf
    @method('PUT')
    
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">NOMBRE</label>
        <input type="text" class="form-control" id="nombre" placeholder="" name="nombre" value="{{$producto->producto_nombre}}">
    </div>
    
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">DESCRIPCION</label>
        <textarea class="form-control" id="descripcion" name="descripcion" rows="3">{{$producto->producto_descripcion}}</textarea>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">PRECIO</label>
        <input type="numeric" class="form-control" id="precio" name="precio" placeholder="" value="{{$producto->producto_precio}}">
    </div>
    <button type="submit" id="btnGuardar" class="btn btn-primary">Guardar</button>
    <a href="/producto" class="btn btn-dark">Cancelar</a>
</form>
@endsection