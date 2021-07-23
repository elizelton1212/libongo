@extends('adminlte::page')

@section('title', 'OndjoBytes')

@section('content_header')
@stop
@section('content')

<div class="box">

<div class="card card-primary">
   <div class="card-header">
   <h3 class="card-title">Imposto Selecionado</h3>
   </div>
   <div class='form-group'></div>
   <div class="card-body">
   <div class='form-control'><strong>Descricao:</strong>    {{$impostos->descricao}}</div>
   <div class='form-control'><strong>Percentagem:</strong>    {{$impostos->percentagem}}</div>
@endsection