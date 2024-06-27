<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}

        <title>{{ $title ?? 'Data siswa' }}</title>
        @livewireStyles
    </head>
    <body>
        <div>
            <img src="{{ asset('img/testimg.jpg') }}" class="w-screen h-52 grayscale">
           {{ $slot }}
        </div>
        @livewireScripts
    </body>
</html>
