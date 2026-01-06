<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/authors', function () {
    $authors = [
        ["name" => "Alice","skill" => 75, "id" => "1"],
        ["name" => "Bob","skill" => 45, "id" => "2"],
    ];

    return view('authors.index', ["greeting" => "hello", "authors" => $authors]);
});

Route::get('/authors/create', function () {
    return view('authors.create');
});

Route::get('/authors/{id}', function ($id) {

    return view('authors.show', ["id" => $id]);
});