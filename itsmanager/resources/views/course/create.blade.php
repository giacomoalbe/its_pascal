@extends('layout')

@section("content")
<form action="/course" method="POST">
    @csrf
    <div class="flex flex-col">
    @foreach ($fields as $field)
        @if ($field['type'] == 'select')
        <label for="{{ $field['name'] }}">{{ $field['label'] }}</label>
        <select name="{{ $field['name'] }}" id="{{ $field['name'] }}" value="{{ old($field['name']) }}">
        @foreach ($field['options'] as $option)
            <option value="{{ $option['value'] }}">{{ $option['label'] }}</option>
        @endforeach
        </select>
        @else 
        <div>
            <label for="{{ $field['name'] }}">{{ $field['label'] }}</label>
            <input class="border" type="{{ $field['type'] }}" name="{{ $field['name'] }}" id="{{ $field['name'] }}" value="{{ old($field['name']) }}">
        </div>
        @endif
        @error($field['name'])
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    @endforeach
    <input type="submit" value="Crea">
    </div>
</form>
@endsection