<?php

use Illuminate\Support\Facades\Route;

<<<<<<< HEAD

=======
>>>>>>> 0a266ac610b9e19484e347233c42fb3658a77814
Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\NoteController;

Route::resource('notes', NoteController::class);

use App\Http\Controllers\UserController;

Route::get('/register', [UserController::class, 'showRegistrationForm']);
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/login', [UserController::class, 'showLoginForm']);
<<<<<<< HEAD
Route::post('/login', [UserController::class, 'login'])->name('login');
=======
Route::post('/login', [UserController::class, 'login'])->name('login');
>>>>>>> 0a266ac610b9e19484e347233c42fb3658a77814
