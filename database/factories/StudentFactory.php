<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $student=Student::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'direccion' => $this->faker->streetAddress,
            'telefono' => $this->faker->tollFreePhoneNumber,
            'correo' => $this->faker->unique()->safeEmail,
            'jornada' => $this->faker->name,
            'grado' => $this->faker->name,
        ];
    }
}
