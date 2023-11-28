<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SantriController extends Controller
{
    public function index()
    {
        $santris = User::get();
        return view('santri.index', compact('santris'));
    }

    public function edit($id)
    {
        $santri = User::findOrFail($id);
        return view('santri.edit', compact('santri'));
    }
    // edit alamat user dari table santri
    public function update(Request $request){
        $this->validate($request,[
            'alamat'=>'required|min:3'
        ]);
        // dd($request);
        Santri::where('user_id', Auth::user()->id)->update([
            'alamat' => $request->alamat
        ]);

        return redirect()->route('santri');
    }

}
