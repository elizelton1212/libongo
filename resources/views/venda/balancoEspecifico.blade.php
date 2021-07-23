@extends('adminlte::page')

@section('title', config('adminlte.title', 'Falhou'))
@section('content_header')

@stop

@section('content')

<form method='post' action='{{url('balancoES')}}'>
 {!! csrf_field()!!}
<input type="date" name="data" id="data" class="required" ><strong id="alert"> </strong>
<label>Funcionario</label>
<select name ='funcionario_id'>
<option value=''>-----------</option>
@foreach($funcionario as $key)
    <option value='{{ $key->id }}'>{{$key->nome }}</option>
@endforeach
</select>
<strong id="alertid"></strong>

<button type='submit' id="balanco" class="btn btn-info"><i class="fas fa-list"></i></button> 
</form>

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
<table id="tabela_balanco" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
<thead>

<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Marca</th>
<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Valor</th>
<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Quantidade</th>
<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Funcionario</th>

</tr>
</thead>
<tbody>   

</tbody>
</table>
 <script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/Venda.js')}}"></script>
@stop