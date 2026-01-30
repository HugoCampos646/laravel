@extends('layouts.app')

@section('title', 'Crear proyecto')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Crear proyecto</h2>

    <form action="{{ route('proyectos.store') }}" method="POST" class="space-y-4">
        @csrf

        <input type="text" name="titulo" placeholder="Título" class="border p-2 w-full" required>

        <textarea name="descripcion" placeholder="Descripción" class="border p-2 w-full"></textarea>

        <label>Fecha inicio</label>
        <input type="date" name="fecha_inicio" class="border p-2 w-full">

        <label>Fecha fin</label>
        <input type="date" name="fecha_fin" class="border p-2 w-full">

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">
            Guardar
        </button>
    </form>
@endsection
