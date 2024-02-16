<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function hola($dato, $dato2){
        return $dato+$dato2;
    }
}
