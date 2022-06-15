<?php

namespace Database\Factories;

use App\Models\activity;
use App\Models\partner;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Assistence>
 */
class AssistenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'datetime'=>$this->faker->date(),
            'status'=>$this->faker->randomElement(['Asistio', 'Falta']),
            'activity_id'=>activity::all()->random()->id,
            'partner_id'=>partner::all()->random()->id,
        ];
    }
}
