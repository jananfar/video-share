<?php

use App\Http\Controllers\CategoryVideoController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

// Main directory route
Route::get('/', [IndexController::class, 'index'])->name('index');

// Videos operations routes
Route::controller(VideoController::class)->prefix('/videos')->group(function () {
    Route::get('/', 'index')->name('videos.index');
    Route::get('/create', 'create')->name('videos.create');
    Route::post('/', 'store')->name('videos.store');
    Route::get('/{video}', 'show')->name('videos.show');
    Route::get('/{video}/edit', 'edit')->name('videos.edit');
    Route::post('/{video}', 'update')->name('videos.update');
});

// Videos operations routes based on the categories
Route::controller(CategoryVideoController::class)->prefix('/categories')->group(function () {
    Route::get('/{category}/videos', 'index')->name('categories.videos.index');
});

// Dashboard route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Auth operations routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
