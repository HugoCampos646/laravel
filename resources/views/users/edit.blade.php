@extends('layouts.app')

@section('title', 'Editar usuario')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Editar usuario</h2>

    <form action="{{ route('users.update', $user) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <input type="text" name="name" value="{{ $user->name }}" class="border p-2 w-full" required>
        <input type="email" name="email" value="{{ $user->email }}" class="border p-2 w-full" required>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
            Actualizar
        </button>
    </form>
@endsection
