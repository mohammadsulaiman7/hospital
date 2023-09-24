<?php

namespace Database\Factories;

use App\Models\Speciality;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Speciality>
 */
class SpecialityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Speciality::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->country,
            'cost'=>$this->faker->numberBetween(1,20),
        ];
    }
}
