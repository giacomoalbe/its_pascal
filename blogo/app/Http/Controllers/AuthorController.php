<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index() {
        return view("authors.index", [
            "authors" => Author::all(),
        ]);
    }

    public function create() {
        return view("authors.create");
    }

    public function edit($id) {
        $author = Author::find($id);

        return view("authors.create", [
            "author" => $author,
        ]);
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            "name" => "required",
            "surname" => "required",
            "email" => ["required", "email"],
        ]);

        Author::create($validatedData);

        return redirect("/authors");
    }

    public function update(Request $request, $id) {
        $author = Author::find($id);

        $validatedData = $request->validate([
            "name" => "required",
            "surname" => "required",
            "email" => "required|email"
        ]);

        $author->fill($validatedData);
        $author->save();

        return redirect("/authors");
    }
}
