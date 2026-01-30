@extends('layouts.app')

@section('title', 'Alumnos')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Alumnos</h2>

    <a href="{{ route('alumnos.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">
        Nuevo alumno
    </a>

    @if(session('success'))
        <div class="bg-green-200 p-2 mt-3 rounded">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full border mt-4">
        <tr class="bg-gray-200">
            <th class="p-2">Nombre</th>
            <th class="p-2">Email</th>
            <th class="p-2">Teléfono</th>
            <th class="p-2">Acciones</th>
        </tr>

        @foreach($alumnos as $alumno)
            <tr>
                <td class="p-2 border">{{ $alumno->nombre }}</td>
                <td class="p-2 border">{{ $alumno->email }}</td>
                <td class="p-2 border">{{ $alumno->telefono }}</td>

                <td class="p-2 border space-x-2">
                    <a href="{{ route('alumnos.show', $alumno) }}"
                       class="bg-green-600 text-white px-2 py-1 rounded">
                        Ver
                    </a>

                    <a href="{{ route('alumnos.edit', $alumno) }}"
                       class="bg-yellow-500 text-white px-2 py-1 rounded">
                        Editar
                    </a>

                    <form action="{{ route('alumnos.destroy', $alumno) }}"
                          method="POST"
                          style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <form id="delete-form-{{ $alumno->id }}" action="{{ route('alumnos.destroy', $alumno) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="button"
                                    onclick="confirmDelete({{ $alumno->id }})"
                                    class="bg-red-600 text-white px-2 py-1 rounded">
                                Borrar
                            </button>
                        </form>

                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <div class="mt-4">
        {{ $alumnos->links() }}
    </div>
@endsection
