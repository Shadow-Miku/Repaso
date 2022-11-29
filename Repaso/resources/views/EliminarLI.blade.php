@extends('Template')

@section('contenido')

<h1 class="display-1 mt mt-4 mb-4 text-center"> Eliminar </h1>

<form class="m-4" method="POST" action="{{route('recuerdo.update',$consultaId->idRecuerdos)}}">          
    <div class="container col-md-6 mt-5 mb-5">
        <div class="card text-center">
            <div class="card-header">
              <h5 class="text-primary text center">{{$consultaId->fecha}}</h5>
            </div>

            <div class="card-body">
              <h5 class="card-title">{{$consultaId->titulo}}</h5>
              <p class="card-text"><{{$consultaId->recuerdo}}</p>
            </div>
</form>
            <div class="card-footer text-muted">
              <form method="POST" action="{{route('recuerdo.destroy',$consultaId->idRecuerdos)}}">
              @csrf
              @method('delete')
                <button type="submit"> Si, fusilalo alv</button>
                <a href="{{ route('recuerdo.index') }}" class="btn btn-primary">No, Regresame</a>
              </form>
            </div>
        </div>
    </div>

@stop