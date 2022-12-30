<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\AuthCreateRequest;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller{
    
    public function register(AuthCreateRequest $request){

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'Token' => $token,
            'Type' => 'Bearer'
        ]);
    }
}
