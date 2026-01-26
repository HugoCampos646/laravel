<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Laravel')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<header>
    <h1>Mi aplicación Laravel</h1>
</header>

<main>
    @yield('content')
</main>

<footer>
    <p>© {{ date('Y') }}</p>
</footer>

</body>
</html>
