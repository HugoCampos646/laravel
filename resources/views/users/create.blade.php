@extends('layouts.app')

@section('title', 'Crear usuario')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Crear usuario</h2>

    <form action="{{ route('users.store') }}" method="POST" class="space-y-4">
        @csrf

        <input type="text" name="name" placeholder="Nombre" class="border p-2 w-full" required>
        <input type="email" name="email" placeholder="Email" class="border p-2 w-full" required>
        <input type="password" name="password" placeholder="Contraseña" class="border p-2 w-full" required>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">
            Guardar
        </button>
    </form>
@endsection
