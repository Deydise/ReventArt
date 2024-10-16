<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produto extends Model
{
    use HasFactory;

    protected $table = 'produtos';
    protected $primaryKey = 'id_produto';
    public $timestamps = false;

    protected $fillable = [
        'id_usuario',
        'nome_produto',
        'descricao_produto',
        'preco',
        'imagem_produto',
        'data_cadastro',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario', 'id_usuario');
    }

    public function fotos()
    {
        return $this->hasMany(FotoProduto::class, 'id_produto', 'id_produto');
    }

    public function categorias()
    {
        return $this->belongsToMany(CategoriaProduto::class, 'produtos_categorias', 'id_produto', 'id_categoria');
    }
}
