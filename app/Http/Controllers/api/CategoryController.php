<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Dotenv\Validator;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return response()->json($categories, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=> 'required',
            'description' =>'required'
        ]);
        Category::create([
            'name' => $request->name,
            'description' => $request->description
        ]);
        return response('Created Successfully', 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Category::findOrFail($id);
        return response()->json($data, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);

        $category->update($request->all(), [
            'name' => $request->name,
            'description' => $request->description
        ]);
        $respons = [
            'success' => 'Berhasil Di Update'
        ];
        return response()->json($respons, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categories = Category::findOrFail($id);
        $categories->delete();
        $respons = [
            'success' => 'Data Berhasil di Hapus'
        ];
        return response()->json($respons, 200);
    }
}
