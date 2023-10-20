<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/code.ico')}}"/>
    <title>Téc. Edwin Alexander</title>

    {{-- Estilos CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('icons/css/boxicons.min.css') }}">
</head>
<body>

    @include('components.navigation')
    @include('components.content')

    {{ $slot }}l


    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> <!-- Importa Axios -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('icons/dist/boxicons.js') }}"></script>
</body>
</html>
