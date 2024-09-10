<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Discapacidad;

class DiscapacidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $discapacidades = [
            ['nombre_discapacidad' => 'Ninguna'],
            ['nombre_discapacidad' => 'Discapacidad Auditiva'],
            ['nombre_discapacidad' => 'Discapacidad Neurológica'],
            ['nombre_discapacidad' => 'Discapacidad Músculo Esquelética'],
            ['nombre_discapacidad' => 'Discapacidad Voz y Habla'],
            ['nombre_discapacidad' => 'Discapacidad Cardiovascular'],
            ['nombre_discapacidad' => 'Discapacidad Mental-Intelectual'],
            ['nombre_discapacidad' => 'Discapacidad Respiratoria'],
            ['nombre_discapacidad' => 'Discapacidad Menta-Psicosocial'],
            ['nombre_discapacidad' => 'Discapacidad Visual'],
        ];

        foreach ($discapacidades as $discapacidad) {
            Discapacidad::create($discapacidad);
        }
    }
}
