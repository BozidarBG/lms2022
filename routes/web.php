<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontPagesController;

Route::get('/', [FrontPagesController::class, 'home'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
