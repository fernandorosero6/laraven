<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\CuadraticaController;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\PrimoController;
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

// route::get('/curso/{dato}/{dato2}', [taller1Controller:: class, 'primo'])->name('curso.show');
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

Route::get('/player', [PlayerController::class, 'playerCreate']);
Route::post('/player', [PlayerController::class, 'playerStore'])->name('player.store');

//primo guardar

Route::get('/primo', [PrimoController::class, 'primoCreate'])->name('primo.create');
Route::post('/primo', [PrimoController::class, 'primoStore'])->name('primo.store');

// nav primo

Route::get('/nav',[NavController::class, 'navCreate'])->name('nav.create');
Route::post('/nav',[NavController::class, 'navStore'])->name('nav.store');

//nav cuadratica
Route::get('/cuadratica', [CuadraticaController::class, 'cuadraticaCreate'])->name('cuadratica.create');
Route::post('/cuadratica', [CuadraticaController::class, 'cuadraticaStore'])->name('cuadratica.store');





Route::get('hola', function(){
    return "Hola gente de youtube";
});

Route::get('ejemplo/{num1}/{num2}', function($num1, $num2){
    return ($num1 + $num2)/2;
});


