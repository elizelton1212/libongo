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
   <div class='form-control'><strong>Nome:</strong>    {{$funcionarios->nome}}</div>
   <div class='form-control'><strong>Estado Civil:</strong>    {{$funcionarios->estadoCivil}}</div>
   <div class='form-control'><strong>Genero:</strong>    {{$funcionarios->genero}}</div>
   <div class='form-control'><strong>BI:</strong>    {{$funcionarios->nBi}}</div>
   <div class='form-control'><strong>Inss:</strong>    {{$funcionarios->inss}}</div>
   <div class='form-control'><strong>Nacionalidade:</strong>    {{$funcionarios->nacionalidade}}</div>
   <div class='form-control'><strong>IBAN:</strong>    {{$funcionarios->iban}}</div>
@endsection