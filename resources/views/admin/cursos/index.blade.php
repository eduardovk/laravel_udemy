{{-- utilizando layout principal --}}
@extends('layout.site')

{{--  definindo valor da variavel 'titulo' do layout principal --}}
@section('titulo', 'Cursos')

{{-- definindo valor da secao 'conteudo' do layout principal --}}
@section('conteudo')

  <div class="container">

    <h3>Lista de Cursos</h3>
    <div class="row">
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Imagem</th>
            <th>Publicado</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
          @foreach($registros as $registro)
            <tr>
              <td>{{ $registro->id }}</td>
              <td>{{ $registro->titulo }}</td>
              <td>{{ $registro->descricao }}</td>
              <td> <img src="{{ asset($registro->imagem) }}" width="120"> </td>
              <td>{{ $registro->publicado }}</td>
              <td>
                <a class="btn deep-orange" href="{{ route('admin.cursos.editar', $registro->id) }}">Editar</a>
                <a class="btn deep-red" href="{{ route('admin.cursos.deletar', $registro->id) }}">Deletar</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <div class="">
      <a class="btn blue" href="{{ route('admin.cursos.novo') }}">Novo</a>
    </div>

  </div>


@endsection
