@extends('adminlte::page')

@section('title', config('adminlte.title', 'Falhou'))

@section('content_header')
@stop
@section('content')

<div class="box">

<div class="card card-primary">
   <div class="card-header">
   <h3 class="card-title">Categoria Selecionada</h3>
   </div>
   <div class='form-group'></div>
   <div class="card-body">
   <div class='form-control'><strong>Descricao:</strong>    {{$categorias->descricao}}</div>
 
@endsection