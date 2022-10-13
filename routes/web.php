<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminDashboardController;

use App\Http\Controllers\FrontPagesController;

Route::get('/', [FrontPagesController::class, 'home'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::prefix('admin')->middleware(['admin'])->group(function(){
    Route::get('dashboard', [AdminDashboardController::class, 'dashboard'])->name('admin.dashboard');
});
