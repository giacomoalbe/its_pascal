@extends("layout")

@section("title")
Blogo | Registrino
@endsection

@section("content")
<h1 class="font-bold text-blue-800 text-2xl">Registrati</h1>
<form action="/register" method="POST">
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
                value="{{ old("surname") }}"
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
                value="{{ old("email") }}"
            >
            @error('email')
            <span class="text-red-500 font-bold">
                {{ $message }}
            </span>
            @enderror
        </div>
        <div class="flex flex-col">
            <label for="password" class="font-bold pb-1">Password</label>
            <input
                placeholder="password"
                class="outline-none p-1 px-2 rounded border border-blue-200" 
                type="password" 
                name="password" 
                id="password"
            >
            @error('password')
            <span class="text-red-500 font-bold">
                {{ $message }}
            </span>
            @enderror
        </div>
        <div class="flex flex-col">
            <label for="password_confirmation" class="font-bold pb-1">Conferma password</label>
            <input 
                placeholder="password"
                class="outline-none p-1 px-2 rounded border border-blue-200" 
                type="password" 
                name="password_confirmation" 
                id="password_confirmation"
            >
        </div>
        <div class="flex mt-2 justify-end">
            <input 
                type="submit" 
                value="Registrati" 
                class="cursor-pointer outline-none hover:bg-green-600 bg-green-400 rounded p-2 text-white text-sm">
        </div>
    </div>
</form>
@endsection