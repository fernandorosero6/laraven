<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function navCreate(){
        return view('nav');
    }

    public function navStore(Request $request){

    }
}
