<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizzesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/my-quizzes', [QuizzesController::class, 'index'])->name('quizzes.index');
    Route::get('/creator', [QuizzesController::class, 'create'])->name('quizzes.create');
    Route::post('/creator', [QuizzesController::class, 'store'])->name('quizzes.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
