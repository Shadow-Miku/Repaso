@extends('plantilla')

<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@section('contenido')

    @if (session()->has('confirmacion'))
    <?php
    $txtTitulo = session()->get('Variable');
    ?>

        {!!" <script> Swal.fire(
            'Muy bien!',
            'Libro: $txtTitulo guardado',
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

                <form class="m-4" method="POST" action="{{route('libro.store')}}">
                    @csrf
                    <!--Errores individuales y guardar los datos escritos-->
                    
                    <div class="mb-3">
                        <label class="form-label">Titulo </label>
                        <input type="text" placeholder="Titulo del libro" class="form-control" required name="txtTitulo" value="{{old('txtTitulo')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('txtTitulo') }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">ISBN </label>
                        <input type="char" placeholder="digite el ISBN" class="form-control" required name="intISBN" value="{{old('intISBN')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('intISBN') }} </p>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Paginas </label>
                        <input type="numeric" placeholder="Digite el número total de paginas del libro" class="form-control" required name="intPaginas" value="{{old('intPaginas')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('intPaginas') }} </p>
                    </div>

                    <div class="mb-3">
                        <label for="text" class="form-label">Autor </label>
                        <select class="form-select" name="txtAutor" aria-label="Default select example">
                            <option selected> Selecciona un autor...</option>

                            @foreach ($categorias as $tb_autores)
                                <option value="{{$tb_autores['idAutores']}}">{{$tb_autores['nombre']}}</option>
                            @endforeach
                        
                        </select>
                        <!--<input type="text" placeholder="Autor del libro" class="form-control" required name="txtAutor" value="{{old('txtAutor')}}">-->
                    <p class="text-primary fst-italic" style="color: aqua"> 
                        {{ $errors->first('txtAutor') }} </p>
                    </div>
          
                    <div class="mb-3">
                        <label class="form-label">Editorial </label>
                        <input type="text" placeholder="Editorial que publica el libro" class="form-control" name="txtEditorial" value="{{old('txtEditorial')}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('txtEditorial') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email de la editorial </label>
                        <input type="email" placeholder="ejemplo@gmail.com" class="form-control" name="email" value="{{old('email')}}">
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