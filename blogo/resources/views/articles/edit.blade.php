@extends("layout")

@section("title")
Blogo | Modifica articolo
@endsection

@section("content")
<h1 class="font-bold text-blue-800 text-2xl">Modifica articolo</h1>
<form action="/articles/{{ $article->id }}" method="POST">
    @csrf
    <div class="flex flex-col pt-5 space-y-2">
        <div class="flex flex-col">
            <label for="title" class="font-bold pb-1">Titolo</label>
            <input 
                placeholder="Articolo dell'anno 2022" 
                class="outline-none p-1 px-2 rounded border border-blue-200" 
                type="text" 
                name="title" 
                id="title"
                value="{{ old("title") ? old("title") : $article->title }}"
            >
            @error('title')
                <span class="text-red-500 font-bold">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="flex flex-col">
            <label for="slug" class="font-bold pb-1">Slug</label>
            <input 
                placeholder="articolo-dell-anno-2022" 
                class="outline-none p-1 px-2 rounded border border-blue-200" 
                type="text" 
                name="slug"
                value="{{ old('slug') ? old('slug') : $article->slug }}" 
                id="slug">
            @error('slug')
            <span class="text-red-500 font-bold">
                {{ $message }}
            </span>
        @enderror
        </div>
        <div class="flex flex-col">
            <label for="content" class="font-bold pb-1">Testo</label>
            <textarea 
                placeholder="Come fare i soldi con Laravel senza saper programmare. Possibile? Continua dopo la pubblicità" 
                class="outline-none p-1 px-2 rounded border border-blue-200" 
                type="text" 
                name="content" 
                id="content">
                {{ old('content') ? old('content') : $article->content }}
            </textarea>
            @error('content')
            <span class="text-red-500 font-bold">
                {{ $message }}
            </span>
        @enderror
        </div>
        <div class="flex mt-2 justify-end">
            <input 
                type="submit" 
                value="Modifica" 
                class="cursor-pointer outline-none hover:bg-green-600 bg-green-400 rounded p-2 text-white text-sm">
        </div>

    </div>
</form>
@endsection