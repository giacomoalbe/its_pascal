@extends('layout')

@section("title")
Blogo | Lista articoli
@endsection

@section("content")
<div class="flex justify-between items-center">
    <h1 class="font-bold text-blue-800 text-2xl">Lista articoli</h1>
    <a 
        class="rounded bg-blue-500 text-white p-2 hover:bg-blue-700 text-sm transition duration-300" 
        href="/articles/new">
        Crea articolo
    </a>
</div>
<div class="flex flex-col">
    @foreach($articles as $article) 
    <h2><a href="">{{ $article->title }}</a></h2>
    @endforeach
</div>
@endsection