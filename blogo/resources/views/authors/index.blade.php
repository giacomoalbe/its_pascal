@extends('layout')

@section("title")
Blogo | Lista Autori
@endsection

@section("content")
<div class="flex justify-between items-center">
    <h1 class="font-bold text-blue-800 text-2xl">Lista autori</h1>
    <a 
        class="rounded bg-blue-500 text-white p-2 hover:bg-blue-700 text-sm transition duration-300" 
        href="/authors/new">
        Crea autore
    </a>
</div>
<div class="flex flex-col">
    @foreach($authors as $author) 
    <div class="flex py-3 border-b border-gray-200">
        <h2 class="mr-auto"><a href="">{{ $author->fullName }}</a></h2>
        <button><a href="/authors/edit/{{ $author->id }}">✏️ Modifica</a></button>
    </div>
    @endforeach
</div>
@endsection