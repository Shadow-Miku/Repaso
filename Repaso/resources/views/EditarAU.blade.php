@extends('plantilla')

@section('contenido')

<div class="container mt-5 col-md-6">

    <h1 class="display-2 text-center mb-5"> Actualizar Autor</h1>

         <div class="card mb-5">

            <div class="card-header fw-bold">
                Editar Información
            </div>

            <div class="card-body">

                <form class="m-4" method="POST" action="{{route('autor.update',$consultaId->idAutores)}}">
                    
                    @csrf

                    {!! method_field('PUT') !!}

                    <!--Errores individuales y guardar los datos escritos-->
                    <div class="mb-3">
                        <label class="form-label">Nombre del autor: </label>
                        <input type="text" class="form-control" name="nombre" value="{{$consultaId->nombre}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('nombre') }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Cantidad de libros publicados: </label>
                        <input type="numeric" class="form-control" name="cantidadLibros" value="{{$consultaId->librosPublicados}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('cantidadLibros') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Fecha de Nacimiento: </label>
                        <input type="date" class="form-control" name="fechaNacimiento" value="{{$consultaId->fechaNacimiento}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('fechaNacimiento') }} </p>
                    </div>
                    
            </div>

            <div class="card-footer">

                <button type="submit" class="btn btn-primary m-1">Actualizar datos del autor</button>
            
            </form>

            </div>
        </div>
    </div>
    
@stop
