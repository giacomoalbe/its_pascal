@extends("layout")

@section("title")
La mia app - Entusiasmo
@endsection

@section("content")
    @if ($age >= 18)
        <h1 style="color: green">{{ "Yeeee sei spacciato!" }}</h1>
    @else
        <h1 style="color: lime">{{ "Yee, spacci?" }}</h1>
    @endif
    
    <ul>
    @foreach ($persone as $persona)
        <li>{{ $persona }}</li>
    @endforeach
    </ul>
@endsection