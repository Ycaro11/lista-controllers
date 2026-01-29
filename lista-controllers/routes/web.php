<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('welcome');
});

// Atv 1
Route::get('/cursos', [CursoController::class, 'index']);

// Atv 2
Route::get('/cursos/novo', [CursoController::class, 'create']);

// Atv 3
Route::get('/cursos/lista', [CursoController::class, 'listagem']);

// Atv 5
Route::post('/cursos/salvar', [CursoController::class, 'store']);

// Atv 4
Route::get('/cursos/{id}', [CursoController::class, 'show']);

// Atv 6:
Route::resource('/alunos', AlunoController::class);

// Atv 7
Route::get('/disciplinas', [DisciplinaController::class, 'index']);
Route::get('/disciplinas/create', [DisciplinaController::class, 'create']);
Route::post('/disciplinas/store', [DisciplinaController::class, 'store']);
Route::get('/disciplinas/{id}', [DisciplinaController::class, 'show']);

// Atv 8
Route::get('/produtos/create', [ProdutoController::class, 'create']);
Route::post('/produtos', [ProdutoController::class, 'store']);