<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            // 'confirm_password' => 'required|same:password',
            'role' => ''
        ]);
        // dd($request);
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request->password),
            'role' => $request->role ?: null,
        ]);
        echo 'Pendaftaran Berhasil';
        // if ($request['role'] == "admin") {
        //     # code...
        //     // dd("Admin");
        //     \App\Models\User::create([
        //         'name' => $request['name'],
        //         'email' => $request['email'],
        //         'password' => bcrypt($request['password']),
        //         'role' => $request['role']
        //         ]);
        //         session()->flash('success','Registration Successful! Please Login to Continue');
        //         return redirect('/login');
        // }elseif ($request['role'] == "user") {
        //     # code...
        //     // dd("User");
        //     \App\Models\User::create([
        //         'name' => $request['name'],
        //         'email' => $request['email'],
        //         'password' => bcrypt($request['password']),
        //         'role' => $request['role']
        //         ]);
        //         session()->flash('success','Registration Successful! Please Login to Continue');
        //         return redirect('/login');
        // } else {
        //     # code...
        //     // dd("Other");
        //     \App\Models\User::create([
        //         'name' => $request['name'],
        //         'email' => $request['email'],
        //         'password' => bcrypt($request['password']),
        //         'role' => $request['role']
        //         ]);
        //         session()->flash('success','Registration Successful! Please Login to Continue');
        //         return redirect('/login');
        // }
    }
}
