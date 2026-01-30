@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

    {{-- USUARIO NO LOGUEADO --}}
    @guest
        <div class="text-center mt-16 space-y-6">
            <h1 class="text-4xl font-bold">Bienvenido a la aplicación de gestión</h1>
            <p class="text-gray-600">Administra alumnos y proyectos fácilmente</p>

            <div class="space-x-4">
                <a href="{{ route('login') }}" class="bg-blue-600 text-white px-6 py-3 rounded">Login</a>
                <a href="{{ route('register') }}" class="bg-green-600 text-white px-6 py-3 rounded">Registrarse</a>
            </div>
        </div>
    @endguest


    {{-- USUARIO LOGUEADO --}}
    @auth
        <div class="mt-10">
            <h2 class="text-2xl font-bold mb-6">Hola, {{ Auth::user()->name }}</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <a href="{{ route('users.index') }}" class="bg-white shadow p-6 rounded hover:bg-gray-100">
                    <h3 class="text-xl font-semibold">Gestión de Usuarios</h3>
                    <p class="text-gray-500">Administrar usuarios del sistema</p>
                </a>

                <a href="{{ route('proyectos.index') }}" class="bg-white shadow p-6 rounded hover:bg-gray-100">
                    <h3 class="text-xl font-semibold">Gestión de Proyectos</h3>
                    <p class="text-gray-500">Administrar proyectos</p>
                </a>

                <a href="{{ route('alumnos.index') }}" class="bg-white shadow p-6 rounded hover:bg-gray-100">
                    <h3 class="text-xl font-semibold">Gestión de Alumnos</h3>
                    <p class="text-gray-500">Administrar alumnos</p>
                </a>

            </div>
        </div>
    @endauth

@endsection
