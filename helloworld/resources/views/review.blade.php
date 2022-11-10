@extends("layout")

@section("title")
Studente {{ $student['name'] }}
@endsection

@section("content")
<a href="/students">Torna alla lista</a>
<h1>Voti (ai prof) dello studente {{ $student['name'] }}</h1>

<ul>
    @if (isset($student['reviews']))
    @foreach ($student['reviews'] as $review)
    <li>
        {{ $review['teacher']}}: <span class="bold">{{ $review['grade'] }}</span> ({{ $review['valuation'] }})
    </li>
    @endforeach
    @else 
    <h2>Non ha ancora valutato nexxuno</h2>
    @endif
</ul>
@endsection