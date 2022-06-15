<?php

namespace Database\Factories;

use App\Models\partner;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Son>
 */
class SonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fullname'=>$this->faker->Name,
            'dni'=>$this->faker->randomNumber(8),
            'level'=>$this->faker->state,
            'partner_id'=>partner::all()->random()->id,

        ];
    }
}
