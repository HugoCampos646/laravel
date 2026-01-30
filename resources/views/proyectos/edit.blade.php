@extends('layouts.app')

@section('title', 'Editar proyecto')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Editar proyecto</h2>

    <form action="{{ route('proyectos.update', $proyecto) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <input type="text" name="titulo" value="{{ $proyecto->titulo }}" class="border p-2 w-full" required>

        <textarea name="descripcion" class="border p-2 w-full">{{ $proyecto->descripcion }}</textarea>

        <label>Fecha inicio</label>
        <input type="date" name="fecha_inicio" value="{{ $proyecto->fecha_inicio }}" class="border p-2 w-full">

        <label>Fecha fin</label>
        <input type="date" name="fecha_fin" value="{{ $proyecto->fecha_fin }}" class="border p-2 w-full">

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
            Actualizar
        </button>
    </form>
@endsection
