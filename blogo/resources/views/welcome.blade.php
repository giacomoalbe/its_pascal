@extends('layout')

@section("title")
Blogo | Lista articoli
@endsection

@section("content")
<div class="flex justify-between items-center">
    <h1 class="font-bold text-blue-800 text-2xl">Lista articoli</h1>
    @auth
    <a 
        class="rounded bg-blue-500 text-white p-2 hover:bg-blue-700 text-sm transition duration-300" 
        href="/articles/new">
        Crea articolo
    </a>
    @endauth
</div>
<div class="flex flex-col">
    @foreach($articles as $article)
    <div class="flex py-3 border-b border-gray-200">
        <h2 class="mr-auto"><a href="">{{ $article->title }}</a></h2>
        @auth
        @if (Auth::user()->id == $article->author->id)
        <button><a href="/articles/edit/{{ $article->id }}">✏️ Modifica</a></button>
        @endif
        @endauth
    </div>
    @endforeach
</div>
@endsection