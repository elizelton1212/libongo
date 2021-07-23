<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    //


    protected $fillable=[
        
        'nome',
        'morada',
        'telefone',
        'email',
        'nif',
    
    ];

    public function relProduto(){
        return $this->hasMany('App\Models\Produto','fornecedor_id');

    }
}
