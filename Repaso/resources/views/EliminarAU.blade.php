@extends('plantilla')

@section('contenido')

<h1 class="display-1 mt mt-4 mb-4 text-center"> Eliminar </h1>

<form class="m-4" method="POST" action="{{route('autor.update',$consultaId->idAutores)}}">          
    <div class="container col-md-6 mt-5 mb-5">
        <div class="card text-center">
            <div class="card-header">
              <h5 class="text-primary text center">Autor</h5>
            </div>

            <div class="card-body">
              
              <p class="card-text">{{$consultaId->nombre}}</p>
              <p class="card-text">{{$consultaId->librosPublicados}}</p>
              <p class="card-text">{{$consultaId->fechaNacimiento}}</p>
            </div>
</form>
            <div class="card-footer text-muted">
              <form method="POST" action="{{route('autor.destroy',$consultaId->idAutores)}}">
              @csrf
              @method('delete')
                <button type="submit"> Si, fusilalo </button>
                <a href="{{ route('autor.index') }}" class="btn btn-primary">No, Regresame</a>
              </form>
            </div>
        </div>
    </div>

@stop