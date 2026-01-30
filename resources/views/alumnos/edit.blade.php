@extends('layouts.app')

@section('title', 'Editar alumno')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Editar alumno</h2>

    <form action="{{ route('alumnos.update', $alumno) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <input type="text" name="nombre" value="{{ $alumno->nombre }}" class="border p-2 w-full">
        <input type="email" name="email" value="{{ $alumno->email }}" class="border p-2 w-full">
        <input type="text" name="telefono" value="{{ $alumno->telefono }}" class="border p-2 w-full">

        <button class="bg-blue-600 text-white px-4 py-2 rounded">Actualizar</button>
        <a href="{{ route('alumnos.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Cancelar</a>
    </form>
@endsection
