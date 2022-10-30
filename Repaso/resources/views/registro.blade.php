@extends('plantilla')

@section('contenido')

    @if (session()->has('confirmacion'))
        {!!" <script> Swal.fire(
            'Muy bien!',
            'Libro xxxxxxxx registrado',
            'success'
          ) </script>"!!}        
    @endif

    <div class="container mt-5 col-md-6">

        <h1 class="display-2 text-center mb-5"> Registro de Libros </h1>

        
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
                Registro de Libros
            </div>

            <div class="card-body">

                <form class="m-4" method="POST" action="CargarRegistro">
                    @csrf
                    <!--Errores individuales y guardar los datos escritos-->
                    
                    <div class="mb-3">
                        <label class="form-label">ISBN: </label>
                        <input type="numeric" class="form-control" name="intISBN" value="{{old('intISBN')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('intISBN') }} </p>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Titulo: </label>
                        <input type="text" class="form-control" name="txtTitulo" value="{{old('txtTitulo')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('txtTitulo') }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Autor: </label>
                        <input type="text" class="form-control" name="txtAutor" value="{{old('txtAutor')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('txtAutor') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Paginas: </label>
                        <input type="numeric" class="form-control" name="intPaginas" value="{{old('intPaginas')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('intPaginas') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Editorial: </label>
                        <input type="text" class="form-control" name="txtEditorial" value="{{old('txtEditorial')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('txtEditorial') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email de la editorial: </label>
                        <input type="email" class="form-control" name="email" value="{{old('email')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('email') }} </p>
                    </div>

            </div>

            <div class="card-footer">

                <button type="submit" class="btn btn-success m-1"> Registrar</button>
            
            </form>

            </div>
        </div>
    </div>
    
@stop