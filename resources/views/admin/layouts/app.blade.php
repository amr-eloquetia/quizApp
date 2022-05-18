<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Css footer -->
    <link href="{{ asset('css/admin-login.css') }}" rel="stylesheet">

    <title>{{ config('app.name', 'DeltaStudio AP') }}</title>

    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>

<body>

    {{-- @include('plantilla.header') --}}

    @yield('content')


    {{-- @include('plantilla.footer') --}}
</body>

</html>
