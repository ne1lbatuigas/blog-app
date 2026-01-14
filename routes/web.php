<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use Illuminate\Container\Attributes\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('register', [
    AuthController::class, 'showRegister'
    ])->name('show.register');
Route::get('login', [
    AuthController::class, 'showLogin'
    ])->name('show.login');

Route::get('/authors', [
    AuthorController::class, 'index'
])->name('authors.index');

Route::get('/authors/create', [
    AuthorController::class, 'create'
])->name('authors.create');

Route::get('/authors/{author}', [
    AuthorController::class, 'show'
])->name('authors.show');

Route::post('/authors', [
    AuthorController::class, 'store'
])->name('authors.store');

Route::delete('/authors/{author}', [
    AuthorController::class, 'destroy'
])->name('authors.destroy');