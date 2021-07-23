<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;
use App\Models\imposto;
use App\Models\Produto;
use App\Models\Categoria;
use Gate;
class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $produto;
    private $fornecedor;
    private $imposto;
    private $categoria;
    public function __construct(){
        $this->produto=new Produto();
        $this->fornecedor=new Fornecedor();
        $this->imposto = new imposto();
        $this->categoria = new Categoria();
    }

    public function index()
    {
        //
        If(Gate::denies('cadastrar_produto'))
        //abort (403,'Acesso não Permitido');
        return redirect()->back();
$produtos=$this->produto->paginate(10);
$impostos=$this->imposto->all();
$categorias=$this->categoria->all();
$fornecedores=$this->fornecedor->all();
return view('produto.index',compact('produtos','impostos','categorias','fornecedores'));
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

       // dd($request->precoCusto);
        $create= $this->produto->create([
            'nome'=>$request->nome,
            'marca'=>$request->marca,
            'tipo'=>$request->tipo,
            'precoVenda'=>$request->precoVenda,
            'precoCusto'=>$request->precoCusto,
            'validade'=>$request->validade,
            'quantidade'=>$request->quantidade,
            'categoria_id'=>$request->categoria_id,
            'imposto_id'=>$request->imposto_id,
            'fornecedor_id'=>$request->fornecedor_id
            
        ]);

        if($create){
            echo 'Dados Cadastrados com sucesso';
        }else{
            'Erro ao Cadastrar os Dados';
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
        $produtos=$this->produto->find($id);
        $fornecedores=$this->fornecedor->all();

        return view('produto.show',compact('produtos','fornecedores'));

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
        $produtos = $this->produto->find($id);
        $categorias= $this->categoria->all();
        $impostos = $this->imposto->all();
        $fornecedores=$this->fornecedor->all();

        return view('produto.edit',compact('produtos','categorias','impostos','fornecedores'));

        
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
        $update= $this->produto->where(['id'=>$id])->update([
            'nome'=>$request->nome,
            'marca'=>$request->marca,
            'tipo'=>$request->tipo,
            'precoVenda'=>$request->precoVenda,
            'precoCusto'=>$request->precoCusto,
            'validade'=>$request->validade,
            'quantidade'=>$request->quantidade,
            'categoria_id'=>$request->categoria_id,
            'imposto_id'=>$request->imposto_id,
            'fornecedor_id'=>$request->fornecedor_id

        ]);

        if ($update){
            echo 'Dados Alterados com Sucesso';
        }else{
            echo 'Erro ao Alterar os Dados';
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

    public function editar(Request $request)
    {
        
        $produtos = $this->produto->find($id);
        $categorias= $this->categoria->all();
        $impostos = $this->imposto->all();
        $fornecedores=$this->fornecedor->all();

        return view('produto.edit',compact('produtos','categorias','impostos','fornecedores'));

    }
}
