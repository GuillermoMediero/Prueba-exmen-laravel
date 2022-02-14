<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Comentarios;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos = Articulo::all();
        return view('articulos', ['articulos'=> $articulos, 'peli' => 'Pepenople']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $articulo = New Articulo;
       
       $articulo->titulo = $request->get('titulo');
       $articulo->contenido = $request->get('contenido');
       $articulo->save();

       return redirect("/productos");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalles = Articulo::find($id);
        $comentarios = Comentarios::where('articulo_id', $id)->get();
        return view('detalles', ['detalles'=>$detalles, 'peli'=> $id, 'comentarios'=> $comentarios]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editar = Articulo::find($id);
        return view('editar', ['editar'=>$editar]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $articulo = Articulo::find($id);
       
        $articulo->titulo = $request->get('titulo');
        $articulo->contenido = $request->get('contenido');
        $articulo->save();
 
        return redirect("/productos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Articulo::destroy($id);
        return redirect("/productos");
    }
}
