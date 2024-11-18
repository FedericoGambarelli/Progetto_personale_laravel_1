<?php

use App\Models\Game;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'Homepage'])->name('home');

Route::get('/Game/Create', [GameController::class, 'ShowPage'])->name('showpage');
Route::post('/Game/Create/Add', [GameController::class, 'GameCreate'])->name('addgame');
Route::get('/Game/index', [GameController::class, 'index'])->name('game.index');
Route::get('/Game/Show/{game}', [GameController::class, 'show'])->name('game.show');
Route::get('/Game/Edit/{game}', [GameController::class, 'edit'])->name('game.edit');
Route::put('/Game/Update/{game}', [GameController::class, 'update'])->name('game.update');
Route::delete('/Game/Delete/{game}', [GameController::class, 'destroy'])->name('game.destroy');

Route::get('/ContactUs', [PublicController::class, 'showContact'])->name('contatti');
Route::post('/Confirmation', [MailController::class, 'Confirmation'])->name('confirmation');

Route::get('/Dashboard', [AuthController::class, 'dashboardview'])->name('dashboard');
