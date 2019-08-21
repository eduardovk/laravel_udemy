{{-- utilizando layout principal --}}
@extends('layout.site')

{{--  definindo valor da variavel 'titulo' do layout principal --}}
@section('titulo', 'Login')

{{-- definindo valor da secao 'conteudo' do layout principal --}}
@section('conteudo')

  <div class="container">

    <h3>Login</h3>
    <div class="row">
      <form class="" action="{{ route('site.login.entrar') }}" method="post">
        {{ csrf_field() }}

        <div class="input-field">
          <input type="email" name="email">
          <label>E-mail</label>
        </div>

        <div class="input-field">
          <input type="password" name="senha">
          <label>Senha</label>
        </div>

        <button class="btn deep-orange">Entrar</button>
      </form>
    </div>

  </div>


@endsection
