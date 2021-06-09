@extends('layout.default')

@section('content')
<h2>Carros</h2>

<div style="margin-bottom: 16px;">
  <a href="{{ url("/carros/create") }}" class="btn btn-primary">Adicionar Carro</a>
</div>

<table class="table table-bordered table-striped table-hover">
  <thead>
    <tr>
      <th class="text-center"></th>
      <th class="text-center">ID</th>
      <th class="text-center">Nome do carro</th>
      <th class="text-center">Marca</th>
      <th class="text-center">Descrição</th>
      <th class="text-center">Preço</th>
    </tr>
  </thead>
  <tbody>
    @Foreach($carros as $carro)
    <tr>
      <td class="text-center">
        <a href="{{ url("/carros/edit/{$carro->id}") }}" class="btn btn-success btn-sm">Editar</a>
        <a onclick="return confirm('Você confirma a exclusão?')" href="{{ url("/carros/destroy/{$carro->id}") }}" class="btn btn-danger btn-sm">Deletar</a>
      </td>
      <td class="text-center">{{$carro->id}}</td>
      <td class="text-center">{{$carro->nome}}</td>
      <td class="text-center">{{$carro->marca}}</td>
      <td class="text-center">{{$carro->descricao}}</td>
      <td class="text-center">{{$carro->preco}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
