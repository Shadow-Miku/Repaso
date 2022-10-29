<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

Route::get('/', function () {
    return view('welcome');
});

*/

Route::get('/', [controladorVistas::class,'showWelcome'])->name('apWelc');  
Route::get('Inicio', [controladorVistas::class,'showPrincipal'])->name('apPrin');
Route::get('Formulario', [controladorVistas::class,'showRegistro'])->name('apRegi');

/*Rutas POST para envio de datos en formulario*/
Route::post('CargarRegistro', [controladorVistas::class,'procesarRegistro'])->name('CarReg');