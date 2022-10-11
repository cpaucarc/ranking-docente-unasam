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
        $this->call(FacultadSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(SemestreSeeder::class);
        $this->call(DepartamentoSeeder::class);
        $this->call(EscuelaSeeder::class);
        $this->call(PersonaSeeder::class);
        $this->call(DocenteSeeder::class);
        $this->call(UserSeeder::class);
    }
}
