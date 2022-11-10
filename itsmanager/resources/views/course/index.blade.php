@extends('layout')

@section("title")
Lista studenti
@endsection

@section("content")
<div class="flex flex-col">
    <a href="/">Torna indietro</a>
    <h1>Lista corsi</h1>

    <div class="flex flex-col">
        @foreach ($courses as $course)
        <div>
            {{ $course->name }}
        </div>
        @endforeach
    </div>
    <a class="p-3 rounded bg-green-300" href="/courses/create">Crea nuovo</a>
</div>
@endsection