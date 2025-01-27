<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProcedureController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\LoginController;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::get('/', [ProcedureController::class, 'index']);

Route::get('/support', function () {return view('support');})->name('support');

Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');


