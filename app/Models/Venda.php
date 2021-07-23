<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Produto;
use App\Models\Funcionario;
class Venda extends Model
{
    //

    protected $fillable=[

'produto_id',
'funcionario_id',
'valor',
'quantidade',
'data',
    ];
public function funiconario()
{
    return $this->hasOne(Funcionario::class);
}

public function vendaProduto(){

return $this->belongsTo(Produto::class);

}

}
