<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index'])->name('home');
Route::view('/suplementos', 'suple')->name('suplementos');
Route::view('/equipamentos', 'equipamentos')->name('equipamentos');
