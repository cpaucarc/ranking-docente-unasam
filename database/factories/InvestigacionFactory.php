<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Investigacion>
 */
class InvestigacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $RVAC = $this->faker->boolean(5);
        $sin_inicar = $this->faker->boolean(5);
        $semestre_id = $this->faker->numberBetween(1, 4);
        $culminado = !($semestre_id == 4) && $this->faker->boolean(60);
        $tiempos = [
            1 => ['inicio' => '-18 months', 'fin' => '-15 months'],
            2 => ['inicio' => '-13 months', 'fin' => '-10 months'],
            3 => ['inicio' => '-6 months', 'fin' => '-3 months'],
        ];

        return [
            'titulo' => $this->faker->sentence(15),
            'monto' => $this->faker->randomFloat(2, 1000, 100000),
            'enlace_publicacion' => $this->faker->url(),
            'num_resolucion' => ($RVAC ? $this->faker->numerify('RVAC-###-') : $this->faker->numerify('RR-###-')) . now()->year . '-UNASAM',
            'estado_ejecucion' => $culminado ? ($sin_inicar ? 2 : 3) : 1, //1: En ejecucion, 2: Sin iniciar 3: Culminado
            'estado_validacion' => $this->faker->numberBetween(1, 3),
            'financiador' => $this->faker->numberBetween(1, 4),
            'tipo_publicacion' => $this->faker->numberBetween(0, 2),
            'fecha_inicio' => $culminado ? ($this->faker->dateTimeBetween($tiempos[$semestre_id]['inicio'], $tiempos[$semestre_id]['fin']))->format("Y-m-d") : now(),
            'fecha_registro' => $culminado ? ($this->faker->dateTimeBetween($tiempos[$semestre_id]['inicio'], $tiempos[$semestre_id]['fin']))->format("Y-m-d") : now(),
            'semestre_id' => $semestre_id,
        ];
    }
}
