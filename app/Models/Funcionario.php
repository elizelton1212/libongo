<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Funcionario extends Model
{
    //
    protected $fillable = [
        'nome',
        'genero',
        'estadoCivil',
        'nBi',
        'inss',
        'nacionalidade',
        'iban',
        'user_id',
    
    ];
    public function venda()
    {
        # code...
        return $this->hasMany(Venda::class);
    }

    public function funcionarioUser(){

        return $this->hasOne(User::class,'id','user_id');
    }

}
