<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use Illuminate\Container\Attributes\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->controller(AuthController::class)->group(function () {
    Route::get('/register', 'showRegister')->name('show.register');
    Route::get('/login', 'showLogin')->name('show.login');
    Route::post('/register', 'register')->name('register');
    Route::post('/login', 'login')->name('login');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->controller(AuthorController::class)->group(function () {
    Route::get('/authors', 'index')->name('authors.index');
    Route::get('/authors/create', 'create')->name('authors.create');
    Route::get('/authors/{author}', 'show')->name('authors.show');
    Route::post('/authors', 'store')->name('authors.store');
    Route::delete('/authors/{author}', 'destroy')->name('authors.destroy');
});
