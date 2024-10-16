<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProdutoCategoria extends Model
{
    use HasFactory;

    protected $table = 'produtos_categorias';
    public $timestamps = false;
    public $incrementing = false;

    protected $fillable = [
        'id_produto',
        'id_categoria',
    ];

    public function produto()
    {
        return $this->belongsTo(Produto::class, 'id_produto', 'id_produto');
    }

    public function categoria()
    {
        return $this->belongsTo(CategoriaProduto::class, 'id_categoria', 'id_categoria');
    }
}
