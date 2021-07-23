<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Cliente;
use App\Models\Venda;
use App\User;
use App\Models\Funcionario;
use Illuminate\Support\Facades\DB;
use App\Models\Balanco;
class VendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $produto;
    private $venda;
    private $funcionario;
    private $user;
    private $balanco;

     public function __construct(){
        $this->produto= new Produto();
        $this->venda = new Venda();
        $this->funcionario= new Funcionario();
        $this->user= new User();
        $this->balanco = new Balanco();
     }
    public function index()
    {
        //
        $produtos = $this->produto->paginate(10);
        // $clientes= $this->cliente->all();

        return view('venda.index',compact('produtos'));
        
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


    public function compra(Request $request){
        $funcionario = $this->user->find(auth()->user()->id)->userFuncionario->id;


    $compra =    $this->venda->create([
            'produto_id'=>$request->idProduto,
            'funcionario_id'=>$funcionario,
            'valor'=>$request->preco,
            'quantidade'=>$request->quantidade,
            'data'=>$request->data,

        ]);

        $marca= $this->produto->find($request->idProduto);
        $funcionario=$this->funcionario->find($funcionario);

        

        $produtos = $this->produto->find($request->idProduto);
        $produtos->quantidade -=$request->quantidade;
        $produtos->save();

        if($compra){
            echo 'passei';
            Balanco::create([
            'marca'=>$marca->marca,
            'valor'=>$request->preco,
            'quantidade'=>$request->quantidade,
            'data'=>$request->data,
            'funcionario'=>$funcionario->nome


            ]);

        }



    }


    public function balanco()
    {
        # code...
    

        return view('venda.balanco');
    }

    public function balancoR(Request $request)
    {
        # code...
        $valor = 0;
        $vendas = $this->venda->where(['data'=>$request->data])->paginate(200);
        //$vendas = $this->balanco->paginate(200);
    $funcionario = new Funcionario();
    $produto = new Produto();  
        foreach ($vendas as $v) {
            # code...
            
            $temp=(int)$v->valor;
            $valor =$valor+$v->valor;
            
        }

        

      //dd($vendas);
       return view('venda.verBalanco',compact('vendas','valor','funcionario','produto'));
          


    }


    public function balancoE()
    {
       $funcionario=$this->funcionario->all();
    return view('venda.balancoEspecifico',compact('funcionario'));

    }

    public function balancoEShow(Request $request)
    {
        # code...

        $valor = 0;

        $vendas = $this->venda->where(['data'=>$request->data])->where('funcionario_id',$request->funcionario_id)->paginate(2000);

        $funcionario = new Funcionario();
        $produto = new Produto();  
    
        foreach ($vendas as $v) {
            # code...
            
            $temp=(int)$v->valor;
            $valor =$valor+$v->valor;
            
        }

        
        return view('venda.balancoEspecificoShow',compact('vendas','valor','funcionario','produto'));
    }
}
