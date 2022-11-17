<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ArticleController extends Controller
{
    public function index() {
        return view("welcome", [
            "articles" => Article::all(),
        ]);
    }

    public function create() {
        $authors = Author::all();

        return view("articles.create", [
            "authors" => $authors,
            "actionUrl" => "/articles"
        ]);
    }

    public function edit($id) {
        $article = Article::findOrFail($id);
        $authors = Author::all();

        return view("articles.create", [
            "article" => $article,
            "actionUrl" => "/articles/" . $article->id,
            "authors" => $authors

        ]);
    }

    public function store(Request $request) {
        // Validare i dati inseriti
        $validatedData = $request->validate([
            "title" => "required",
            "slug" => "required|min:10",
            "author_id" => "required|numeric",
            "content" => "required" 
        ]);

        // Creare il nuovo post
        Article::create($validatedData);

        // Ritornare alla lista dei post
        return redirect("/");
    }

    public function update(Request $request, $id) {
        $article = Article::find($id);

        // Validare i dati inseriti
        $validatedData = $request->validate([
            "title" => "required",
            "slug" => "required|min:10",
            "author_id" => "required|numeric",
            "content" => "required" 
        ]);

        // Modificare il post
        $article->fill($validatedData);
        $article->save();
        

        // Ritornare alla lista dei post
        return redirect("/");
    }
}
