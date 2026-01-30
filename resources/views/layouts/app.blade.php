<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Laravel')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-800">

<x-header />

<div class="flex min-h-screen">
    <x-sidebar />

    <main class="flex-1 p-8">
        <div class="bg-white p-6 rounded-xl shadow">
            @yield('content')
        </div>
    </main>
</div>

<x-footer />

</body>
</html>
