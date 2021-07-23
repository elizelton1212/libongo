@extends('adminlte::page')

@section('title', config('adminlte.title', 'Falhou'))

@section('content_header')
@stop
@section('content')
    

<div class="box">

    <div class="card card-primary">
   <div class="card-header">
   <h3 class="card-title">Editar dados da Categoria Selecionada</h3>
   </div>
   
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
   
   <script src="{{asset('js/jquery.min.js')}}"></script>
   <script src="{{asset('js/jquery.validate.min.js')}}"></script>
  <script src="{{asset('js/messages_pt_PT.js')}}"></script>
   <script src="{{asset('js/categoria.js')}}"></script>


@endsection