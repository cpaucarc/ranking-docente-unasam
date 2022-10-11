<?php

namespace Database\Seeders;

use App\Models\Semestre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SemestreSeeder extends Seeder
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
                "nombre" => "2020-2",
                "fecha_inicio" => "2021-02-08",
                "fecha_fin" => "2021-06-04",
                "esta_activo" => false
            ],
            [
                "nombre" => "2021-1",
                "fecha_inicio" => "2021-07-05",
                "fecha_fin" => "2021-10-29",
                "esta_activo" => false
            ],
            [
                "nombre" => "2021-2",
                "fecha_inicio" => "2022-01-31",
                "fecha_fin" => "2022-05-27",
                "esta_activo" => false
            ],
            [
                "nombre" => "2022-1",
                "fecha_inicio" => "2022-07-18",
                "fecha_fin" => "2022-11-04",
                "esta_activo" => true
            ]
        ];

        Semestre::query()->insert($data);
    }
}
