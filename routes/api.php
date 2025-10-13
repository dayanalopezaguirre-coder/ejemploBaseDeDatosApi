<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Productos;
use App\Http\Controllers\API\AuthController;

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
