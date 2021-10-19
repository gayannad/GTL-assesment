<?php

namespace Database\Factories;

use App\Models\Runner;
use Illuminate\Database\Eloquent\Factories\Factory;

class RunnerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Runner::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $sex = ['male', 'female'];
        $colours = ['B', 'W'];

        return [
            'name' => $this->faker->firstName() .' '. $this->faker->lastName(),
            'weight' => $this->faker->biasedNumberBetween(50, 100),
            'sex' => $this->faker->randomElement($sex),
            'age' => $this->faker->biasedNumberBetween(1, 20),
            'colour' => $this->faker->randomElement($colours),
            'sire' => $this->faker->firstNameMale(),
            'dam' => $this->faker->firstNameFemale(),
        ];
    }
}
