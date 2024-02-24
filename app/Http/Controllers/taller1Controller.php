<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class taller1Controller extends Controller
{
    public function create(){


        return view('formulario');

     }

     public function store(Request $request){

        return $request->num1;


     }
}
