<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

    <body class="text-white text-3xl">
        {{-- TEMP TEST TAILWIND --}}

        @yield('content')
    </body>
</html>
