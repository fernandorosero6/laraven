<?php   

namespace App\Http\Controllers;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function carCreate(){
        return view('formularioCar');
    }

    public function carStore(Request $request){
       
        $car = new Car();
        $car -> name=$request->name;
        $car -> price=$request->price;
        $car-> save();
        return $car;
    }
}
