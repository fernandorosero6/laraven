<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CuadraticaController extends Controller
{
    public function cuadraticaCreate(){
        return view('cuadratica');
    }

    public function cuadraticaStore(Request $request){


    // Obtener los valores de a, b y c del formulario
    $a = $request->input('a');
    $b = $request->input('b');
    $c = $request->input('c');

    // Calcular el discriminante
    $discriminante = $b * $b - 4 * $a * $c;

    // Inicializar un array para almacenar las soluciones
    $soluciones = [];

    // Verificar si hay soluciones reales
    if ($discriminante < 0) {
        $mensaje = "No hay soluciones reales";
    } else {
        // Calcular las soluciones
        $soluciones[] = (-$b + sqrt($discriminante)) / (2 * $a);
        $soluciones[] = (-$b - sqrt($discriminante)) / (2 * $a);
        $mensaje = null;
    }

    // Retornar la vista con los resultados
    return view('cuadratica', compact('soluciones', 'mensaje'));
    }
}
