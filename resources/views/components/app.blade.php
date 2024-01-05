<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/code.ico', true)}}"/>
    <title>T&eacute;c. Edwin Alexander</title>

    {{-- Estilos CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css', true) }}">
    <link rel="stylesheet" href="{{ asset('icons/css/boxicons.min.css', true) }}">
    <link rel="stylesheet" href="{{ asset('css/loader.css', true) }}">
</head>
<body>

    <div class="contenedor_loader">
        <div class="loader"></div>
    </div>

    @include('components.navigation')
    @include('components.content')

    {{ $slot }}


    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> <!-- Importa Axios -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/app.js', true) }}"></script>
    <script src="{{ asset('icons/dist/boxicons.js', true) }}"></script>
</body>
</html>
