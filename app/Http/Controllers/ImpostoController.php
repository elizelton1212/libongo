<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\imposto;
use Gate;
class ImpostoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $imposto;
    public function __construct(){
        $this->imposto=new imposto();



    }
    public function index()
    {
        //
        If(Gate::denies('cadastrar_imposto'))
        //abort (403,'Acesso não Permitido');
        return redirect()->back();
        $impostos = $this->imposto->paginate(10);
        return view('imposto.index',compact('impostos'));
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
        $insert=$this->imposto->create([
            'descricao'=>$request->descricao,
            'percentagem'=>$request->percentagem,

        ]);

        if ($insert){
            echo 'Dados Cadastrados com Sucesso';

        }else{

            echo 'Houve um Erro ao Cadastrar';
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
        $impostos=$this->imposto->find($id);
        return view('imposto.show',compact('impostos'));
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
        $impostos=$this->imposto->find($id);
        return view('imposto.edit',compact('impostos'));
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

        $update= $this->imposto->where(['id'=>$id])->update([
            'descricao'=>$request->descricao,
            'percentagem'=>$request->percentagem
            
        ]);
            if($update){
                echo'Os dados foram alterados com sucesso';


            }else {
                echo'Houve erro ao atualizar os dados';
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
    }
}
