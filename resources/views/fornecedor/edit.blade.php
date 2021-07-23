@extends('adminlte::page')

@section('title', config('adminlte.title', 'Falhou'))

@section('content_header')
@stop
@section('content')
    

<div class="box">

    <div class="card card-primary">
   <div class="card-header">
   <h3 class="card-title">Editar dados do Funcionario Selecionado</h3>
   </div>
   <div class='form-group'></div>
   <div class="card-body">
   
   <form method='post' >
   
   {!! csrf_field()!!}
<div class="input-group mb-3">
<label for="">Nome</label><br>
<input type="hidden" name="id" value='{{$fornecedores->id}}'>
<input type="text" name='nome' class="form-control" id='nome' placeholder="Nome" value='{{$fornecedores->nome}}' >
</div>

<div class="input-group mb-3">
<label for="">Morada</label><br>
<input type="text" name="morada" id="morada" class="form-control" placeholder="morada" value="{{$fornecedores->morada}}">
</div>
<div class='input-group mb-3'>
<label for="idade">Telefone</label><br>
<input type="tel" name="telefone" id="telefone" placeholder='Telefone' value='{{$fornecedores->telefone}}'>
</div>
   
<div class='input-group mb-3'>
<Label>Email</Label><br>
<input type="email" name="email" class="form-control" id="email" placeholder="email@" value="{{$fornecedores->email}}">
</div>
   
<div class='input-group mb-3'>
<label for="">NIF</label><br>
<input type="text" name="nif" id="nif" placeholder="Nº Contribuente" value="{{$fornecedores->nif}}" class='form-control'>
</div>
   
   
<div class='text-center'><button id="alterar-fornecedor" type="submit" class="btn btn-primary">Alterar os dados</button></div>
   <center id="r"></center>
   
   <script src="{{asset('js/jquery.min.js')}}"> </script>
   <script src="{{asset('js/fornecedor.js')}}"></script>

@endsection