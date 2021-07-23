@extends('adminlte::page')

@section('title', config('adminlte.title', 'Falhou'))

@section('content_header')
@stop
@section('content')
    

<div class="box">

    <div class="card card-primary">
   <div class="card-header">
   <h5 class="card-title">Editar dados do Produto</h5>
   </div>
   <div class='form-group'></div>
   <div class="card-body">
   
   <form method='post'>
   
   {!! csrf_field()!!}
<div class="input-group mb-3">
<label for="">Nome</label><br>
<input type="text" name='nome' class="form-control" id='nome' placeholder="Descricao" value='{{$produtos->nome}}'>
<input type="hidden" name="id" value='{{$produtos->id}}'>
</div>

<div class='input-group mb-3'>
<label for="">Marca</label><br>
<input type="text" name="marca" id="marca" placeholder="Marca" value="{{$produtos->marca}}">
</div>    

<div class='input-group mb-3'>
    <label for="">Tipo</label><br>
    <input type="text" name="tipo" id="tipo" placeholder="Tipo" value="{{$produtos->tipo}}">
</div>    
    
<div class='input-group mb-3'>
<label for="">Preço de Venda</label><br>
<input type="number" name="precoVenda" id="precoVenda" placeholder="Preço de Venda" value="{{$produtos->precoVenda}}">
</div>    
 
<div class='input-group mb-3'>
    <label for="">Preço do Custo</label><br>
    <input type="text" name="precoCusto" id="precoCusto" placeholder="Preço de Custo" value="{{$produtos->precoCusto}}">
    </div>    

    <div class='input-group mb-3'>
        <label for="">Data de Validade</label><br>
        <input type="text" name="validade" id="validade" placeholder="Data de validade" value="{{$produtos->validade}}">
        </div>

    <div class='input-group mb-3'>
    <label for="">Quantidade</label><br>
    <input type="text" name="quantidade" id="quantidade" placeholder="Quantidade" value="{{$produtos->quantidade}}">
    </div>    
              
    <div class='input-group mb-3'>
        <label for="">Categoria</label><br>
       <select name="categoria_id" id="categoria">
       <option value="{{$produtos->produtoCategoria->id}}">{{$produtos->produtoCategoria->descricao}}</option>
       @foreach ($categorias as $c)
       <option value="{{$c->id}}">{{$c->descricao}}</option>
           
       @endforeach


       </select>
        </div>    
        
      
    <div class='input-group mb-3'>
        <label for="">Imposto</label><br>
       <select name='imposto_id'  id="imposto">
       <option value="{{$produtos->produtoImposto->id}}">{{$produtos->produtoImposto->descricao}}</option>
       @foreach ($impostos as $i)
       <option value="{{$i->id}}">{{$i->descricao}}</option>
           
       @endforeach


       </select>
        </div>      

        
    <div class='input-group mb-3'>
        <label for="">Fornecedor</label><br>
       <select name="fornecedor_id" id="fornecedor">
       <option value="{{$produtos->produtoFornecedor->id}}">{{$produtos->produtoFornecedor->nome}}</option>
       @foreach ($fornecedores as $for)
       <option value="{{$for->id}}">{{$for->nome}}</option>
           
       @endforeach


       </select>
        </div>    

<div class='text-center'><button type="submit" id="alterar-produto" class="btn btn-primary">Alterar os dados</button></div>
<center id="r"></center>   
   
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/Produto.js')}}"></script>    


@endsection