<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alonso y Chanel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link  rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
   
    <style>
        @yield('css')
        
    </style>
</head>

<body>

@yield('app')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@yield('script')

</body>
</html>
