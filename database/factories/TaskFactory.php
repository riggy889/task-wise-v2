<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition(): array
    {
        return [
            'group_id' => rand(1, 3),
            'user_id' => 1,
            'title' => $this->faker->sentence(rand(4, 6), true),
            'description' => $this->faker->text(),
            'due_date' => $this->faker->dateTimeBetween('tomorrow', 'next week'),
            'status' => rand(0, 1),
        ];
    }
}
