<?php

namespace App\Http\Controllers;
use App\Models\LavCurso;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Nullable;

class LavCursoController extends Controller
{






 public function LavCursoCreate(){

    return view('LavCurso');

 }

 public function LavCursoStore(Request $request){


    $curso= new LavCurso();
    $curso->name=$request->name;
    $curso->descripcion=$request->descripcion;
    //ADJUNTAR EL PDF
    $file=$request->file("urlPdf");
    $nombreArchivo = "pdf_".time().".".$file->guessExtension();
    $request->file('urlPdf')->storeAs('public/imagenes', $nombreArchivo);
    $curso->urlPdf = $nombreArchivo;
    $curso->save();
    return redirect()->route('curso.index');
 }

 public function index(){

    $curso = LavCurso::orderBy('id', 'desc')->get();
    return view('listar', compact('curso'));

}




}
