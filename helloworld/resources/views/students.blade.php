@extends("layout")

@section("title")
Lista degli studenti bravi
@endsection

@section("content")
<h1>Lista degli studenti bravi</h1>
<ul>
    @foreach ($students as $index => $student)
    <li>
        <a href="/students/{{ $student['id'] }}">
            {{ $index }}. {{ $student['name'] }}
        </a>
    </li>
    @endforeach
</ul>
@endsection