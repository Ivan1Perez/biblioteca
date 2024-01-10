<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Libro;

class LibroFactory extends Factory
{

    protected $model = Libro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence,
            'editorial' => $this->faker->sentence(2),
            'precio' => $this->faker->randomFloat(2, 5, 20)
        ];
    }
}
