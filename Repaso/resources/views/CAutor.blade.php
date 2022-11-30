@extends('plantilla')

@section('contenido')

@if (session()->has('actualizar'))
        {!!" <script> Swal.fire(
            'Siuuuuuuuu!',
            'Autor actualizado',
            'success'
          ) </script>"!!}        
@endif

@if (session()->has('elimina'))
        {!!" <script> Swal.fire(
            'Siuuuuuuuu!',
            'Autor fusilado',
            'success'
          ) </script>"!!}        
@endif
    <h1 class="display-1 mt mt-4 mb-4 text-center"> Autores </h1>

    @foreach($ConsultaAU as $consulta)

    <div class="container col-md-6 mt-5 mb-5">
        <div class="card text-center">
            <div class="card-header">
              <h5 class="text-primary text center">Autor</h5>
            </div>

            <div class="card-body">
              <!--<h5 class="card-title"><{{$consulta->nombre}}</h5>-->
              <p class="card-text">{{$consulta->nombre}}</p>
              <p class="card-text">{{$consulta->librosPublicados}}</p>
              <p class="card-text">{{$consulta->fechaNacimiento}}</p>
            </div>

            <div class="card-footer text-muted">
                <a href="{{route('autor.show',$consulta->idAutores)}}" class="btn btn-danger">Fusilalo</a>
                <a href="{{route('autor.edit',$consulta->idAutores)}}" class="btn btn-primary">Cambia el autor we</a>
            </div>
          </div>

          @endforeach

    </div>
  </div>

@stop
