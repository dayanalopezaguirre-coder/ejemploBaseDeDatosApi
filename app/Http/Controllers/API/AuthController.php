<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registre(Request $request)
    {
        //validacion de los datos del usuario
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        //si hay un error con la validacion
        $validator = \Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        //creacion del usuario
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt ($request->password),
        ]);
        //creacion del token
        $token = $user->createToken('auth_token')->plainTextToken;

        //respuesta con el usuario y el token
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user' => $user,
        ],201);
    }
   public function login(Request $request)
    {
        // Validacion de los datos del usuario
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Verificacion de las credenciales
        $user = User::where('email', $request->email)->first();

        if (!$user || !\Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Credenciales incorrectas'], 401);
        }

        // Creacion del token de autenticacion
        $token = $user->createToken('auth_token')->plainTextToken;

        // Respuesta con el usuario y el token
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user' => $user,
        ]);
    }
}
