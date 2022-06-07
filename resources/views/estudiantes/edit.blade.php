@extends('layouts.plantilla')

@section('contenido')
<h2>EDITAR REGISTROS</h2>

<form action="/estudiantes/{{$estudiante->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$estudiante->nombre}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Apellido</label>
    <input id="apellido" name="apellido" type="text" class="form-control" value="{{$estudiante->apellido}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Edad</label>
    <input id="edad" name="edad" type="number" class="form-control" value="{{$estudiante->edad}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Curso Favorito</label>
    <input id="curso" name="curso" type="text"  class="form-control" value="{{$estudiante->curso}}">
  </div>
  <a href="/estudiantes" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection