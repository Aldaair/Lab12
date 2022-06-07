@extends('layouts.plantilla')

@section('contenido')
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<a href="estudiantes/create" class="btn btn-primary">CREAR</a>
<table class="table table-dark table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Edad</th>
      <th scope="col">Curso Favorito</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($estudiantes as $estudiante)
    <tr>
        <td>{{$estudiante->id}}</td>
        <td>{{$estudiante->nombre}}</td>
        <td>{{$estudiante->apellido}}</td>
        <td>{{$estudiante->edad}}</td>
        <td>{{$estudiante->curso}}</td>
        <td>
          <form action="{{ route('estudiantes.destroy',$estudiante->id) }}" method="POST">
            <a href="/estudiantes/{{$estudiante->id}}/edit" class="btn btn-info">Editar</a>         
                @csrf
                @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>      
        </td>    
    </tr>
    @endforeach
  </tbody>
</table>



@endsection