<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\TesteController;

// use app\Http\Controllers\TesteController;


Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobrenos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [ContatoController::class, 'salvar'])->name('site.contato');
Route::get('/login', function(){ return 'login'; })->name('site.login');

// /definição de agrupamento de rotas, add prefixo /app
Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){ return 'Clientes'; })->name('app.clientes');
    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('app.fornecedores');
    Route::get('/produtos', function(){ return 'Produtos'; })->name('app.produtos');
});


Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('teste');



// Route::redirect('/rota2', '/rota1');

//Rota de fallback
Route::fallback(function(){
    echo 'a rota acessada não existe';
});