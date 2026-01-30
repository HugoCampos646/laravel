@extends('layouts.app')

@section('title', 'Usuarios')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Usuarios</h2>

    <a href="{{ route('users.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block">
        Crear usuario
    </a>

    <table class="w-full border">
        <tr class="bg-gray-200">
            <th class="p-2">ID</th>
            <th class="p-2">Nombre</th>
            <th class="p-2">Email</th>
            <th class="p-2">Acciones</th>
        </tr>

        @foreach($users as $user)
            <tr>
                <td class="p-2 border">{{ $user->id }}</td>
                <td class="p-2 border">{{ $user->name }}</td>
                <td class="p-2 border">{{ $user->email }}</td>

                <td class="p-2 border space-x-2">
                    <a href="{{ route('users.edit', $user) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">
                        Editar
                    </a>

                    <form action="{{ route('users.destroy', $user) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-600 text-white px-2 py-1 rounded">
                            Borrar
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
