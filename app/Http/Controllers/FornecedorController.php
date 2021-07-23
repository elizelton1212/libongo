<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    private $fornecedor;
    public function __construct(){
        $this->fornecedor=new Fornecedor();


    }

    public function index()
    {
        //
        $fornecedores=$this->fornecedor->paginate(10);
        return view('fornecedor.index',compact('fornecedores'));
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
     $sucesso=   $this->fornecedor->create([
            'nome'=>$request->nome,
            'morada'=>$request->morada,
            'telefone'=>$request->telefone,
            'email'=>$request->email,
            'nif'=>$request->nif,
        ]);

        if($sucesso){
            echo 'Cadastro efectuado com sucesso';

        }else{

            echo "Houve um erro ao cadastrar o Fornecedor";
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
        $fornecedores=$this->fornecedor->find($id);
        
        return view('fornecedor.show',compact('fornecedores'));
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
        $fornecedores=$this->fornecedor->find($id);

        return view('fornecedor.edit',compact('fornecedores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
$id=$request->id;
       $update= $this->fornecedor->where(['id'=>$id])->update([
            'nome'=>$request->nome,
            'morada'=>$request->morada,
            'telefone'=>$request->telefone,
            'email'=>$request->email,
            'nif'=>$request->nif
        ]);

        if($update){

            echo 'dados atualizados com sucesso';
        }else{

            echo 'Houve erro ao atualizar';
        }
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
        $del=$this->fornecedor->destroy($id);
        return ($del)?"sim":"nao";
 
    }
}
