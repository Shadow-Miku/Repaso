@extends('plantilla')

@section('contenido')

<h1 class="display-1 mt mt-4 mb-4 text-center"> Eliminar </h1>

<form class="m-4" method="POST" action="{{route('libro.update',$consultaId->idLibros)}}">          
    <div class="container col-md-6 mt-5 mb-5">
        <div class="card text-center">
            <div class="card-header">
              <h5 class="text-primary text center">{{$consultaId->titulo}}</h5>
            </div>

            <div class="card-body">
              <p class="card-text">{{$consultaId->ISBN}}</p>
              <p class="card-text">{{$consultaId->paginas}}</p>
              <p class="card-text">{{$consultaId->autor_id}}</p>
              <p class="card-text">{{$consultaId->editorial}}</p>
              <p class="card-text">{{$consultaId->email}}</p>
            </div>
</form>
            <div class="card-footer text-muted">
              <form method="POST" action="{{route('libro.destroy',$consultaId->idLibros)}}">
              @csrf
              @method('delete')
                <button type="submit"> Si, fusilalo </button>
                <a href="{{ route('libro.index') }}" class="btn btn-primary">No, Regresame</a>
              </form>
            </div>
        </div>
    </div>

@stop