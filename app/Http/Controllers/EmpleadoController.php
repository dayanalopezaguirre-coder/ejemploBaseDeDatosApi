<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $empleado = Empleado::all();
        return view('Empleado.index', compact('Empleado'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Empleado.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Empleado::create($request->all());
        
        return redirect()->route('Empleado.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        $empleado = Empleado::find($id);
        return view ('Empleado.ver',compact('empleado')) ;
        
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $empleado)
    {
        $empleado = Empleado::find($id);
         return view ('Empleado.editar',compact('empleado')) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleado $empleado)
    {
        $empleado = Empleado::find($id);
        $empleado->update($request->all());
        return redirect()->route('Empleado.index');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleado $empleado)
    {
        $empleado = Empleado::find($id);
        $empleado->delete();
        return redirect()->route('Empleado.index');
    }
}
