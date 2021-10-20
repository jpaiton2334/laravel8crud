@extends('layouts.plantillabase')

@section('contenido')
<h2>CREAR REGISTROS</h2>
<form action="/articulos" method="POST">
@csrf
  <div class="mb-3">
    <label for="" class="form-label">CODIGO</label>
    <input type="text" name="codigo" class="form-control" id="codigo" tabindex="1">
  
  </div>
  <div class="mb-3">
    <label for="" class="form-label">DESCRIPCION</label>
    <input type="text" name="descripcion" class="form-control" id="descripcion" tabindex="2">
  
  </div>
  <div class="mb-3">
    <label for="" class="form-label">CANTIDAD</label>
    <input type="number" name="cantidad" class="form-control" id="cantidad" tabindex="3">
  
  </div>
  <div class="mb-3">
    <label for="" class="form-label">PRECIO</label>
    <input type="number" name="precio"class="form-control" step="any" value="0.00" id="precio" tabindex="4">
  
  </div>
  <a href="/articulos" class="btn btn-secondary" tabindex="5">CANCELAR</a>
  <button type="submit" class="btn btn-primary">GUARDAR</button>
</form>

@endsection