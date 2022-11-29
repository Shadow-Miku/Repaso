@extends('Template')

@section('contenido')

@if (session()->has('actualizar'))
        {!!" <script> Swal.fire(
            'Siuuuuuuuu!',
            'Recuerdo fresquisimo!',
            'success'
          ) </script>"!!}        
@endif

@if (session()->has('elimina'))
        {!!" <script> Swal.fire(
            'Siuuuuuuuu!',
            'El recuerdo ya no anda fresh',
            'success'
          ) </script>"!!}        
@endif
    <h1 class="display-1 mt mt-4 mb-4 text-center"> Recuerdo </h1>

    @foreach($ConsultaRec as $consulta)

    <div class="container col-md-6 mt-5 mb-5">
        <div class="card text-center">
            <div class="card-header">
              <h5 class="text-primary text center">{{$consulta->fecha}}</h5>
            </div>

            <div class="card-body">
              <h5 class="card-title"><{{$consulta->titulo}}</h5>
              <p class="card-text"><{{$consulta->recuerdo}}</p>
            </div>

            <div class="card-footer text-muted">
                <a href="{{route('recuerdo.show',$consulta->idRecuerdos)}}" class="btn btn-danger">Eliminar alv</a>
                <a href="{{route('recuerdo.edit',$consulta->idRecuerdos)}}" class="btn btn-primary">Cambia el pasado we</a>
            </div>
          </div>

          @endforeach

    </div>

@stop
