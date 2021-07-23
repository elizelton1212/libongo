@extends('adminlte::page')

@section('title', config('adminlte.title', 'Falhou'))

@section('content_header')
@stop
@section('content')

<div class="box">

<div class="card card-primary">
   <div class="card-header">
   <h3 class="card-title">Produto Selecionado</h3>
   </div>
   <div class='form-group'></div>
   <div class="card-body">
   <div class='form-control'><strong>Nome:</strong>    {{$produtos->nome}}</div>
   <div class='form-control'><strong>Marca:</strong>    {{$produtos->marca}}</div>
   <div class='form-control'><strong>Tipo:</strong>    {{$produtos->tipo}}</div>
   <div class='form-control'><strong>Preço de Venda:</strong>    {{$produtos->precoVenda}}</div>
   <div class='form-control'><strong>Preço de Custo:</strong>    {{$produtos->precoCusto}}</div>
   <div class='form-control'><strong>Prazo de Validade:</strong>    {{$produtos->validade}}</div>
   <div class='form-control'><strong>Quantidade:</strong>    {{$produtos->quantidade}}</div>
   <div class='form-control'><strong>Categoria:</strong>    {{$produtos->produtoCategoria->descricao}}</div>
   <div class='form-control'><strong>Imposto:</strong>    {{$produtos->produtoImposto->descricao}}</div>
   <div class='form-control'><strong>Fornecedor:</strong>    {{$produtos->produtoFornecedor->nome}}</div>
@endsection