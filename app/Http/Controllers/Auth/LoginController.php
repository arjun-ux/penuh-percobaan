<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function doLogin(Request $request)
    {
        $creden = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        // dd($creden);
        if (Auth::attempt($creden)) {
            $request->session()->regenerate();
            return redirect()->route('santri');
        }
        return back()->with('eror', 'login gagal');
    }
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
