<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class CocheController extends Controller
{
    public function index(){
        $temp = Empleado::find(1);
        return $temp->Coche;
      }
}
