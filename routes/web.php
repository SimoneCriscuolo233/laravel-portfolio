<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ProjectsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

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

Route::middleware(['auth', 'verified'])
    ->prefix('admin')     // Gli URL saranno: /admin/...
    ->name('admin.')      // I nomi delle rotte saranno: admin.dashboard
    ->group(function () {
        
        Route::get('/', [DashboardController::class, 'index'])->name('admin-dashboard');
        
        // Qui in futuro aggiungerai: Route::resource('projects', ProjectController::class);
});

Route::resource("project", ProjectsController::class)
->middleware(['auth','verified']);
require __DIR__.'/auth.php';
