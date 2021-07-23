@extends('adminlte::page')

@section('title', config('adminlte.title', 'Falhou'))
@section('content_header')

@stop

@section('content')


<div class="box">
    
    <div class="box-header">
    Balanço
 </div>
<div class="box-body">

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
<div class="card-body">
<div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row">
<div class="col-sm-12 col-md-6"></div>
<div class="col-sm-12 col-md-6">
</div></div><div class="row">
<div class="col-sm-12">
@php
    $n=1;
@endphp
<table id="tabela_balanco" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
<thead>
<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Nº</th>

<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Marca</th>
<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Valor</th>
<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Quantidade</th>
<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Data</th>

<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Funcionario</th>

</tr>
</thead>
<tbody>   

@foreach($vendas as $v)
@php
  $f = $funcionario->find($v->funcionario_id);
  $p = $produto->find($v->produto_id);
@endphp
    

<tr>
<td>{{$n}}</td>
<td>{{$p->marca}} </td>
<td>{{$v->valor}}</td>
<td>{{$v->quantidade}}</td>
<td>{{$v->created_at}}</data>
<td>{{$f->nome}}</td>  
 

 

</tr>
@php
    $n++;
@endphp

   


@endforeach

</tbody>
</table>
{{$vendas->links()}}
@if($n>0)
<strong class='text-center'>Total:<i>{{$valor}}.00 KZ</i></strong>
    
@endif
 <script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/Venda.js')}}"></script>
@stop