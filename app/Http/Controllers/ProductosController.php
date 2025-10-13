<?php

namespace App\Http\Controllers;
use App\Models\Productos;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Productos::all();
        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('productos.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        productos::create($request->all());
        
        return redirect()->route('productos.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $producto = Productos::find($id);
        return view ('productos.ver',compact('producto')) ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto = Productos::find($id);
         return view ('productos.editar',compact('producto')) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $producto = Productos::find($id);
        $producto->update($request->all());
        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $producto = Productos::find($id);
        $producto->delete();
        return redirect()->route('productos.index');
    }

}
    

