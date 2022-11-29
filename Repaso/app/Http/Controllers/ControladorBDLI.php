<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidadorRegistro;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Models\tb_autores;

class ControladorBDLI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ConsultaLI= DB::table('tb_libros')->get();
        return view('CLibro',compact('ConsultaLI'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = tb_autores::all();
        return view('Registro',compact('categorias'));
        //return view('Registro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidadorRegistro $request)
    {
        DB::table('tb_libros')->insert([
            "titulo"=> $request->input('txtTitulo'),
            "ISBN"=> $request->input('intISBN'),
            "paginas"=> $request->input('intPaginas'),
            "autor_id"=> $request->input('txtAutor'),
            "editorial"=> $request->input('txtEditorial'),
            "email"=> $request->input('email'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()
        ]);
        return redirect('libro/create')->with('confirmacion','abc');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultaId= DB::table('tb_libros')->where('idLibros',$id)->first();

        return view('EliminarLI', compact('consultaId'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultaId= DB::table('tb_libros')->where('idLibros',$id)->first();
        $categorias = tb_autores::all();
        return view('EditarLI', compact('consultaId'),compact('categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidadorRegistro $request, $id)
    {
        DB::table('tb_libros')->where('idLibros',$id)->update([
            "titulo"=> $request->input('txtTitulo'),
            "ISBN"=> $request->input('intISBN'),
            "paginas"=> $request->input('intPaginas'),
            "autor_id"=> $request->input('txtAutor'),
            "editorial"=> $request->input('txtEditorial'),
            "email"=> $request->input('email'),
            "updated_at"=> Carbon::now()
        ]);

        return redirect('libro')->with('actualizar','abc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_libros')->where('idLibros',$id)->delete();

        return redirect('libro')->with('elimina','abc');
    }
}
