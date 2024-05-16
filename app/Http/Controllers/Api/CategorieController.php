<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categorie::all();
        return response()->json($categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categorie = Categorie::create([
            'name'=>$request->name,
            'description'=>$request->description,
           
        ]);
         return response()->json($categorie);
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorie $categorie)
    {
        return response()->json($category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorie $categorie)
    {
        $check = Categorie::create([
            'name'=>$request->name,
            'description'=>$request->description,
           
        ]);

        if($check->delete()){
            return response()->json(["result"=>'Suppression effectuer']);
        }
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $category)
    {
        if($category->delete()){
            return response()->json(["result"=>'Suppression effectuer']);
        }
    }
}
