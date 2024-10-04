<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaVendedorController;
use App\Http\Middleware\Autenticador;

Route::middleware(Autenticador::class)->group(function(){
    Route::get('/vendedor/pagina', [PaginaVendedorController::class, 'PaginaVendedor'])->name('pagina_vendedor');
});
