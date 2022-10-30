<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

Route::get('/', function () {
    return view('welcome');
});

*/

Route::get('/', [controladorVistas::class,'showWelcome'])->name('apWelc');  
Route::get('Principal', [controladorVistas::class,'showPrincipal'])->name('apPrin');
Route::get('Registro', [controladorVistas::class,'showRegistro'])->name('apRegi');

/*Rutas POST para envio de datos en formulario*/
Route::post('CargarRegistro', [controladorVistas::class,'procesarRegistro'])->name('CarReg');