<aside class="w-64 bg-gray-900 text-white p-5">
    <h2 class="text-lg font-semibold mb-4">Menú</h2>

    <ul class="space-y-2">
        <li><a href="/" class="block hover:bg-gray-700 p-2 rounded">Inicio</a></li>
        <li><a href="{{ route('users.index') }}">{{ __('messages.users') }}</a></li>
        <li><a href="{{ route('proyectos.index') }}">{{ __('messages.projects') }}</a></li>
        <li><a href="{{ route('alumnos.index') }}">{{ __('messages.students') }}</a></li>
    </ul>
</aside>
