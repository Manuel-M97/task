<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){

        $cursos = Curso::paginate(10);


        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(Request $request){

         $curso = new Curso();

         $curso->name = $request->name;
         $curso->description = $request->Description;
         $curso->category = $request->Category;

         $curso->save();

        return redirect(route('cursos.show', $curso));
    }

    public function show($id){

        $curso = Curso::find($id);

        return view('cursos.show', compact('curso'));
    }
}