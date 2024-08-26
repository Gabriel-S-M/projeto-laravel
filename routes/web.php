<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TasksController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/exemplo', [ExemploController::class, 'index']);

Route::get('/contato', [ContactController::class, 'index']);
Route::post('/contato/store', [ContactController::class, 'store'])->name('contato.store');
Route::put('/contato/update', [ContactController::class, 'update'])->name('contato.update');
Route::delete('/contato/delete/{id}', [ContactController::class, 'destroy'])->name('contato.destroy');

Route::get('/task', [TasksController::class, 'index']);