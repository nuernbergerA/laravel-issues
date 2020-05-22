<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Livewire Issues</title>
        @livewireStyles
        <link href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css"  rel="stylesheet">
    </head>
    <body>
        @livewire('something')
        @livewireScripts
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js" defer></script>
    </body>
</html>
