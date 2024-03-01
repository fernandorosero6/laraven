<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function create()
    {
        return view('formulario');

    }



    public function store(Request $request)
    {
        $numero = $request->num1;

        $esPrimo = $this->esPrimo($numero);

        if ($esPrimo) {
            return "El número $numero es primo";
        } else {
            return "El número $numero no es primo";
        }
    }
    private function esPrimo($numero)
    {
        if ($numero <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }
        return true;
    }

//Numeros amigos

    public function amigoCreate()
    {
        return view('FormularioAmigo');
    }

    public function amigisStore(Request $request)
{
    $num1 = $request->num1;
    $num2 = $request->num2;

    if ($this->sumDivisores($num1) == $num2 && $this->sumDivisores($num2) == $num1) {
        return "Los números $num1 y $num2 son números amigos.";
    } else {
        return "Los números $num1 y $num2 no son números amigos.";
    }
}

    private function sumDivisores($numero)
    {
        $sum = 0;
        for ($i = 1; $i <= $numero / 2; $i++) {
            if ($numero % $i == 0) {
                $sum += $i;
            }
        }
        return $sum;
    }




    // metodo para sacar promedio de notas

 public function promedioCreate(){
    return view('formularioPromedio');
 }

 public function promedioStore(Request $request)
 {
     // Obtener las notas del formulario
     $nota1 = $request->input('numero1');
     $nota2 = $request->input('numero2');
     $nota3 = $request->input('numero3');
 
     // Calcular el promedio
     $promedio = ($nota1 + $nota2 + $nota3) / 3;
 
     // Retornar el resultado
     return "El promedio de las notas ingresadas es: $promedio";
 }

}
