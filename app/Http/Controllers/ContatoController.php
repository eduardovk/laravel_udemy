<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function index(){
      $contatos = [
        ["nome" => "Maria", "tel" => "12345678"],
        ["nome" => "Pedro", "tel" => "87654321"]
      ];

      $contato = new Contato(); //deve estar declarado 'use App\Contato antes'

      //dd($contato->lista());

      // chama view index da pasta contato enviando o array contatos compactado
      return  view('contato.index', compact('contatos'));
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
