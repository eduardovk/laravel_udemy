<h3>Essa é a view Index</h3>

<!-- utilizando foreach do blade -->
@foreach($contatos as $contato)
  <p>{{ $contato['nome'] }}</p>
  <p>{{ $contato['tel'] }}</p>
@endforeach
