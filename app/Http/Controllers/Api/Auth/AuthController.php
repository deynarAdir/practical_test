<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreUser;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function userRegister(Request $request){
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return response()->json(['message' => 'Usuario registrado exitosamente']);
    }
}
