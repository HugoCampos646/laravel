@extends('layouts.app')

@section('title', 'Crear alumno')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Crear alumno</h2>

    <form action="{{ route('alumnos.store') }}" method="POST" class="space-y-4">
        @csrf

        <input type="text" name="nombre" placeholder="Nombre" class="border p-2 w-full">
        <input type="email" name="email" placeholder="Email" class="border p-2 w-full">
        <input type="text" name="telefono" placeholder="Teléfono" class="border p-2 w-full">

        <button class="bg-green-600 text-white px-4 py-2 rounded">Guardar</button>
    </form>
@endsection
