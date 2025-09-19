<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'B2B')</title>
    @vite(['resources/js/app.js', 'resources/sass/app.scss'])
</head>
<body>
<main class="container py-4">
    @yield('content')
</main>

{{-- zona para scripts por-vista opcional --}}
@stack('scripts')
</body>
</html>
