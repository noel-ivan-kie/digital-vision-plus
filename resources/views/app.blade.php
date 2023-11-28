<!DOCTYPE html>
<html lang="{{ str_replace('_', '_', app()->getlocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>@yield('title', Config('app.name'))</title>
</head>

<body id="section_1">
    {{-- la bar de navigation  --}}
    @include('include.navbar')

    {{-- le contenue a modiffier selon la page appeller  --}}
    @yield('content')

    {{-- le footer --}}
    @include('include.footer')

    {{-- le script js  --}}
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>



</body>

</html>
