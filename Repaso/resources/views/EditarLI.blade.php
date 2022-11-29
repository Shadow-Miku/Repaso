@extends('plantilla')

@section('contenido')

<div class="container mt-5 col-md-6">

    <h1 class="display-2 text-center mb-5"> Actualizar Libro</h1>

         <div class="card mb-5">

            <div class="card-header fw-bold">
                Editar
            </div>

            <div class="card-body">

                <form class="m-4" method="POST" action="{{route('libro.update',$consultaId->idLibros)}}">
                    
                    @csrf

                    {!! method_field('PUT') !!}

                    <!--Errores individuales y guardar los datos escritos-->
                    <div class="mb-3">
                        <label class="form-label">Titulo </label>
                        <input type="text" placeholder="Titulo del libro" class="form-control" required name="txtTitulo" value="{{$consultaId->titulo}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('txtTitulo') }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">ISBN </label>
                        <input type="char" placeholder="digite el ISBN" class="form-control" required name="intISBN" value="{{$consultaId->ISBN}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('intISBN') }} </p>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Paginas </label>
                        <input type="numeric" placeholder="Digite el número total de paginas del libro" class="form-control" required name="intPaginas" value="{{$consultaId->paginas}}">
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
                        <input type="text" placeholder="Editorial que publica el libro" class="form-control" name="txtEditorial" value="{{$consultaId->editorial}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('txtEditorial') }} </p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email de la editorial </label>
                        <input type="email" placeholder="ejemplo@gmail.com" class="form-control" name="email" value="{{$consultaId->email}}">
                        <p class="text-primary fst-italic"> {{ $errors->first('email') }} </p>
                    </div>
                    
            </div>

            <div class="card-footer">

                <button type="submit" class="btn btn-primary m-1">Actualizar Libro</button>
            
            </form>

            </div>
        </div>
    </div>
    
@stop
