<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'text' => $this->faker->name(),
            'day' => $this->faker->dayOfWeek($max = 'now'),
            'reminder' => $this->faker->boolean($chanceOfGettingTrue = 50)
        ];
    }
}
