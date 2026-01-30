<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Proyecto;

class ProyectoSeeder extends Seeder
{
    public function run(): void
    {
        Proyecto::create([
            'titulo' => 'Web corporativa',
            'descripcion' => 'Desarrollo de la web de la empresa',
            'fecha_inicio' => '2026-01-01',
            'fecha_fin' => '2026-03-01',
        ]);

        Proyecto::create([
            'titulo' => 'App móvil',
            'descripcion' => 'Aplicación para clientes',
            'fecha_inicio' => '2026-02-15',
            'fecha_fin' => '2026-06-01',
        ]);

        Proyecto::create([
            'titulo' => 'Sistema interno',
            'descripcion' => 'Gestión interna de empleados',
            'fecha_inicio' => '2026-03-10',
            'fecha_fin' => '2026-07-30',
        ]);
    }
}
