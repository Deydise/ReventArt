<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaVendedor extends Controller
{
    public function PaginaVendedor()
    {
        // Aqui você pode passar dados para a view, se necessário.
        return view('pagina_do_vendedor');
    }
}