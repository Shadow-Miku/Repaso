<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorRegistro;

class controladorVistas extends Controller
{
    public function procesarRegistro(ValidadorRegistro $req){
        return redirect('Registro')->with('confirmacion','Registro de libro Correcto');
    } /* Funcion para registrar los libros en el formulario   procesar registro es lo que se mandara a llamar en la ruta */

    /*Funciones para cada vista de la pagina*/
    public function showWelcome(){
        return view('Welcome');
    }

    public function showPrincipal(){
        return view('Principal');
    } 

    public function showRegistro(){
        return view('Registro');
    } 


}
