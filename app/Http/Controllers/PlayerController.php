<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class PlayerController extends Controller
{
    public function playerCreate(){
        return view('formularioPlayer');
    }

    public function playerStore(Request $request){
        $player = new Player();
        $player -> game = $request -> game;
        $player -> name = $request -> name;
        $player -> save();
        return $player;
    }
}
