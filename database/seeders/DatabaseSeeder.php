<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Nivel 0
        $this->call(FacultadSeeder::class);
        $this->call(PersonaSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(SemestreSeeder::class);

        // Nivel 1
        $this->call(DepartamentoSeeder::class);
        $this->call(EscuelaSeeder::class);
        \App\Models\Investigacion::factory(60)->create();
        $this->call(UserSeeder::class);
        // Nivel 2
        $this->call(DocenteSeeder::class);
        \App\Models\Investigador::factory(150)->create();
        // Nivel 3
        // Nivel 4
    }
}
