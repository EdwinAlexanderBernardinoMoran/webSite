<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Téc. Edwin Alexander</title>

    {{-- Estilos CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css', true) }}">
    <link rel="stylesheet" href="{{ asset('icons/css/boxicons.min.css', true) }}">

    @livewireStyles()
</head>
<body>

    @include('layouts.navigation')
    @include('layouts.content')

    {{ $slot }}l


    @include('layouts.footer')


    <script src="{{ asset('js/app.js', true) }}"></script>
    <script src="{{ asset('icons/dist/boxicons.js', true) }}"></script>
    @livewireScripts()
</body>
</html>
