@extends('layout')

@section("title")
Lista studenti
@endsection

@section("content")
<div class="flex flex-col">
    <a href="/">Torna indietro</a>
    <h1>Lista studenti</h1>

    <div class="flex flex-col">
        @foreach ($students as $student)
        <div>
            {{ $student->name }}
        </div>
        @endforeach
    </div>
    <a class="p-3 rounded bg-green-300" href="/students/create">Crea nuovo</a>
</div>
@endsection