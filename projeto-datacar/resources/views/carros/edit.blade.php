@extends('layout.default')

@section('content')
<h2>Alterando carro</h2>

<form action="{{url("/carros/edit/{$carro->id}")}}" method="post">
{{ csrf_field() }}
  <input type="hidden" name="id" value="{{ $carro->id}}">

  <div class="mb-3">
    <label for="nomeCarro" class="form-label">Carro</label>
    <input value="{{ $carro->nome}}" type="text" name="name" class="form-control" id="nomeCarro" required>

    <label for="nomeMarca" class="form-label">Marca</label>
    <input value="{{ $carro->marca}}" type="text" name="marca" class="form-control" id="nomeMarca" required>

    <label for="descricao" class="form-label">Descrição</label>
    <input value="{{ $carro->descricao}}" type="text" name="descricao" class="form-control" id="descricao" required>

    <label for="preco" class="form-label">Preço</label>
    <input value="{{ $carro->preco}}" type="text" name="preco" class="form-control" id="preco" required>
  </div>
  <button class="btn btn-success">Salvar</button>
</form>
@endsection