<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ComentarioSistema extends Model
{
    use HasFactory;

    protected $table = 'comentarios_sistema';
    protected $primaryKey = 'id_comentario';
    public $timestamps = false;

    protected $fillable = [
        'id_usuario',
        'comentario',
        'data_comentario',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario', 'id_usuario');
    }
}
