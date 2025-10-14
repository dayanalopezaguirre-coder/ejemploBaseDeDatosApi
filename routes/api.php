<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Productos;
use App\Http\Controllers\API\AuthController;
use App\Models\Empleado;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/productos', function () {
    return productos::all();
})->middleware('auth:sanctum');

Route::get('/productos/{id}', function (string $id) {
    return productos::find($id);
});

Route::post('/testname', function () {
    //toma los valores que llegan de la consulta post,nombre y edad
    //return "hola ". Request()->nombre ." desde test name";
    return Request()->all();
});

Route::post('/productos/crear', function (){
    Productos::create([
        'descripcion' => request()->descripcion,
        'categorias' => request()->categorias,
        'cantidad' => request()->cantidad,
        'precio' => request()->precio
]);
    return Productos::all();
})->middleware('auth:sanctum');

Route::put('/productos/actualizar', function (){
    $producto = Productos::findOrFail(request()->id);
    //Productos::create([
        $producto->descripcion = request()->descripcion;
        $producto->categorias = request()->categorias;
        $producto->cantidad = request()->cantidad;
        $producto->precio = request()->precio;
        $producto->save();
     //]);
     return Productos::all();
});
Route::delete('/productos/eliminar', function (){
    $producto = Productos::findOrFail(request()->id);
    $producto->delete();
    return Productos::all();
});

Route::post('/usuario/registrar', [AuthController::class, 'registre']);

Route::post('/usuario/login', [AuthController::class, 'login']);

// Obtener todos los empleados
Route::get('/empleados', function () {
    return Empleado::all();
});

// Obtener un empleado por ID
Route::get('/empleados/{id}', function ($id) {
    return Empleado::find($id);
})->middleware('auth:sanctum');

// Crear un nuevo empleado
Route::post('/empleados/crear', function () {
    Empleado::create([
        'nombre_completo' => request()->nombre_completo,
        'departamento' => request()->departamento,
        'antiguedad' => request()->antiguedad,
        'nomina' => request()->nomina,
    ]);
    return Empleado::all();
})->middleware('auth:sanctum');

// Actualizar un empleado existente
Route::put('/empleados/editar', function () {
    $empleado = Empleado::findOrFail(request()->id);
    $empleado->nombre_completo = request()->nombre_completo;
    $empleado->departamento = request()->departamento;
    $empleado->antiguedad = request()->antiguedad;
    $empleado->nomina = request()->nomina;
    $empleado->save();
    return Empleado::all();
})->middleware('auth:sanctum');

// Eliminar un empleado
Route::delete('/empleados/eliminar', function () {
    $empleado = Empleado::findOrFail(request()->id);
    $empleado->delete();
    return Empleado::all();
})->middleware('auth:sanctum');
