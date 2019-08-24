{{-- utilizando layout principal --}}
@extends('layout.site')

{{--  definindo valor da variavel 'titulo' do layout principal --}}
@section('titulo', 'Cursos')

{{-- definindo valor da secao 'conteudo' do layout principal --}}
@section('conteudo')

  <div class="container">
    <h3>Lista de Cursos</h3>

    <div class="row">
      @foreach($cursos as $curso)
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="{{asset($curso->imagem)}}">
            </div>
            <div class="card-content">
              <h4>{{$curso->titulo}}</h4>
              <p>{{$curso->descricao}}</p>
              </div>
              <div class="card-action">
                <a href="#">Ver mais...</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>

      <div class="row" align='center'>
          {{$cursos->links() /*exibir links da paginacao*/ }}
      </div>

    </div>


  @endsection
