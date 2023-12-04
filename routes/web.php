<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\TareaController;

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
Route::middleware('guest')->group(function () {
    Route::get('/', [AuthenticatedSessionController::class, 'create'])
                ->name('login');
});

Route::get('/', [TareaController::class, 'index'] )->middleware(['auth', 'verified'])->name('tareas.index');
Route::get('/tareas/create', [TareaController::class, 'create'] )->middleware(['auth', 'verified'])->name('tareas.create');
Route::get('/tareas/{tarea}/edit', [TareaController::class, 'edit'])->middleware(['auth', 'verified'])->name('tareas.edit');
Route::get('/tareas/{tarea}', [TareaController::class, 'show'])->middleware(['auth'])->name('tareas.show');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
