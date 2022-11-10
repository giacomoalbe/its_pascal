@extends("layout")

@section("title")
Le mie scarpe
@endsection

@section("content")
<h1>Lista scarpe</h1>

<ul>
    @foreach ($shoes as $shoe)
    <li>{{ $shoe->name }}</li>
    @endforeach
</ul>
@endsection