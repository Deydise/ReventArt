<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoriaProduto extends Model
{
    use HasFactory;

    protected $table = 'categorias_produtos';
    protected $primaryKey = 'id_categoria';
    public $timestamps = false;

    protected $fillable = [
        'nome_categoria',
    ];

    public function produtos()
    {
        return $this->belongsToMany(Produto::class, 'produtos_categorias', 'id_categoria', 'id_produto');
    }
}
