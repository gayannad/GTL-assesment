<?php

namespace Database\Factories;

use App\Models\LastRun;
use App\Models\Runner;
use Illuminate\Database\Eloquent\Factories\Factory;

class LastRunFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LastRun::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'runner_id' => Runner::all()->random()->id,
            'distance'=>$this->faker->biasedNumberBetween(1000, 9000),
            'date'=>$this->faker->date(),
            'amount'=>$this->faker->randomFloat(2,1,10)
        ];
    }
}
