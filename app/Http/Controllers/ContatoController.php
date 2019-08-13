<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index(){
      return  "Index do ContatoController";
    }

    public function criar(Request $req){
      //dd($req);  //util para debug de variavies da requisicao
      //dd($req['nome']); //exibir valor da variavel 'nome'
      //dd($req->all()); //exibir valores de todas variaveis da requisicao
      return  "Criar do ContatoController";
    }

    public function editar(){
      return  "Editar do ContatoController";
    }
}
