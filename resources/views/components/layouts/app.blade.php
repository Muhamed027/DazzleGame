<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @vite('resources/css/app.css','resources/js/app.js')
    </head>
    <body class="dark:bg-gray-950 dark:text-slate-100">
       <div class="max-w-6xl mx-auto ">
        <header class=" sticky z-30  top-0 backdrop-blur-lg   border-b max-w-7xl mx-auto rounded-b-xl border-white">
            <nav class="container rounded-b-3xl bg mx-auto flex flex-col lg:flex-row items-center justify-between py-1 px-4" >
                <x-partials.nav/>
            </nav>
        </header>
        <main class="max-w-6xl mx-auto mt-8">
            {{ $slot }}
        </main>
       </div>
    </body>
</html>
