@extends('layouts.app')
IDIOMA ACTUAL: {{ app()->getLocale() }}

@section('title', 'Proyectos')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Proyectos</h2>

    <a href="{{ route('proyectos.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">
        Crear proyecto
    </a>

    <table class="w-full border mt-4">
        <tr class="bg-gray-200">
            <th class="p-2">Título</th>
            <th class="p-2">Inicio</th>
            <th class="p-2">Fin</th>
            <th class="p-2">Acciones</th>
        </tr>

        @foreach($proyectos as $proyecto)
            <tr>
                <td class="p-2 border">{{ $proyecto->titulo }}</td>
                <td class="p-2 border">{{ $proyecto->fecha_inicio }}</td>
                <td class="p-2 border">{{ $proyecto->fecha_fin }}</td>

                <td class="p-2 border space-x-2">
                    <a href="{{ route('proyectos.show', $proyecto) }}"
                       class="bg-green-600 text-white px-2 py-1 rounded">
                        Ver
                    </a>

                    <a href="{{ route('proyectos.edit', $proyecto) }}"
                       class="bg-yellow-500 text-white px-2 py-1 rounded">
                        Editar
                    </a>

                    <form action="{{ route('proyectos.destroy', $proyecto) }}"
                          method="POST"
                          style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-600 text-white px-2 py-1 rounded"
                                onclick="return confirm('¿Seguro que quieres borrar este proyecto?')">
                            Borrar
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
