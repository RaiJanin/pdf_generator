<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    @yield('styles')
    @include('config')
</head>
<body class="min-h-screen">
    @yield('main-content')
    @yield('scripts')
</body>
</html>