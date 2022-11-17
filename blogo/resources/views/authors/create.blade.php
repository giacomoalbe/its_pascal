@extends("layout")

@section("title")
Blogo | Crea autore
@endsection

@section("content")
<h1 class="font-bold text-blue-800 text-2xl">{{ isset($author) ? 'Modifica' : 'Crea'}} autore</h1>
<form action="/authors{{ isset($author) ? '/'. $author->id : '' }}" method="POST">
    @csrf
    <div class="flex flex-col pt-5 space-y-2">
        <div class="flex flex-col">
            <label for="name" class="font-bold pb-1">Nome</label>
            <input 
                placeholder="Giacomo" 
                class="outline-none p-1 px-2 rounded border border-blue-200" 
                type="text" 
                name="name" 
                id="name"
            @if (isset($author)) 
                value="{{ old("name") ? old('name') : $author->name }}"
            @else 
                value="{{ old("name") }}"
            @endif
            >
            @error('name')
                <span class="text-red-500 font-bold">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="flex flex-col">
            <label for="surname" class="font-bold pb-1">Cognome</label>
            <input 
                placeholder="Alberini" 
                class="outline-none p-1 px-2 rounded border border-blue-200" 
                type="text" 
                name="surname" 
                id="surname"
            @if (isset($author)) 
                value="{{ old("surname") ? old('surname') : $author->surname }}"
            @else 
                value="{{ old("surname") }}"
            @endif
            >
            @error('surname')
            <span class="text-red-500 font-bold">
                {{ $message }}
            </span>
        @enderror
        </div>
        <div class="flex flex-col">
            <label for="email" class="font-bold pb-1">Email</label>
            <input 
                placeholder="giacomoalbe@gmail.com" 
                class="outline-none p-1 px-2 rounded border border-blue-200" 
                type="text" 
                name="email" 
                id="email"
            @if (isset($author)) 
                value="{{ old("email") ? old('email') : $author->email }}"
            @else 
                value="{{ old("email") }}"
            @endif
            >
            @error('email')
            <span class="text-red-500 font-bold">
                {{ $message }}
            </span>
            @enderror
        </div>
        <div class="flex mt-2 justify-end">
            <input 
                type="submit" 
                value="{{ isset($author) ? 'Modifica' : 'Crea' }}" 
                class="cursor-pointer outline-none hover:bg-green-600 bg-green-400 rounded p-2 text-white text-sm">
        </div>
    </div>
</form>
@endsection