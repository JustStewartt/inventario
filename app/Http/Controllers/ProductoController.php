<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = productos::all();
        return view('producto.index')->with('productos', $productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productos = new productos();
        $productos->nombre = $request->get('nombre');
        $productos->cantidad = $request->get('cantidad');
        $productos->precio = $request->get('precio');
        $productos->descripcion = $request->get('descripcion');

        $productos->save();
        return redirect('/productos');
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
    public function edit($id)
    {
        $producto = productos::find($id);
        return view('producto.edit')->with('producto',$producto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto = productos::find($id);
        $producto->nombre = $request->get('nombre');
        $producto->cantidad = $request->get('cantidad');
        $producto->precio = $request->get('precio');
        $producto->descripcion = $request->get('descripcion');

        $producto->save();
        return redirect('/productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = productos::find($id);
        $producto->delete();
        return redirect('/productos');
    }
}
