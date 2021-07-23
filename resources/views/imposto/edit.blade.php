@extends('adminlte::page')

@section('title', config('adminlte.title', 'Falhou'))

@section('content_header')
@stop
@section('content')
    

<div class="box">

    <div class="card card-primary">
   <div class="card-header">
   <h3 class="card-title">Editar dados da Categoria Selecionada</h3>
   </div>
   <div class='form-group'></div>
   <div class="card-body">
   
   <form method='post'>
   
   {!! csrf_field()!!}
<div class="input-group mb-3">
<label for="">Nome</label><br>
<input type="text" name='descricao' class="form-control" id='descricao' placeholder="Descricao" value='{{$impostos->descricao}}'>
<input type="hidden" name="id" value='{{$impostos->id}}'>
</div>

<div class='input-group mb-3'>
<label for="">Percentagem</label><br>
<input type="number" name="percentagem" id="percentagem" placeholder="Percentagem %" value="{{$impostos->percentagem}}">
</div>    

<div class='text-center'><button id="alterar-imposto" type="submit" class="btn btn-primary">Alterar os dados</button></div>
  <center id="r"></center> 
   

<script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/Imposto.js')}}"></script>
    
@endsection