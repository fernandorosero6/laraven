<?php

namespace App\Http\Controllers;

use App\Models\primo;
use Illuminate\Http\Request;

class PrimoController extends Controller
{
    public function primoCreate()
    {
        return view('primo');
    }
    public function primoStore(Request $request)
    {
        $numero = $request->numero1;
        $esPrimo = $this->esPrimo($numero);
    
        $primo = new primo();
        $primo->numero1 = $numero;
        $primo->seraPrimo = $esPrimo ? 'Si' : 'No'; // Guardar si es primo o no
        $primo->save();
    
        return redirect()->route('primo.create')->with('resultado', "El número $numero " . ($esPrimo ? 'es primo' : 'no es primo'));
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
}
