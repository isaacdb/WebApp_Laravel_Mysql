@extends('layout.default')

@section('content')
<h2>Adicionando carro</h2>

<form action="{{ url("/carros/create") }}" method="post">
{{ csrf_field() }}
  <div class="mb-3">
    <label for="nomeCarro" class="form-label">Carro</label>
    <input type="text" name="name" class="form-control" id="nomeCarro" required>

    <label for="nomeMarca" class="form-label">Marca</label>
    <input type="text" name="marca" class="form-control" id="nomeMarca" required>

    <label for="descricao" class="form-label">Descrição</label>
    <input type="text" name="descricao" class="form-control" id="descricao" required>

    <label for="preco" class="form-label">Preço</label>
    <input type="text" name="preco" class="form-control" id="preco" required>
  </div>
  <button class="btn btn-success">Salvar</button>
</form>
@endsection