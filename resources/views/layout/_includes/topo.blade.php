<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>@yield('titulo')</title>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
  <header>
    <nav>
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Logo</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="/">Home</a></li>
          @if(Auth::guest())
              <li><a href="{{ route('site.login') }}">Login</a></li>
          @else
              <li><a href="{{ route('admin.cursos') }}">Cursos</a></li>
              <li><a href="#">{{Auth::user()->name}}</a></li>
              <li><a href="{{ route('site.login.sair') }}">Sair</a></li>
          @endif
      </ul>
      </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
      <li><a href="/">Home</a></li>
      @if(Auth::guest())
          <li><a href="{{ route('site.login') }}">Login</a></li>
      @else
          <li><a href="{{ route('admin.cursos') }}">Cursos</a></li>
          <li><a href="#">{{Auth::user()->name}}</a></li>
          <li><a href="{{ route('site.login.sair') }}">Sair</a></li>
      @endif
    </ul>
  </header>
