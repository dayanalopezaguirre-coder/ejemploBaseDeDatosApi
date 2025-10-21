<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

         $clientes = Clientes::all();
        return $clientes ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        clientes::create([
            'nombre_cliente' => $request->nombre_cliente,
            'domicilio' => $request->domicilio,
            'email' => $request->email,
            'descuento_especial' => $request->descuento_especial,
            'telefono' => $request->telefono,
        ]);
    
        return clientes::all();
    }

    /**
     * Display the specified resource.
     */
    public function show(clientes $clientes)
    {
    
        return $clientes ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(clientes $clientes)
    {
        $clientes = clientes::find($id);
         return view ('Cliente.editar',compact('clientes')) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, clientes $clientes)
    {
        $clientes->nombre_cliente = $request->nombre_cliente;
        $clientes->domicilio = $request->domicilio;
        $clientes->email = $request->email;
        $clientes->descuento_especial = $request->descuento_especial;
        $clientes->telefono = $request->telefono;
        $clientes->save();
        return $clientes;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(clientes $clientes)
    {
         $clientes->delete();
        return clientes::all();
}
}