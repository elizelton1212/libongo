@extends('adminlte::page')

@section('title', config('adminlte.title', 'Falhou'))

@section('content_header')
@stop
@section('content')

<div class="box">

<div class="card card-primary">
   <div class="card-header">
   <h3 class="card-title">Cliente Selecionado</h3>
   </div>
   <div class='form-group'></div>
   <div class="card-body">
   <div class='form-control'><strong>Nome:</strong>    {{$clientes->nome}}</div>
   <div class='form-control'><strong>Morada:</strong>        {{$clientes->morada}}</div>
   <div class='form-control'><strong>Telefone:</strong>   {{$clientes->telefone}}</div> 
   <div class='form-control'><strong>Email:</strong>   {{$clientes->email}}</div>
   <div class='form-control'><strong>NIF:</strong>  {{$clientes->nif}}</div>
   

@endsection