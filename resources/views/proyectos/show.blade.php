@extends('layouts.app')

@section('title', 'Detalle del proyecto')

@section('content')
    <h2 class="text-2xl font-bold mb-6">Detalle del proyecto</h2>

    <div class="bg-white shadow rounded p-6 space-y-4">

        <div>
            <strong>Título:</strong>
            <p>{{ $proyecto->titulo }}</p>
        </div>

        <div>
            <strong>Descripción:</strong>
            <p>{{ $proyecto->descripcion ?? 'Sin descripción' }}</p>
        </div>

        <div>
            <strong>Fecha inicio:</strong>
            <p>{{ $proyecto->fecha_inicio ?? 'No definida' }}</p>
        </div>

        <div>
            <strong>Fecha fin:</strong>
            <p>{{ $proyecto->fecha_fin ?? 'No definida' }}</p>
        </div>

        <a href="{{ route('proyectos.index') }}"
           class="bg-gray-600 text-white px-4 py-2 rounded inline-block">
            Volver
        </a>

    </div>
@endsection
