<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PuntoController;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NotificacionController;
use App\Http\Controllers\ProfesionalsController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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
Route::get('/profesionals/{tarea}', [ProfesionalsController::class, 'index'])->name('profesionals.index');
Route::get('/tareas/{tarea}/puntos/create', [PuntoController::class, 'create'] )->middleware(['auth', 'verified'])->name('puntos.create');
Route::get('/notificaciones', NotificacionController::class)->middleware(['auth', 'verified'])->name('notificaciones');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
