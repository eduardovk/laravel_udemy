<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;

class HomeController extends Controller
{
    public function index(){
      //$cursos = Curso::all();     <- listar todos
      $cursos = Curso::paginate(3); //<- listar com paginacao, 3 registros por pagina
      return view('home', compact('cursos'));
    }
}
