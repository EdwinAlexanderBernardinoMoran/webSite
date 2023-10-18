<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/code.ico'), true}}"/>
    <title>Téc. Edwin Alexander</title>

    {{-- Estilos CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css', true) }}">
    <link rel="stylesheet" href="{{ asset('icons/css/boxicons.min.css', true) }}">
</head>
<body>

    @include('components.navigation')
    @include('components.content')

    {{ $slot }}l


    @include('components.footer')

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> <!-- Importa Axios -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/app.js', true) }}"></script>
    <script src="{{ asset('icons/dist/boxicons.js', true) }}"></script>
</body>
</html>
