@extends('plantilla')

@section('contenido')

    @if (session()->has('confirmacion'))
        {!!" <script> Swal.fire(
            'Siuuuuuuuu!',
            'Libro Fresquisimo!',
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
                Registro de Libros para Stock
            </div>

            <div class="card-body">

                <form class="m-4" method="POST" action="CargarRegistro">
                    @csrf
                    <!--Errores individuales y guardar los datos escritos-->
                    <div class="mb-3">
                        <label class="form-label">Titulo del Libro: </label>
                        <input type="text" class="form-control" name="txtTituloLibro" value="{{old('txtTituloLibro')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('txtTituloLibro') }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Autor: </label>
                        <input type="text" class="form-control" name="txtAutor" value="{{old('txtAutor')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('txtAutor') }} </p>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Estante: </label>
                        <input type="text" class="form-control" name="txtEstante" value="{{old('txtEstante')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('txtEstante') }} </p>

                        <div class="mb-3">
                            <label class="form-label">Categoria: </label>
                            <input type="text" class="form-control" name="txtCategoria" value="{{old('txtCategoria')}}">
                            <p class="text-primary fst-italic"> {{ $errors->first('txtCategoria') }} </p>
                        </div>
                    </div>

            </div>

            <div class="card-footer">

                <button type="submit" class="btn btn-success m-1"> Cargar en Stock</button>
            
            </form>

            </div>
        </div>
    </div>
    
@stop