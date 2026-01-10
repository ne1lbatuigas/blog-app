<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use Illuminate\Container\Attributes\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/authors', [
    AuthorController::class, 'index'
])->name('authors.index');

Route::get('/authors/create', [
    AuthorController::class, 'create'
])->name('authors.create');

Route::get('/authors/{id}', [
    AuthorController::class, 'show'
])->name('authors.show');