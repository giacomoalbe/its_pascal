@extends("layout")

@section("title")
Blogo | Logino
@endsection

@section("content")
<h1 class="font-bold text-blue-800 text-2xl">Accedi</h1>
<form action="/login" method="POST">
    @csrf
    <div class="flex flex-col pt-5 space-y-2">
        <div class="flex flex-col">
            <label for="email" class="font-bold pb-1">Email</label>
            <input 
                placeholder="team@billgates.com" 
                class="outline-none p-1 px-2 rounded border border-blue-200" 
                type="email" 
                name="email" 
                id="email"
                value="{{ old('email') }}"
            >
        </div>
        <div class="flex flex-col">
            <label for="password" class="font-bold pb-1">Password</label>
            <input 
                placeholder="ahah lol rotlf" 
                class="outline-none p-1 px-2 rounded border border-blue-200" 
                type="password" 
                name="password" 
                id="password">
        </div>

        <div class="flex mt-2 justify-end items-center">
            <input 
                type="submit" 
                value="Accedi" 
                class="cursor-pointer outline-none hover:bg-green-600 bg-green-400 rounded p-2 text-white text-sm"
                >
            <span class="ml-2"> o <a href="/register">registrati</a></span>
        </div>
    </div>
    @error("login")
    <div class="text-red-600 font-bold">
        {{ $message }}
    </div>
    @enderror
</form>
@endsection