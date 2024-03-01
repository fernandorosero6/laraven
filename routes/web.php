<?php
use App\Http\Controllers\CarController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('/curso/{dato}/{dato2}', [taller1Controller:: class, 'primo'])->name('curso.show');
Route::get('/curso',[CursoController::class,'create']);
Route::post('/curso',[CursoController::class,'store'])->name('curso.store');

//Formularioamigo
Route::get('/amigo',[CursoController::class,'amigoCreate']);
Route::post('/amigo/verificar-amigo', [CursoController::class, 'amigisStore'])->name('amigo.store');

Route::get('/promedio',[CursoController::class,'promedioCreate']);
Route::post('/promedio', [CursoController::class, 'promedioStore'])->name('promedio.store');

Route::get('/producto', [ProductController::class, 'productoCreate']);
Route::post('/producto', [ProductController::class, 'productoStore'])->name('product.store');

//rutas tarea tablas
Route::get('/car', [CarController::class, 'carCreate']);
Route::post('/car', [CarController::class, 'carStore'])->name('car.store');







Route::get('hola', function(){
    return "Hola gente de youtube";
});

Route::get('ejemplo/{num1}/{num2}', function($num1, $num2){
    return ($num1 + $num2)/2;
});


