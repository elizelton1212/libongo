<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;
use App\User;
use App\Role;
use Illuminate\Support\Facades\DB;
use Gate;
class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $funcionario;
    private $user;
    private $role;

    public function __construct(){
        $this->funcionario=new Funcionario();
        $this->user=new User();
        $this->role=new Role();
    }

    public function index()
    {
        If(Gate::denies('cadastrar_funcionario'))
        //abort (403,'Acesso não Permitido');
        return redirect()->back();
        $roles=$this->role->all();
        $funcionarios=$this->funcionario->paginate(10);

        return view('funcionario.index',compact('funcionarios','roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd($request->email);
        $createUser= $this->user->create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password), 
        ]);
       $id=$createUser->id;
       $user_role = DB::insert('insert into role_user (user_id,role_id)values(?,?)',[$id,$request->role]);
        
if($createUser && $user_role){
    $create= $this->funcionario->create([
        'nome'=>$request->nome,
        'genero'=>$request->genero,
        'estadoCivil'=>$request->estadoCivil,
        'nBi'=>$request->nbi,
        'inss'=>$request->inss,
        'nacionalidade'=>$request->nacionalidade,
        'iban'=>$request->iban,
        'user_id'=>$id
    ]);


if ($create){
echo 'Dados Cadastrados com sucesso';

}else{
    echo 'erro ao cadastrar';
}
    

}

    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

  $funcionarios = $this->funcionario->find($id);      
return view('funcionario.show',compact('funcionarios'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $funcionarios= $this->funcionario->find($id);
        
            //dd($funcionarios->funcionarioUser->id->role);       
        $roles = $this->role->all();
        return view('funcionario.edit',compact('funcionarios','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
       $update= $this->funcionario->where(['id'=>$id])->update([
            'nome'=>$request->nome,
            'genero'=>$request->genero,
            'estadoCivil'=>$request->estadoCivil,
            'funcao'=>$request->funcao,
            'nBi'=>$request->nBi,
            'inss'=>$request->inss,
            'nacionalidade'=>$request->nacionalidade,
            'iban'=>$request->iban,
            'departamento'=>$request->departamento
            
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $del=$this->funcionario->destroy($id);
        return ($del)?"sim":"nao";
 
    }
}
