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

  public function editar($id){
    $registro = Curso::find($id);
    return view('admin.cursos.editar', compact('registro'));
  }

  public function salvar(Request $req){ //recebe post do formulario
    self::gravar($req);
    return redirect()->route('admin.cursos');
  }

  public function atualizar(Request $req, $id){ //recebe post do formulario
    self::gravar($req, $id);
    return redirect()->route('admin.cursos');
  }

  private function gravar(Request $req, $id = null){ //recebe post do formulario
    $dados = $req->all();

    if($req->hasFile('imagem')){
      $imagem = $req->file('imagem');
      $dir = "img/cursos/";
      $ext = $imagem->guessClientExtension();
      date_default_timezone_set('America/Sao_Paulo');
      $nm_imagem = date('YmdHis').".".$ext;
      //salva a imagem do array de dados no disco, com um nome novo
      $imagem->move($dir, $nm_imagem);
      //atualiza o nome da imagem no array de dados para o nome da imagem salva no disco
      $dados['imagem'] = $dir."/".$nm_imagem;
    }

    if(isset($dados['publicado'])){
      $dados['publicado'] = 'sim';
    }else{
      $dados['publicado'] = 'nao';
    }

    //se um id foi informado, atualiza o registro
    if($id != null){
      Curso::find($id)->update($dados);
    }else{ //se nenhum id foi informado, cria um novo registro
      //para utilizar o comando abaixo, o 'fillable' deve estar configurado no model Curso
      Curso::create($dados);
    }


  }

}
