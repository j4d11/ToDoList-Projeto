<?php

use App\Http\Controllers\nome;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TarefaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('index',[TarefaController::class, 'index'])->name('tarefas.index');
Route::get('form',[TarefaController::class, 'create'])->name('tarefas.create');
Route::post('form',[TarefaController::class, 'store'])->name('tarefas.store');
Route::get('form/{id}',[TarefaController::class, 'edit'])->name('tarefas.edit');
Route::put('form/{id}',[TarefaController::class, 'update'])->name('tarefas.update');
Route::delete('form/{id}',[TarefaController::class, 'destroy'])->name('tarefas.destroy');



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
