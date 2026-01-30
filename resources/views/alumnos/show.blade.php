@extends('layouts.app')

@section('title', 'Detalle alumno')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Detalle del alumno</h2>

    <div class="bg-white shadow p-6 rounded space-y-3">
        <p><strong>Nombre:</strong> {{ $alumno->nombre }}</p>
        <p><strong>Email:</strong> {{ $alumno->email }}</p>
        <p><strong>Teléfono:</strong> {{ $alumno->telefono ?? 'No definido' }}</p>
        <br>

        <a href="{{ route('alumnos.index') }}" class="bg-gray-600 text-white px-4 py-2 rounded">Volver</a>
    </div>
@endsection
