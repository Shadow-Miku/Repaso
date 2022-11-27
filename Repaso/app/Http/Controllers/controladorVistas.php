<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorRegistro;
use App\Http\Requests\ValidadorRegistroA;

class controladorVistas extends Controller
{
    
   
    /* 
    public function procesarRegistro(ValidadorRegistro $req){
        return redirect('Registro')->with('confirmacion','Registro de libro Correcto');
    } Funcion para registrar los libros en el formulario   procesar registro es lo que se mandara a llamar en la ruta */

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
    public function showAutor(){
        return view('Autor');
    } 

    public function procesarRegistro(ValidadorRegistro $req){
        $name = $req->input('txtTitulo');
        return redirect('Registro')->with('confirmacion','Registro de libro Correcto')->with('Variable', $name);
    } 

    public function procesarRegistroA(ValidadorRegistroA $req){
        $name = $req->all();
        return redirect('Autor')->with('confirmacion','Su Autor esta siendo procesado');
    } 
    /*
    public function procesarRegistroA(ValidadorRegistroA $req){
        return 'Su Autor esta siendo procesado';
        return $req->all();
    }*/
}
