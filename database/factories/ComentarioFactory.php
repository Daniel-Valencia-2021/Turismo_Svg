<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comentario;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comentario>
 */
class ComentarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Comentario::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence(),
            'estrellas' => $this->faker->randomElement([1, 2, 3, 4, 5]),
            'correo' => $this->faker->safeEmail(),
            'comentario' => $this->faker->paragraph()
        ];
    }
}
