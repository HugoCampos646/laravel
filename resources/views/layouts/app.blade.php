<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Laravel')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-800">

@auth
    <div class="bg-gray-900 text-white p-4 flex justify-between items-center">
        <span>Usuario: {{ Auth::user()->name }}</span>

        <div class="flex items-center space-x-4">
            {{-- Selector idioma --}}
            <div class="space-x-2">
                <a href="{{ url('lang/es') }}" class="underline">ES</a>
                <a href="{{ url('lang/en') }}" class="underline">EN</a>
                <a href="{{ url('lang/fr') }}" class="underline">FR</a>
            </div>

            {{-- Logout --}}
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="bg-red-600 px-4 py-1 rounded">
                    {{ __('messages.logout') }}
                </button>
            </form>
        </div>
    </div>
@endauth

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

{{-- SweetAlert --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmDelete(id) {
        Swal.fire({
            title: '¿Estás seguro?',
            text: "No podrás revertir esto",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Sí, borrar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + id).submit();
            }
        })
    }
</script>

</body>
</html>
