<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use Gate;
class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     private $categoria;

     public function __construct(){
        $this->categoria=new Categoria();
     }


    public function index()
    {
        //
        If(Gate::denies('criar_categoria'))
        //abort (403,'Acesso não Permitido');
        return redirect()->back();
        $categorias=$this->categoria->paginate(10);
        return view('categoria.index',compact('categorias'));
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
        $insert=$this->categoria->create([
            'descricao'=>$request->descricao

        ]);

        
    if($insert){
        echo 'Dados Cadastrados com Sucesso';

    }else{

        echo 'Erro ao Cadastrar';
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
        $categorias = $this->categoria->find($id);
        return view('categoria.show',compact('categorias'));
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
        $categorias = $this->categoria->find($id);
        return view('categoria.edit',compact('categorias'));
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

        $update= $this->categoria->where(['id'=>$id])->update([
            'descricao'=>$request->descricao
            
            
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
