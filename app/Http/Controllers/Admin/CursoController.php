<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;

class CursoController extends Controller
{

  public function index(){
    $registros = Curso::all(); //declarando use App\Curso
    return view('admin.cursos.index', compact('registros'));
  }

  public function novo(){
    return view('admin.cursos.novo');
  }

}
