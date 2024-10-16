<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PaginaVendedor extends Controller
{
    public function PaginaVendedor($id)
    {
          // Consulta para buscar as informações do usuário
          $usuario = DB::table('usuarios')
          ->where('id', $id)
          ->first();

      // Consulta para buscar os produtos do usuário/artesão
      $produtos = DB::table('produtos')
          ->where('usuario_id', $id)
          ->get();

      // Consulta para buscar as avaliações do usuário
      $avaliacoes = DB::table('avaliacoes')
          ->join('produtos', 'avaliacoes.produto_id', '=', 'produtos.id')
          ->where('produtos.usuario_id', $id)
          ->select('avaliacoes.*', 'produtos.nome as produto_nome', 'produtos.imagem as produto_imagem', 'produtos.preco as produto_preco')
          ->get();

      // Dados do contato do usuário
      $contato = DB::table('contatos')
          ->where('usuario_id', $id)
          ->first();

      // Renderizando a página com os dados necessários
      return view('pagina_do_vendedor', [
          'usuario' => $usuario,
          'produtos' => $produtos,
          'avaliacoes' => $avaliacoes,
          'contato' => $contato,
      ]);
  }
}
