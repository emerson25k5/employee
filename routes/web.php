<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionarioController;

Route::resource('funcionarios', FuncionarioController::class);

Route::get('/', function () {
    return view('funcionario.index');
});
