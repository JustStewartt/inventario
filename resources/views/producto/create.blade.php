@extends('layouts.plantillabase');
@section('contenido')
<h2> Crear Registros </h2>
<form action="/productos" method="POST">
@csrf
<div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input name="nombre" type="text" class="form-control" id="nombre" tabindex="1">
</div>
<div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input name="cantidad" type="number" class="form-control" id="cantidad" tabindex="2">
  </div>
  <div class="mb-3 form-check">
  <label for="" class="form-label">Precio</label>
    <input name="precio" type="number" step="any" class="form-control" id="precio" tabindex="3">
  </div>
  <div class="mb-3 form-check">
  <label for="" class="form-label">Descripción</label>
    <input name="descripcion" type="text" class="form-control" id="descripcion" tabindex="4">
  </div>
  <a href="/productos" class="btn btn-danger" tabindex="5"> Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@endsection