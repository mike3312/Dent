<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return view('Rproducto.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('Rproducto.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $producto=new Producto();
        $producto->nombreproducto=$request->input('nproducto');
        $producto->cantidad=$request->input('caproducto');
        $producto->costo=$request->input('coproducto');
        $producto->precio_venta=$request->input('pproducto');
        $producto->save();
        return redirect()->route('productos.create')->with('status','PRODUCTO GUARDADO');
        //return 'Producto guardado';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //return $producto;
        return view('Rproducto.editar', compact('producto'));
    }
    
    public function retirar(Producto $producto)
    {
        //return $producto;
        return view('Rproducto.retirar', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $producto->fill($request->all());
        $producto->save();
        return redirect()->route('productos.index')->with('status_edit','PRODUCTO EDITADO');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function rupdate(Request $request, Producto $producto)
    {
         $datorestar=$request->cantidad;
         $datobase=$producto->cantidad;
         $resultado=$datobase-$datorestar;
         $producto->cantidad =$resultado;
        $producto->save();
        //$producto->fill($request->all());
        return redirect()->route('productos.index')->with('status_ret','RETIRO EXITOSO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //return $producto;
        $producto->delete();
        return redirect()->route('productos.index')->with('status','PRODUCTO ELIMINADO');
    }
}
