<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends ApiController
{
    public function login(Request $request)
    {
        // User check
        if(Auth::attempt(['name' => $request->name, 'password' => $request->password])){
            $user = Auth::user();
            $token = $user->createToken('token');

            // Setting login response
            return $this->successResponse([
                'name' => $user->name,
                'token' => $token->plainTextToken
            ], "Sesión iniciada correctamente, bienvenido {$user->name}");
        } else {
            return $this->errorResponse('Las credenciales no se corresponden con nuestros registros', 403);
        }
    }
}
