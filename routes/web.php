<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionarioController;

Route::resource('funcionario', FuncionarioController::class);

Route::get('/', function () {
    return view('home.home');
})->name('home');