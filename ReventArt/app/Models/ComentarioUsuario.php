<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ComentarioUsuario extends Model
{
    use HasFactory;

    protected $table = 'comentarios_usuarios';
    protected $primaryKey = 'id_comentario';
    public $timestamps = false;

    protected $fillable = [
        'id_usuario_origem',
        'id_usuario_destino',
        'comentario',
        'data_comentario',
    ];

    public function usuarioOrigem()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario_origem', 'id_usuario');
    }

    public function usuarioDestino()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario_destino', 'id_usuario');
    }
}
