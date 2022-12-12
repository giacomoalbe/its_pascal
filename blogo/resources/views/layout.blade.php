<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title", "Blogo")</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex flex-col min-h-screen bg-gray-100">
        <nav class="py-3 px-2 bg-blue-400 text-white flex">
            <a href="/">Blog<span class="text-blue-900 font-bold">o</span></a>
            <div class="ml-auto">
                <span class="pr-1"><a href="/articles">Articoli</a></span>
                <span class="pr-1"><a href="/authors">Autori</a></span>
            </div>

            @auth
            <div>
                Ciao {{ Auth::user()->name }}!
                <a href="/logout">Esci</a>
            </div>
            @endauth
            @guest
            <a href="/login">Login</a>
            @endguest
        </nav>
        <div class="flex-1 mx-auto max-w-xl w-full pt-5">
            @yield("content")
        </div>
    </div>
</body>
</html>