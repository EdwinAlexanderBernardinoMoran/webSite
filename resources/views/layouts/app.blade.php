<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Téc. Edwin Alexander</title>

    {{-- Estilos CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icons.css') }}">

    @livewireStyles()
</head>
<body>

    @include('layouts.navigation')

    {{ $slot }}

    @livewireScripts()

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
