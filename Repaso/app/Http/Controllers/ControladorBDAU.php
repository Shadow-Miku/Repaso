<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidadorRegistroA;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class ControladorBDAU extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ConsultaAU= DB::table('tb_autores')->get();
        return view('CAutor',compact('ConsultaAU'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Autor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidadorRegistroA $request)
    {
        DB::table('tb_autores')->insert([
            "nombre"=> $request->input('nombre'),
            "librosPublicados"=> $request->input('cantidadLibros'),
            "fechaNacimiento"=> $request->input('fechaNacimiento'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()
        ]);
        return redirect('autor/create')->with('confirmacion','abc');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultaId= DB::table('tb_autores')->where('idAutores',$id)->first();

        return view('EliminarAU', compact('consultaId'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultaId= DB::table('tb_autores')->where('idAutores',$id)->first();

        return view('EditarAU', compact('consultaId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidadorRegistroA $request, $id)
    {
        DB::table('tb_autores')->where('idAutores',$id)->update([
            "nombre"=> $request->input('nombre'),
            "librosPublicados"=> $request->input('cantidadLibros'),
            "fechaNacimiento"=> $request->input('fechaNacimiento'),
            "updated_at"=> Carbon::now()
        ]);

        return redirect('autor')->with('actualizar','abc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_autores')->where('idAutores',$id)->delete();

        return redirect('autor')->with('elimina','abc');
    }
}
