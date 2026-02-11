<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;

Route::middleware('auth')->group(function () {
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');

    Route::get('/produto/adicionar', [ProductsController::class, 'create'])->name('products.create');
    Route::post('/produto/adicionar', [ProductsController::class, 'store'])->name('products.store');
});

Route::get('/login', [UserController::class, 'showLoginForm'])->name('login.form');
Route::get('/cadastro', [UserController::class, 'showCadastroForm'])->name('cadastro.form');

Route::post('/login/submit', [UserController::class, 'login'])->name('login');
Route::post('/cadastro/submit', [UserController::class, 'cadastro'])->name('cadastro');


Route::get('/', [UserController::class, 'index'])->name('home');


Route::get('/suplementos', [ProductsController::class, 'suplementos'])->name('suplementos');
Route::get('/equipamentos', [ProductsController::class, 'equipamentos'])->name('equipamentos');


Route::post('/carrinho', [UserController::class, 'carrinho'])->name('carrinho');
