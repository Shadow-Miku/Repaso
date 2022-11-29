@extends('Template')

@section('contenido')

<div class="container mt-5 col-md-6">

    <h1 class="display-2 text-center mb-5"> Actualizar Recuerdo</h1>

         <div class="card mb-5">

            <div class="card-header fw-bold">
                Editar
            </div>

            <div class="card-body">

                <form class="m-4" method="POST" action="{{route('recuerdo.update',$consultaId->idRecuerdos)}}">
                    
                    @csrf

                    {!! method_field('PUT') !!}

                    <!--Errores individuales y guardar los datos escritos-->
                    <div class="mb-3">
                        <label class="form-label">Titulo: </label>
                        <input type="text" class="form-control" name="txtTitulo" value="{{$consultaId->titulo}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('txtTitulo') }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Recuerdo: </label>
                        <input type="text" class="form-control" name="txtRecuerdo" value="{{$consultaId->recuerdo}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('txtRecuerdo') }} </p>
                    </div>
                    
            </div>

            <div class="card-footer">

                <button type="submit" class="btn btn-primary m-1">Actualizar Bitacora</button>
            
            </form>

            </div>
        </div>
    </div>
    
@stop
