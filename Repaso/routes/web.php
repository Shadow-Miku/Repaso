<?php

use App\Http\Controllers\ControladorBDAU;
use App\Http\Controllers\controladorRegistrarLibro;
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
Route::get('Autor', [controladorVistas::class,'showAutor'])->name('apAutor');


/*Rutas para controllador resourse Autor*/

/*Create Autor*/
Route::get('autor/create', [ControladorBDAU::class,'create'])->name('autor.create');

/*Store Autor*/
Route::post('autor', [ControladorBDAU::class,'store'])->name('autor.store');

/*Index Autor*/
Route::get('autor', [ControladorBDAU::class,'index'])->name('autor.index');

/*Edit Autor*/
Route::get('autor/{id}/edit', [ControladorBDAU::class,'edit'])->name('autor.edit');

/*Update Autor*/
Route::put('autor/{id}', [ControladorBDAU::class,'update'])->name('autor.update');

/*Show Autor*/
Route::get('autor/{id}/show', [ControladorBDAU::class,'show'])->name('autor.show');

/*Delete Autor*/
Route::delete('autor/{id}', [ControladorBDAU::class,'destroy'])->name('autor.destroy');


















/*Rutas POST para envio de datos en formulario*/
Route::post('CargarRegistro', [controladorVistas::class,'procesarRegistro'])->name('CarReg');
Route::post('CargarRegistroA', [controladorVistas::class,'procesarRegistroA'])->name('CarRegA');
