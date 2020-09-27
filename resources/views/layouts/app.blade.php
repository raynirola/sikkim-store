<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    @hasSection('meta') @yield('meta') @endif
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    @livewireStyles
    @hasSection('title')<title> @yield('title') </title> @else <title>Sikkim Store - Local Online Shop</title> @endif
</head>
<body class="bg-gray-200">
<x-header/>
@yield('content')
<x-footer/>
@livewireScripts
@stack('scripts')
</body>
</html>
