@extends('adminlte::page')

@section('title', config('adminlte.title', 'Falhou'))

@section('content_header')
@stop
@section('content')

<div class="box">
    
    <div class="box-header">
Produtos
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
<table id="tabela-fornecedor" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
<thead>
<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Id</th>
<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Nome</th>
<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Marca</th>
<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Data de Cadastro</th>
<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">QTD</th>
<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Fornecedor</th>










<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Ações a Executar</th>
@can('cadastrar_produto')
  

<th class="text-center" width="150px">
<button class="btn btn-primary" id="cadastrarProduto"  data-toggle="modal" data-target="#modal-produto">
<Strong>Cadastrar</i></strong>
</th>
@endcan
</tr>
</thead>
<tbody>      

    @foreach ($produtos as $f)                  
                  
      
    <tr role="row" class="odd">
    <td id='codigo' tabindex="0" class="sorting_1">{{$f->id}}</td>       
    <td tabindex='0' >{{$f->nome}}</td>
    <td tabindex='0' >{{$f->marca}}</td>
    <td tabindex='0' >{{$f->created_at}}</td>
    <td tabindex='0' >{{$f->quantidade}}</td>
    <td tabindex='0' >{{$f->produtoFornecedor->nome}}</td>
   @can('editar_produto', $f)
     
   
    <td>
    <a href="{{url("produto/$f->id")}}" class='show-modal btn btn-info btn-sm'>
    <i class="fas fa-eye"></i>
    </a>
    <a href="{{url("produto/$f->id/edit")}}" class="edit-modal btn btn-warning btn-sm" data-id="{{$f->id}}" data-nome="{{$f->nome}}" data-nacionalidade="{{$f->nacionalidade}}" data-telefone="{{$f->telefone}}" data-email="{{$f->email}}">
    <i class="fas fa-pencil-alt"></i>
    </a>
   <a href="{{url('produto/$f->id')}}" class="delete-modal btn btn-danger btn-sm" data-id="{{$f->id}}" data-nome="{{$f->nome}}" data-nacionalidade="{{$f->nacionalidade}}" data-telefone="{{$f->telefone}}" data-email="{{$f->email}}">
  <i class="fas fa-trash"></i>
   </a>
  </td>
  @endcan
  </tr>
      @endforeach  
        </tbody>
</table>
{{$produtos->links()}}
<div id="teste">
    <div class="modal fade"  id="modal-produto" > 
    <div class="modal-dialog">
    <div class="modal-content btn btn-Secondary">
    <div class="modal-header">
    
    <h4 class="modal-title"> Cadastrar Produto</h4>
    </div>
    <div class="modal-body ">
    
    
    
        
                 
    
                
    <div class="card card-primary">
    <center> <div id="retornoFornecedor"></div></center>
    <form id="formulario-produto" method='POST' role="form" action="{{url('produto')}}">
                            {!! csrf_field()!!}
                            <div class="card-body">
                      <div class="form-group form-group input-group input-group-lg mb-3">
                        <input type="txt"  name='nome'id="nome" placeholder="nome"><div id='alertnome'></div>
                        <input type="text" name="marca" id="marca" placeholder="Marca"><div id='alertmarca'></div>
                        <input type="text" name="tipo" id="tipo" placeholder="Tipo"><div id='alerttipo'></div>
                                   
                      </div>
                      
                    <div class="form-group input-group input-group-lg mb-3">
                      <input type="number"  name="precoVenda" id="precoVenda" placeholder="Preço da Venda"><div id='alertprecovenda'></div>
                        <input type="number" name="precoCusto" id="precoCusto" placeholder="Preco de Custo"><div id='alertprecoCusto'></div>
                        <label for="">Data de Validade</label> 
                        <input type="date" name="validade" id="validade" placeholder="Data de Validade"><div id='alertvalidade'></div>
                    </div>

                    <div class="form-group input-group input-group-lg mb-3">
                      <input type="number" name="quantidade" id="quantidade" placeholder="Quantidade"><div id='alertquantidade'></div>

                    </div>

                    <div class="form-group input-group input-group-lg mb-3">
                      <label for="Categoria">Categoria</label>
                      <br>
                      <select name="categoria_id" id="categoria">
                        <option value=""></option>
                        @foreach ($categorias as $c)
                      <option value="{{$c->id}}">{{$c->descricao}}</option>
                        @endforeach
                      </select><div id='alertcategoria'></div>

                    </div>

                    <div class="form-group input-group input-group-lg mb-3">
                      <label for="Imposto">Imposto</label>
                      <br>
                      <select name="imposto_id" id="imposto">
                        <option value=""></option>
                        @foreach ($impostos as $i)
                      <option value="{{$i->id}}">{{$i->descricao}}</option>
                        @endforeach
                      </select><div id='alertimposto'></div>

                    </div>
    
                    <div class="form-group input-group input-group-lg mb-3">
                      <label for="fornecedor">Fornecedor</label><br>
                      <select name="fornecedor_id" id="fonecedor">
                        <option value=""></option>
                        @foreach ($fornecedores as $for)
                      <option value="{{$for->id}}">{{$for->nome}}</option>
                        @endforeach

                      </select>
                      <div id='alertfornecedor'></div>
                    </div>
                </div>
                
    
    
    <div class="modal-footer justify-content-between" >
    <button type="submit" class="btn btn-primary" name="salvar" id="salvar-produto">Salvar</button>
    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
    <center id="r"></center>
    
    
    
    </div>
    </form>
    </div>
    </div>
    
    </div>
    </div>

    <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/Produto.js')}}"></script>    

    
@endsection