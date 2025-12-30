<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            margin: 0;
            min-height: 100vh;
            background: #f5f6fa;
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>

    {{-- TIDAK ADA LOGO --}}
    {{-- TIDAK ADA CARD BAWAAN --}}
    {{-- LANGSUNG SLOT --}}
    {{ $slot }}

</body>
</html>
