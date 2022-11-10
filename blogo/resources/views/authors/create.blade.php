@extends("layout")

@section("title")
Blogo | Crea autore
@endsection

@section("content")
<h1 class="font-bold text-blue-800 text-2xl">Crea articolo</h1>
<form action="/authors" method="POST">
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
                value="{{ old("name") }}"
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
                value="Crea" 
                class="cursor-pointer outline-none hover:bg-green-600 bg-green-400 rounded p-2 text-white text-sm">
        </div>
    </div>
</form>
@endsection