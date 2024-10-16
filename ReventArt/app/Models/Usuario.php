<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'email',
        'senha',
        'foto_perfil',
        'data_cadastro',
    ];

    protected $hidden = ['senha'];

    public function produtos()
    {
        return $this->hasMany(Produto::class, 'id_usuario', 'id_usuario');
    }

    public function comentariosEnviados()
    {
        return $this->hasMany(ComentarioUsuario::class, 'id_usuario_origem', 'id_usuario');
    }

    public function comentariosRecebidos()
    {
        return $this->hasMany(ComentarioUsuario::class, 'id_usuario_destino', 'id_usuario');
    }

    public function comentariosSistema()
    {
        return $this->hasMany(ComentarioSistema::class, 'id_usuario', 'id_usuario');
    }
}
