<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;

// Authentication Routes
Route::get('/register', [UserController::class, 'showRegistrationForm']);
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// Root Route - Start at login page
Route::get('/', function () {
    return redirect()->route('login');
});

// Notes Resource Routes (Protected)
Route::resource('notes', NoteController::class)->middleware('auth');