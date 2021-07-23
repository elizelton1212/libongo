@extends('adminlte::page')

@section('title',config('adminlte.title', 'Falhou'))

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
<input type="hidden" name="id" value='{{$categorias->id}}'>
<input type="text" name='descricao' class="form-control" id='descricao' placeholder="Descricao" value='{{$categorias->descricao}}' >
</div>

   
<div class='text-center'><button type="submit" id="alterar-categoria" class="btn btn-primary">Alterar os dados</button></div>
<center id="r"></center>
   
   </form>

   
   <script src="{{asset('js/jquery.min.js')}}"></script>
   <script src="{{asset('js/jquery.validate.min.js')}}"></script>
  <script src="{{asset('js/messages_pt_PT.js')}}"></script>
   <script src="{{asset('js/categoria.js')}}"></script>


@endsection