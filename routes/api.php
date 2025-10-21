<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Productos;
use App\Http\Controllers\API\AuthController;
use App\Models\Empleado;
use app\Models\clientes;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ClientesController;

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


// Listado de empleados existentes
Route::get('/empleado', [EmpleadoController::class, 'index']);
// Crear un nuevo empleado
Route::post('/empleado/nuevo', [EmpleadoController::class, 'store']);
// Mostrar detalles de un empleado específico
Route::get('/empleado/mostrar/{empleado}', [EmpleadoController::class, 'show']);
// Actualizar un empleado existente     
Route::put('/empleado/actualizar/{empleado}', [EmpleadoController::class, 'update']);
// Eliminar un empleado
Route::delete('/empleado/eliminar/{empleado}', [EmpleadoController::class, 'destroy']);

//listdo de clientes existentes
Route::get('/cliente', [ClientesController::class, 'index']);
//Crear un nuevo cliente
Route::post('/cliente/nuevo', [ClientesController::class, 'store']);
//Mostrar detalles de un cliente específico
Route::get('/cliente/mostrar/{clientes}', [ClientesController::class, 'show']);
//Actualizar un cliente existente
Route::put('/cliente/actualizar/{clientes}', [ClientesController::class, 'update']);
//Eliminar un cliente
Route::delete('/cliente/eliminar/{clientes}', [ClientesController::class, 'destroy']);   



