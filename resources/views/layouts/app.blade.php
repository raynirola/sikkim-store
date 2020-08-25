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
    <link href="{{ asset('css/main.css') }}"
          rel="stylesheet">
</head>
<body class="md:bg-gradient-to-tr from-gray-800 to-gray-900">
@yield('content')
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
        defer>
</script>
@yield('scripts')
</body>
</html>
