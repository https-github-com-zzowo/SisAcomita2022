<?php

namespace Database\Factories;

use App\Models\partner;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Spouse>
 */
class SpouseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fullname'=>$this->faker->name,
            'dni'=>$this->faker->randomNumber(8),
            'phone'=>$this->faker->phoneNumber,
            'partner_id'=>partner::all()->random()->id,
        ];
    }
}
