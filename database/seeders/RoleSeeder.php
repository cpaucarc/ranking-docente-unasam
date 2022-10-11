<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
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
                "name" => "Administrador",
                "guard_name" => "web",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Validador",
                "guard_name" => "web",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                "name" => "Docente",
                "guard_name" => "web",
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        Role::query()->insert($data);
    }
}
