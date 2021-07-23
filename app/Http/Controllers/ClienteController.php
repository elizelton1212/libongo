<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $cliente;
    public function __construct(){
        $this->cliente=new Cliente();


    }

    public function index()
    {
        //
        $clientes= $this->cliente->paginate(10);
        
        return view('cliente.index',compact('clientes'));
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
       $create= $this->cliente->create([
            'nome'=>$request->nome,
            'morada'=>$request->morada,
            'telefone'=>$request->telefone,
            'email'=>$request->email,
            'nif'=>$request->nif
        ]);

        if ($create){
echo 'Dados Cadastrados com sucesso';


        }else{

            'Erro ao cadastrar os dados';
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
        $clientes=$this->cliente->find($id);
        return view('cliente.show',compact('clientes'));
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
        $clientes= $this->cliente->find($id);

        return view('cliente.edit',compact('clientes'));
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
$id = $request->id;
      $update=  $this->cliente->where(['id'=>$id])->update([
            'nome'=>$request->nome,
            'morada'=>$request->morada,
            'telefone'=>$request->telefone,
            'email'=>$request->email,
            'nif'=>$request->nif

        ]);

        if($update){
            echo 'dados alterados com sucesso';

        }else{

            echo 'erro ao editar';
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
        $del=$this->cliente->destroy($id);
        return ($del)?"sim":"nao";
    }
}
