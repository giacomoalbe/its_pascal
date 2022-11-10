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

    public function store(Request $request) {
        $validatedData = $request->validate([
            "name" => "required",
            "surname" => "required",
            "email" => "required|email"
        ]);

        Author::create($validatedData);

        return redirect("/authors");
    }
}
