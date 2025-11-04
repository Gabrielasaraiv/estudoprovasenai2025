<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'quantidade',
        'quantidade_minima'
    ];

    public function movimentacoes(){
        return $this->hasMany(Movimentacoes::class);
    }
}
