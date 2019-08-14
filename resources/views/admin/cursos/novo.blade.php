{{-- utilizando layout principal --}}
@extends('layout.site')

{{--  definindo valor da variavel 'titulo' do layout principal --}}
@section('titulo', 'Cursos')

{{-- definindo valor da secao 'conteudo' do layout principal --}}
@section('conteudo')

  <div class="container">

    <h3>Novo Curso</h3>
    <div class="row">
      <form class="" action="{{ route('admin.cursos.salvar') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('admin.cursos._form')
        <button class="btn deep-orange">Salvar</button>
      </form>
    </div>

  </div>


@endsection
