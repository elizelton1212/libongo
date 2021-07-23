<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Balanco extends Model
{
    //
    protected $fillable = [
        'marca',
        'valor',
        'quantidade',
        'data',
        'funcionario'

    ];
}
