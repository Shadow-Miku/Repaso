@extends('plantilla')

@section('contenido')

    @if (session()->has('confirmacion'))
        <div class="alert alert-primary" role="alert">
        Exito
     </div>       
    @endif

    <div class="container mt-5 col-md-6">

        <h1 class="display-2 text-center mb-5"> Registrar Autores </h1>

        
        <!--Errores arriba del formulario
            @if ($errors->any())
            @foreach ( $errors->all() as $error )
                <div class="alert alert-warning alert-disimissible fade show" role="alert">
                <strong> {{ $error }} </strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button></div>
            @endforeach
      
        @endif-->
            

        <div class="card mb-5">

            <div class="card-header fw-bold">
                Registro de Autores
            </div>

            <div class="card-body">

                <form class="m-4" method="POST" action="CargarRegistroA">
                    @csrf
                    <!--Errores individuales y guardar los datos escritos-->

                    <div class="mb-3">
                        <label class="form-label">Nombre Completo</label>
                        <input type="text" placeholder="Escriba el nombre completo del autor" class="form-control" name="nombre" value="{{old('nombre')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('nombre') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Cantidad de libros Publicados</label>
                        <input type="numeric" placeholder="Digite la cantidad de libros publicados" class="form-control" name="cantidadLibros" value="{{old('cantidadLibros')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('cantidadLibros') }} </p>
                    </div>
                   

                    <div class="mb-3">
                        <label class="form-label">Fecha ingreso</label>
                        <input type="date" id="date" class="form-control" name="fecha" value="{{old('fecha')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('fecha') }} </p>
                    </div>
            </div>

            <div class="card-footer">

                <button type="submit" class="btn btn-success m-1"> Registrar Autor</button>
            
            </form>

            </div>
        </div>
    </div>
    
@stop