<?php

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
    return view('welcome');
});

Route::get('/produtos/index', [ProdutoController::class, 'index'])->name('produtos/index');
Route::get('/produtos/criar', [ProdutoController::class, 'criar'])->name('produtos/criar');
Route::get('/produtos/ver', [ProdutoController::class, 'ver'])->name('produtos/ver');

