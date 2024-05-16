<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function hello(){
        return "Hello word";
    }

    public function country(){
        return response ()->json([
            ["id"=>1, "name=>France"],
            ["id"=>2, "name=>Belgique"],
            ["id"=>3, "name=>France"]
        ]);
    }
    public $tabPays=[
            ["id"=>1, "name"=>"Comoros"],
            ["id"=>2, "name"=>"Gabon"],
            ["id"=>3, "name"=>"RDC"]
        ];

    public function getCountries(){
       $pays = $this->tabPays;
       $title = "Liste Pays";

       return view('pays', compact('title', 'pays'));
    }

    public function showCountries($id){
        $pays = $this->tabPays[$id];

        return view('single', compact('pays'));
    }

    public function create(Request $request){
        return view('create');
    }
    public function store(Request $request){
        dd($request->methode());
    }
}
