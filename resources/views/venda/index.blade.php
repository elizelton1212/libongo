@extends('adminlte::page')

@section('title',config('adminlte.title', 'Falhou'))

@section('content_header')
@stop
@section('content')



  

<button class="btn btn-primary sm" id="tirar"><i class="fas fa-arrow-circle-right"></i></button>
<form method="post" id ='elton'>
  {!! csrf_field()!!}
<input type="number" name="id" id="id"  placeholder="Codigo do Produto" class="required" ><strong id="alert"> </strong>
<strong id="alertid"></strong>
<input type="number" name="quantidade" id="qtd" placeholder="Quantidade desejada" class="required" ><strong id="alertquntidade"></strong>
<input type='hidden' name ='user_id' value={{auth()->user()->id}}>
<button type='submit' id="ajax" class="btn btn-info"><i class="fas fa-cart-plus fa-lg mr-2"></i></button> 

</form>
<div class="box">
    
    <div class="box-header">
    Produtos Disponiveis
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
<table id="tabela_ProdutosVenda" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
<thead>

  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Codigo</th>  
<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Nome</th>
<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Marca</th>
<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Prazo de Validade</th>
<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Preço</th>
<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Disponiveis</th>

</tr>
</thead>
<tbody>      

@foreach ($produtos as $p)                  
             
  
<tr id="c" role="row" class="odd">
<td>{{$p->id}}</td>       
<td tabindex='0' id="nome">{{$p->nome}}</td>
<td id="marca">{{$p->marca}}</td>
<td id='validade'>{{$p->validade}}</td>
<td id='precoVenda'>{{$p->precoVenda}}</td>
<td>{{$p->quantidade}}</td>
</tr>
 @endforeach
  
    </tbody>
</table>
</div>
</div>
<div class='card btn-info text-center' id="carrinho">Carrinho de Compras</div>
<table class="table table-bordered table-hover dataTable dtr-inline" id="carrinho2">
<thead>
<th>Nº</th>  
<th>Nome</th>
<th>Marca</th>
<th>Quantida</th>
<th>Preço</th>
</thead>
<tbody>


</tbody>

</table>
</div>
</div></div>
<strong id="total"> </strong>
</div>
<button type="button" id="Comprar">Comprar</button>
<button id="Imprimir">Imprimir</button>
</div>
<center id="alertCompra"></center>
</div></div></div>

            
</div>
</div>
</div>
</div></div></div>

  </div>
  </div>



  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/jquery.validate.min.js')}}"></script>
  <script src="{{asset('js/messages_pt_PT.js')}}"></script>
  

<script src="{{asset('js/Venda.js')}}"></script>
@endsection