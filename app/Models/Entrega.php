<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Entrega extends Model
{
    protected $fillable = [
        'nome_cliente','ponto_partida','ponto_destino','data_entrega'
    ];
}
