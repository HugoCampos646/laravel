@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

    @guest
        <div class="text-center space-y-4">
            <h2 class="text-3xl font-bold">Bienvenido</h2>
            <p>Gestiona usuarios y proyectos fácilmente</p><br>

            <a href="{{ route('login') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Login</a>
            <a href="{{ route('register') }}" class="bg-green-600 text-white px-4 py-2 rounded">Registro</a>
        </div>
    @endguest

    @auth
        <h2 class="text-2xl font-bold mb-4">Panel principal</h2>

        <div class="grid grid-cols-2 gap-6">
            <div class="bg-blue-100 p-4 rounded shadow">
                <h3 class="font-semibold">Usuarios</h3>
                <a href="{{ route('users.index') }}" class="text-blue-700">Gestionar</a>
            </div>

            <div class="bg-green-100 p-4 rounded shadow">
                <h3 class="font-semibold">Proyectos</h3>
                <a href="#" class="text-green-700">Gestionar</a>
            </div>
        </div>
    @endauth

@endsection
