<?php

use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [loginController::class, 'showLoginForm'])->name('login');
Route::get('/register', [loginController::class, 'showRegisterForm'])->name('register');
Route::get('/profile', [loginController::class, 'showProfile'])->name('profile');
