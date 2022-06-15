<?php

namespace Database\Factories;

use App\Models\partner;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stand>
 */
class StandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'status'=>$this->faker->randomElement(['Alquilado', 'Problemas', 'Normal']),
            'partner_id'=>partner::all()->random()->id,
        ];
    }
}
