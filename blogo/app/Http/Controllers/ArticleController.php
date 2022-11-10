<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        return view("welcome", [
            "articles" => Article::all(),
        ]);
    }

    public function create() {
        return view("articles.create");
    }

    public function store(Request $request) {
        // Validare i dati inseriti
        $validatedData = $request->validate([
            "title" => "required",
            "slug" => "required|min:10",
            "content" => "required" 
        ]);

        // Creare il nuovo post
        Article::create($validatedData);

        // Ritornare alla lista dei post
        return redirect("/");
    }
}
