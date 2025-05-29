<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::resource('users',UserController::class);
