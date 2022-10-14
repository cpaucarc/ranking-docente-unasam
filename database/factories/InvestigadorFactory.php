<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Investigador>
 */
class InvestigadorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tipo' => $this->faker->boolean(75),
            'estado_validacion' => $this->faker->numberBetween(1, 3),
            'docente_id' => $this->faker->numberBetween(1, 50),
            'investigacion_id' => $this->faker->numberBetween(1, 50)
        ];
    }
}
