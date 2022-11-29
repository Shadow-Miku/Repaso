@extends('plantilla')

@section('contenido')

@if (session()->has('actualizar'))
        {!!" <script> Swal.fire(
            'Siuuuuuuuu!',
            'Libro fresquisimo!',
            'success'
          ) </script>"!!}        
@endif

@if (session()->has('elimina'))
        {!!" <script> Swal.fire(
            'Siuuuuuuuu!',
            'El libro ya no anda fresh',
            'success'
          ) </script>"!!}        
@endif
    <h1 class="display-1 mt mt-4 mb-4 text-center"> Libros </h1>

    @foreach($ConsultaLI as $consulta)

    <div class="container col-md-6 mt-5 mb-5">
        <div class="card text-center">
            <div class="card-header">
              <h5 class="text-primary text center">{{$consulta->titulo}}</h5>
            </div>

            <div class="card-body">
              <p class="card-text">{{$consulta->ISBN}}</p>
              <p class="card-text">{{$consulta->paginas}}</p>
              <p class="card-text">{{$consulta->autor_id}}</p>
              <p class="card-text">{{$consulta->editorial}}</p>
              <p class="card-text">{{$consulta->email}}</p>
            </div>

            <div class="card-footer text-muted">
                <a href="{{route('libro.show',$consulta->idLibros)}}" class="btn btn-danger">Si no lo veo no existe</a>
                <a href="{{route('libro.edit',$consulta->idLibros)}}" class="btn btn-primary">Cambia la info we</a>
            </div>
          </div>

          @endforeach

    </div>

@stop
