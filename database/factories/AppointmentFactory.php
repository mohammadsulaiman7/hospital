<?php

namespace Database\Factories;

use App\Models\Appointment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Appointment::class;
    public function definition(): array
    {
        return [
            'date'=>$this->faker->date(),
            'doctor_id'=>'1',
            'status'=>$this->faker->boolean(),
            'approve'=>$this->faker->boolean(),
            'user_id'=>'1',
        ];
    }
}
