<?php

namespace Database\Factories;

use App\Models\StatusOccupationLocals;
use Illuminate\Database\Eloquent\Factories\Factory;

class StatusOccupationLocalsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StatusOccupationLocals::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code'=>$this->faker->unique()->randomDigit,
            'intitule'=>$this->faker->name
        ];
    }
}
