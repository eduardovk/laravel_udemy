{{-- utilizando layout principal --}}
@extends('layout.site')

{{--  definindo valor da variavel 'titulo' do layout principal --}}
@section('titulo', 'Contatos')

{{-- definindo valor da secao 'conteudo' do layout principal --}}
@section('conteudo')

  <h3>Essa é a view Index</h3>
  {{--  utilizando foreach do blade --}}
  @foreach($contatos as $contato)
    <p>{{ $contato['nome'] }}</p>
    <p>{{ $contato['tel'] }}</p>
  @endforeach

@endsection
