@extends('adminlte::page')

@section('title', config('adminlte.title', 'Falhou'))

@section('content_header')
@stop
@section('content')

<div class="box">

    <div class="box-header">
    Funcionarios
 </div>
<div class="box-body">
  <div id="teste">
    <div class="modal fade"  id="modal-funcionario" > 
    <div class="modal-dialog">
    <div class="modal-content background-primary">
    <div class="modal-header">
    
    <h4 class="modal-title"> Cadastrar Funcionario</h4>
    </div>
    <div class="modal-body">
      <div class="card card-primary">
        <center> <div id="retornoFornecedor"></div></center>
      <form id="formulario-Fornecedor" method='POST'>
        {!! csrf_field()!!}

        <div class="card-body">
      <div class="form-group">
       <input type="txt" class="input-group input-group-lg mb-3" name='nome'id="nome" placeholder="Insira o seu Nome"><div id='alertnome'>
                              </div>                   
                          </div>
                          <div class="form-group">
                            <label for="genero">Genero</label><div id='alertgenero'></div><br>
                           Masculino <input type="radio" name="genero" id="generoM" value="Masculino">
                           Femenino  <input type="radio" name="genero" id="generoF" value='Femenino'>
                            <br><br>
                            <label for="">Estado Civil</label><br>
                            Casado(a) <input type="radio" name="estadoCivil" id="genero" value="Casado(a)">
                            Solteiro(a)<input type="radio" name="estadoCivil" id="genero" value='Solteiro(a)'>

                            </div>
                          </div>
                          <div class="form-group">
                            <label>Função</label> <div id='alertfuncao'></div>
                            <select name='role' class='input-group input-group-lg mb-3' id='funcao'>
                          <option value=''></option>
                          @foreach($roles as $r)
                          <option value='{{$r->id}}'>{{$r->name}} </option>
                            
                          @endforeach
                            </select> 
                            <input type="text" name="nbi" id="nbi" placeholder="Numero do BI"><div id='alertnbi'></div>
                            <input type="text" name="inss" id="inss" placeholder="Inss"><div id='alertinss'></div>

                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Nacionalidade</label><div id='alertnacionalidade'></div>
                           <select class='input-group input-group-lg mb-3' name="nacionalidade" id="nacionalidade">
                           <option value="Angola">Angola</option>
                           <option value="Africa do Sul">Africa do Sul</option>
                           <option value="Brazil">Brazil</option>
                           <option value="Portugal">Portugal</option>
                           </select><div id='alertnacionalidade'></div>
                          </div>
                          <div class="form-group">
                            
                            <input type="tel" name="iban" id="iban"  placeholder="IBAn"><div id='alertiban'></div>
                          
                          
                          <input type="text"  name="departamento" id="departamento" placeholder="Departamento" ><div id='alertdepartamento'></div>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          
                          <input type="text" name="name" id="name"  placeholder="Nome de Utilizador"><div id='alertname'></div>
                          
                          <input type="email" name="email" id="email" placeholder="Email@"><div id='alertemail'></div>

                          <input type="password" name="password" id="password" placeholder="Password"><div id='alertpassword'></div>

                        </div>
                        <!-- /.card-body -->
        
                    </div>
                            
        <div class="modal-footer justify-content-between" >
        <button type="submit" class="btn btn-primary" name="salvar" id="salvar-funcionario">Salvar</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        <center id="r"></center>
        
        
        
        </div>
        </form>
        </div>
        </div>
        
        </div>
        </div>
            


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
                <table id="tabela-funcionario" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                  <thead>
                  <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Nome Completo</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Genero</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Nacionalidade</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Iban</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Ação a Efectuar</th>
                  <th class="text-center" width="150px">
                 @can('cadastrar_funcionario')
                   
                 
                  <button class="btn btn-primary" id="cadastraFucionario"  data-toggle="modal" data-target="#modal-funcionario">
                  <Strong>Cadastrar</i></strong>
                  </th>
                  @endcan
                  </tr>
                  </thead>
                  <tbody>  
                  @php
                    $n =1;
                  @endphp    
                  @foreach ($funcionarios as $f)
                      <tr>
                    <td>{{$f->id}}</td>
                    <td>{{$f->nome}}</td>
                   <td>{{$f->genero}}</td>
                    <td>{{$f->nacionalidade}}</td>
                    <td>{{$f->iban}}</td>
                    @can('cadastrar_funcionario')
                      
                   
                    <td>
<a href="{{url("funcionario/$f->id")}}"> <button class='btn btn-info'><i class='fas fa-eye'> </i></button></a>
<a href="{{url("funcionario/$f->id/edit")}}"> <button class='btn btn-primary'><i class="fas fa-edit"></i></button></a>
<a  class="js-del" href="{{url("funcionario/$f->id")}}"> <button class='btn btn-danger'><i class="fas fa-trash"></i></button></a>

                    </td>
                     @endcan
                      </tr>
             @php
               $n++;
             @endphp         
                  @endforeach
              <input type='hidden' value='{{$n}}' id='contador'>
                  </tbody>
                </table>
                {{$funcionarios->links()}}
              <script src="{{asset('js/jquery.min.js')}}"></script>
              <script src="{{asset('js/funcionario.js')}}"></script>
@endsection