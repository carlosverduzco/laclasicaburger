<?php

namespace Database\Factories;

use App\Models\Agregado;
use Illuminate\Database\Eloquent\Factories\Factory;

class AgregadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Agregado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nombre"=> $this->faker->unique()->sentence(1),
            "descripcion"=>$this->faker->paragraph(1)
        ];
    }
}
