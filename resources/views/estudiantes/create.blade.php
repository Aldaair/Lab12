@extends('layouts.plantilla')

@section('contenido')
<h2>CREAR REGISTROS</h2>

<form action="/estudiantes" method="POST">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Apellido</label>
    <input id="apellido" name="apellido" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Edad</label>
    <input id="edad" name="edad" type="number" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Curso Favorito</label>
    <input id="curso" name="curso" type="curso" class="form-control" tabindex="4">
  </div>
  <div class="mb-3">
    <a href="/estudiantes" class="btn btn-secondary" tabindex="6">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="5">Guardar</button>
  </div>
  
</form>

@endsection