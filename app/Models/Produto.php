<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Fonecedor;
use App\Models\imposto;
use App\Models\Categoria;
class Produto extends Model
{
    //

    protected $fillable=[
        'nome',
        'marca',
        'tipo',
        'precoVenda',
        'precoCusto',
        'validade',
        'quantidade',
        'categoria_id',
        'imposto_id',
        'fornecedor_id',
        ];
    
        public function produtoCategoria(){
            return $this->hasOne(Categoria::class,'id','categoria_id');
        }
        public function produtoImposto()
        {
            return $this->hasOne(imposto::class,'id','imposto_id');
        }
    
      
         public function produtoFornecedor(){
             return $this->hasOne(Fornecedor::class,'id','fornecedor_id');
         }

         public function venda()
         {
             # code...

             return $this->hasMany(Venda::class);
         }
}
