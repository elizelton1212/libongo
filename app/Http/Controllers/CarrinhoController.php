<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
class CarrinhoController extends Controller
{
    //


    private $produtos;

public function __contruct(){

    $this->produtos= new Produto();
}

    public function index(Request $request){

        $id=$request->id;
        $produto = Produto::find($id);

        
       return response()->json($produto);
        
}

           

        


    



}
