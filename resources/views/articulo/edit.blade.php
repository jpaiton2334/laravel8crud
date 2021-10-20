@extends('layouts.plantillabase')

@section('contenido')
<h2>EDITAR REGISTROS</h2>
<form action="/articulos/{{$articulo->id}}" method="POST">
@csrf
@method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">CODIGO</label>
    <input type="text" name="codigo" class="form-control" id="codigo"  value="{{$articulo->codigo}}" tabindex="1">
  
  </div>
  <div class="mb-3">
    <label for="" class="form-label">DESCRIPCION</label>
    <input type="text" name="descripcion" class="form-control" id="descripcion" value="{{$articulo->descripcion}}" tabindex="2">
  
  </div>
  <div class="mb-3">
    <label for="" class="form-label">CANTIDAD</label>
    <input type="number" name="cantidad" class="form-control" id="cantidad" value="{{$articulo->cantidad}}" tabindex="3">
  
  </div>
  <div class="mb-3">
    <label for="" class="form-label">PRECIO</label>
    <input type="number" name="precio"class="form-control" step="any" value="0.00" value="{{$articulo->precio}}" id="precio" tabindex="4">
  
  </div>
  <a href="/articulos" class="btn btn-secondary" tabindex="5">CANCELAR</a>
  <button type="submit" class="btn btn-primary">GUARDAR</button>
</form>

@endsection