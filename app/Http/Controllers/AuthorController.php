<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Affiliations;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index() {
      // route --> /authors/
      $authors = Author::with('affiliation')->orderBy('created_at', 'desc')->paginate(10);
      
      return view('authors.index', ["authors" => $authors]);
    }

    public function show($id) {
      // route --> /authors/{id}
      $author = Author::with('affiliation')->findOrFail($id);

      return view('authors.show', ["author" => $author]);
    }

    public function create() {
      // route --> /authors/create
      $affiliations = Affiliations::all();
      
      return view('authors.create', ["affiliation" => $affiliations]);
    }

    public function store(Request $request) {
      // --> /authors/ (POST)
      $validated = $request->validate([
        'name' => 'required|string|max:255',
        'publishcount' => 'required|integer|min:0|max:100',
        'bio' => 'required|string|min:20|max:1000',
        'affiliation_id' => 'required|exists:affiliations,id',
      ]);

      Author::create($validated);

      return redirect()->route('authors.index')->with('success', 'Author created successfully.');
    }

    public function destroy($id) {
      // --> /authors/{id} (DELETE)
      // handle delete request to delete an author record from table
    }
}
