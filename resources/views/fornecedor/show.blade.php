@extends('adminlte::page')

@section('title', config('adminlte.title', 'Falhou'))

@section('content_header')
@stop
@section('content')

<div class="box">

<div class="card card-primary">
   <div class="card-header">
   <h3 class="card-title">Funcionario Selecionado</h3>
   </div>
   <div class='form-group'></div>
   <div class="card-body">
   <div class='form-control'><strong>Nome:</strong>    {{$fornecedores->nome}}</div>
   <div class='form-control'><strong>Morada:</strong>        {{$fornecedores->morada}}</div>
   <div class='form-control'><strong>Telefone:</strong>   {{$fornecedores->telefone}}</div> 
   <div class='form-control'><strong>Email:</strong>   {{$fornecedores->email}}</div>
   <div class='form-control'><strong>NIF:</strong>  {{$fornecedores->nif}}</div>
   

@endsection