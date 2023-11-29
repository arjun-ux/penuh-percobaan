<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiLoginController extends Controller
{
    // halaman login api
    public function loginApi()
    {
        return response()->json([
            'success' => 'Halaman Login'
        ]);
    }
    public function doLogin(Request $request)
    {
        $creden = $request->only('email', 'password');
        if (Auth::attempt($creden)) {
            # login berhasil
            $user = Auth::user();
            $user->api_token = bin2hex(random_bytes(50));

            return response()->json([
                'token' => $user->api_token,
                'success' => 'Login Berhasil'
            ], 200);
        }
        // login gagal
        return response()->json([
            'error'=> 'Unauthorized',
            'message' => 'Email atau password salah!'
        ], 401);
    }
}
