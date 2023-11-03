<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    
    protected $table = 'produtos';
    protected $primaryKey ='id';
    protected $fillable = ['nome_do_produto','descricao','preco_do_produto','quantidade_em_estoque'];
}
