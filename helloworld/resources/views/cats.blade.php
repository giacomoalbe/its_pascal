@extends("layout")

@section("title")
Lista dei catti
@endsection

@section("content")
<h1>Lista dei catti</h1>
<ul>
    @foreach ($cats as $index => $cat)
    <li>
        <a href="/cats/{{ $cat->getId() }}">
            {{ $index }}. {{ $cat->getColore() }}
        </a>
    </li>
    @endforeach
</ul>
@endsection