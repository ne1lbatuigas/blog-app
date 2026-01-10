<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index() {
      // route --> /authors/
      $authors = Author::orderBy('created_at', 'desc')->paginate(10);
      
      return view('authors.index', ["authors" => $authors]);
    }

    public function show($id) {
      // route --> /authors/{id}
      $author = Author::findOrFail($id);

      return view('authors.show', ["author" => $author]);
    }

    public function create() {
      // route --> /authors/create
      
      return view('authors.create');
    }

    public function store() {
      // --> /authors/ (POST)
      // hanlde POST request to store a new author record in table
    }

    public function destroy($id) {
      // --> /authors/{id} (DELETE)
      // handle delete request to delete an author record from table
    }
}
