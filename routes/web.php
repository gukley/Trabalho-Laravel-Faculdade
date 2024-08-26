<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExemploController;
use App\Http\Controllers\TarefaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/exemplo', [ExemploController::class, 'index']);

Route::get('/contato', [ContactController::class, 'index']);
Route::post('/contato/store', [ContactController::class, 'store'])->name('contato.store');

Route::put('/contato/update', [ContactController::class, 'update']) ->name('contato.update');

Route::delete('/contato/delete/{id}', [ContactController::class, 'destroy'])->name('contato.destroy');

Route::get('/tarefas', [TarefaController::class, 'index'])->name('tarefas.index');


