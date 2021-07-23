@extends('adminlte::page')

@section('title', config('adminlte.title', 'Falhou'))

@section('content_header')
@stop
@section('content')
    <div class="box">
    
        <div class="box-header">
    Impostos
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
 <table id="tabela-imposto" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
 <thead>
 <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Codigo</th>
 <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Descricao</th>
 <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Percentagem</th>
 <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Ações a Executar</th>

 <th class="text-center" width="150px">
 <button class="btn btn-primary" id="cadastraCategoria"  data-toggle="modal" data-target="#modal-imposto">
 <Strong>Cadastrar</i></strong>
 </th>
 </tr>
 </thead>
 <tbody>      
  @php
    $n=1;
  @endphp
  
      @foreach ($impostos as $f)                  
                  
      
    <tr role="row" class="odd">
    <td id='codigo' tabindex="0" class="sorting_1">{{$f->id}}</td>       
    <td tabindex='0' >{{$f->descricao}}</td>
    <td tabindex='0' >{{$f->percentagem}}</td>
    <td>
    <a href="{{url("imposto/$f->id")}}" class='show-modal btn btn-info btn-sm'>
    <i class="fas fa-eye"></i>
    </a>
    <a href="{{url("imposto/$f->id/edit")}}" class="edit-modal btn btn-warning btn-sm" data-id="{{$f->id}}" data-nome="{{$f->nome}}" data-nacionalidade="{{$f->nacionalidade}}" data-telefone="{{$f->telefone}}" data-email="{{$f->email}}">
    <i class="fas fa-pencil-alt"></i>
    </a>
   <a href="{{url('imposto/$f->id')}}" class="delete-modal btn btn-danger btn-sm" data-id="{{$f->id}}" data-nome="{{$f->nome}}" data-nacionalidade="{{$f->nacionalidade}}" data-telefone="{{$f->telefone}}" data-email="{{$f->email}}">
  <i class="fas fa-trash"></i>
   </a>
  </td>
  </tr>
  @php
    $n++;
  @endphp
      @endforeach 
      <input type='hidden' id='contador' value='{{$n}}'> 
        </tbody>
</table>
{{$impostos->links()}}
<div id="teste">
    <div class="modal fade"  id="modal-imposto" > 
    <div class="modal-dialog">
    <div class="modal-content color-primary">
    <div class="modal-header">
    
    <h4 class="modal-title"> Cadastrar Imposto</h4>
    </div>
    <div class="modal-body">
    
    
    
        
                 
    
                
    <div class="card card-primary">
    <center> <div id="retornoImposto"></div></center>
    <form  method='POST' >
                            {!! csrf_field()!!}
                            <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Descricao</label>
                        <input type="txt" class="input-group input-group-lg mb-3" name='descricao'id="descricao" placeholder="Descricao"><div id='alertdescricao'></div>
                        
                      </div>
                      <div class="form-group">
                        <label for="">Percentagem</label><br>
                        <input type="number" name="percentagem" id="percentagem" placeholder="percentagem" class="input-group-lg mb-3">
                      </div>
                    <!-- /.card-body -->
    
                </div>
                
    
    
    <div class="modal-footer justify-content-between" >
    <button type="submit" class="btn btn-primary" name="salvar" id="salvarImpo">Salvar</button>
    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
    <center id="r"></center>
  </form>
   
    
    
    
    </div>
     </div>
    </div>
    
    </div>
    </div>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/Imposto.js')}}"></script>
            

@endsection