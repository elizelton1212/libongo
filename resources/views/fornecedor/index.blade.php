@extends('adminlte::page')

@section('title', config('adminlte.title', 'Falhou'))

@section('content_header')
@stop
@section('content')
<div id="teste">
    <div class="modal fade"  id="modal-fornecedor" > 
    <div class="modal-dialog">
    <div class="modal-content background-primary">
    <div class="modal-header">
    
    <h4 class="modal-title"> Cadastrar Fornecedo</h4>
    </div>
    <div class="modal-body">
    
    
    
        
                 
    
                
    <div class="card card-primary">
    <center> <div id="retornoFornecedor"></div></center>
    <form id="formulario-Fornecedor" >
                            {!! csrf_field()!!}
                            <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nome Completo</label>
                        <input type="txt" class="input-group input-group-lg mb-3" name='nome'id="nome" placeholder="Insira o seu Nome"><div id='alertnome'></div>
                        
                      </div>

                      <div class="form'group">
                          <label for="">Morada</label>
                        <input type="text" name="morada" id="morada" class="input-group input-group-lg mb-3" placeholder="Morada">
                        <div id ='alertmorada'></div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Nacionalidade</label>
                       <select class='input-group input-group-lg mb-3' name="nacionalidade" id="nacionalidade">
                       <option value="Angola">Angola</option>
                       <option value="Africa do Sul">Africa do Sul</option>
                       <option value="Brazil">Brazil</option>
                       <option value="Portugal">Portugal</option>
                       </select><div id='alertnacionalidade'></div>
                      </div>
                      <div class="form-group">
                        <label for="telefone ">Telefone</label>
                        <input type="tel" name="telefone" id="telefone" class="input-group input-group-lg mb-3" placeholder="Telefone"><div id='alerttelefone'></div>
                      </div>
                      <div class="form-group">
                      <label for="">Email</label>
                      <input type="email"  name="email" id="email" placeholder="Email" class="input-group input-group-lg mb-3"><div id='alertemail'></div>
                      </div>
                    </div>

                    <div class="form-group">
                        <label for="">NIF</label> <br>
                    <input type="text" name="nif" id="nif" placeholder="NIF">
                  <div id='alertnif'></div>
                    </div>
                    <!-- /.card-body -->
                    
                </div>
                
    
    
    <div class="modal-footer justify-content-between" >
    <button type="submit" class="btn btn-primary" name="salvar" id="salvar-fornecedor">Salvar</button>
    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
    <center id='r'></center>
    
    
    
    </div>
    </form>
    </div>
    </div>
    
    </div>
    </div>
    <div class="box">
    
        <div class="box-header">
            Fornecedor
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
 <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Codigo</th>
 <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Nome Completo</th>
 <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Morada</th>
 <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Telefone</th>
 <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Email</th>
 <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">NIF</th>
 <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Ações a Executar</th>
 <th class="text-center" width="150px">
 <button class="btn btn-primary" id="cadastraFornecedor"  data-toggle="modal" data-target="#modal-fornecedor">
 <Strong>Cadastrar</i></strong>
 </th>
 </tr>
 </thead>
 <tbody>      
    @php
      $n=1;
    @endphp
    @foreach ($fornecedores as $f)                  
                  
      
    <tr role="row" class="odd">
    <td id='codigo' tabindex="0" class="sorting_1">{{$f->id}}</td>       
    <td tabindex='0' >{{$f->nome}}</td>
    <td tabindex="0 ">{{$f->morada}}</td>    
    <td  tabindex="0" class="sorting_1">{{$f->telefone}}</td>
    <td class="sorting_1" tabindex="0">{{$f->email}}</td>
    <td>{{$f->nif}}</td>
    <td>
    <a href="{{url("fornecedor/$f->id")}}" class='show-modal btn btn-info btn-sm'>
    <i class="fas fa-eye"></i>
    </a>
    <a href="{{url("fornecedor/$f->id/edit")}}" class="edit-modal btn btn-warning btn-sm" data-id="{{$f->id}}" data-nome="{{$f->nome}}" data-nacionalidade="{{$f->nacionalidade}}" data-telefone="{{$f->telefone}}" data-email="{{$f->email}}">
    <i class="fas fa-pencil-alt"></i>
    </a>
   <a href="{{url('fornecedor/$f->id')}}" class="delete-modal btn btn-danger btn-sm" data-id="{{$f->id}}" data-nome="{{$f->nome}}" data-nacionalidade="{{$f->nacionalidade}}" data-telefone="{{$f->telefone}}" data-email="{{$f->email}}">
  <i class="fas fa-trash"></i>
   </a>
  </td>
  </tr>
  @php
    $n++
  @endphp
      @endforeach
    <input type='hidden' id='contador' value='{{$n}}'>  
        </tbody>
</table>

<script src="{{asset('js/jquery.min.js')}}"> </script>
        <script src="{{asset('js/fornecedor.js')}}"></script>
@endsection