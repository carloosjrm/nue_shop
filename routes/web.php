<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

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

Route::get('/produto', [ProdutoController::class, 'index'])->name('produto.index');
Route::get('/produto/create', [ProdutoController::class, 'create'])->name('produto.create');
Route::post('/produto', [ProdutoController::class, 'store'])->name('produto.store');
Route::get('/produto/{produto}/edit', [ProdutoController::class, 'edit'])->name('produto.edit');
Route::put('/produto/{produto}/update', [ProdutoController::class, 'update'])->name('produto.update');
Route::delete('/produto/{produto}/destroy', [ProdutoController::class, 'destroy'])->name('produto.destroy');
