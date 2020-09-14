<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="description"
              content="Multi-Vendor, Multi-Tenant E-Commerce for Sikkim.">
        <meta name="keywords"
              content="E-Commerce, Online Shop, Store">
        <meta name="author"
              content="Ray Nirola">
        <title>Sikkim Store - Local Online Shop</title>
        <meta name="viewport"
              content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token"
              content="{{ csrf_token() }}">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"
                defer></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}"
              rel="stylesheet">
        <!-- Fonts -->
        <link
            href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
            rel="stylesheet">
    </head>
    <body class="bg-gray-200">
        <x-header/>
        @yield('content')
        <x-footer/>
        @stack('scripts')
    </body>
</html>
