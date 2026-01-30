<header class="bg-blue-600 text-white p-4 shadow">
    <div class="container mx-auto flex justify-between">
        <h1 class="text-xl font-bold">Mi App Laravel</h1>

        @auth
            <span>Hola, {{ auth()->user()->name }}</span>
        @endauth
    </div>
</header>
