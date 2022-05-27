<?php

use App\Http\Controllers\LivroController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

//Produtos
Route::get('/produto', [ProdutoController::class, 'index'])->name('produto');
Route::get('/produto/criar', [ProdutoController::class, 'criar'])->name('produto/criar');
Route::get('/produto/ver/{prod}', [ProdutoController::class, 'ver'])->name('produto/ver');
Route::post('/produto/criar', [ProdutoController::class, 'inserir'])->name('produto/inserir');

//Livros
Route::get('/livro', [LivroController::class, 'index'])->name('livro');
Route::get('/livro/criar', [LivroController::class, 'criar'])->name('livro/criar');
Route::get('/livro/ver/{id}', [LivroController::class, 'ver'])->name('livro/ver');
Route::post('/livro/criar', [LivroController::class, 'inserir'])->name('livro/inserir');
