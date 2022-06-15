<?php

namespace Database\Factories;

use App\Models\activity;
use App\Models\assistence;
use App\Models\partner;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fine>
 */
class FineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'date'=>$this->faker->date(),
            'status'=>$this->faker->randomElement(['debe', 'cancelado']),
            'activity_id'=>activity::all()->random()->id,
            'partner_id'=>partner::all()->random()->id,
            'assistence_id'=>assistence::all()->random()->id,

        ];
    }
}
