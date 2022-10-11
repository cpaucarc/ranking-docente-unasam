<?php

namespace Database\Seeders;

use App\Models\Departamento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "id" => 40,
                "nombre" => "Ciencia y Tecnología de Alimentos",
                "facultad_id" => 4
            ],
            [
                "id" => 41,
                "nombre" => "Ingeniería Agrícola",
                "facultad_id" => 2
            ],
            [
                "id" => 42,
                "nombre" => "Ingeniería Civil",
                "facultad_id" => 7
            ],
            [
                "id" => 43,
                "nombre" => "Ingeniería de Minas",
                "facultad_id" => 6
            ],
            [
                "id" => 44,
                "nombre" => "Ciencias del Ambiente",
                "facultad_id" => 5
            ],
            [
                "id" => 45,
                "nombre" => "Contabilidad",
                "facultad_id" => 12
            ],
            [
                "id" => 48,
                "nombre" => "Derecho y Ciencias Políticas",
                "facultad_id" => 10
            ],
            [
                "id" => 49,
                "nombre" => "Educación",
                "facultad_id" => 11
            ],
            [
                "id" => 50,
                "nombre" => "Ciencias Sociales y Ciencias de la Comunicación",
                "facultad_id" => 11
            ],
            [
                "id" => 51,
                "nombre" => "Agronomía",
                "facultad_id" => 2
            ],
            [
                "id" => 52,
                "nombre" => "Ingeniería de Sistemas y Telecomunicaciones",
                "facultad_id" => 1
            ],
            [
                "id" => 53,
                "nombre" => "Obstetricia",
                "facultad_id" => 8
            ],
            [
                "id" => 54,
                "nombre" => "Enfermería",
                "facultad_id" => 8
            ],
            [
                "id" => 55,
                "nombre" => "Propedéutica",
                "facultad_id" => 8
            ],
            [
                "id" => 56,
                "nombre" => "Matemática",
                "facultad_id" => 1
            ],
            [
                "id" => 57,
                "nombre" => "Ciencias Básicas",
                "facultad_id" => 1
            ],
            [
                "id" => 61,
                "nombre" => "Economía",
                "facultad_id" => 12
            ],
            [
                "id" => 63,
                "nombre" => "Administración",
                "facultad_id" => 3
            ],
            [
                "id" => 64,
                "nombre" => "Turismo",
                "facultad_id" => 3
            ],
            [
                "id" => 68,
                "nombre" => "Estadística",
                "facultad_id" => 1
            ]
        ];

        Departamento::query()->insert($data);
    }
}
