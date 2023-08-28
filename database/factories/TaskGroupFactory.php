<?php

namespace Database\Factories;

use App\Models\TaskGroup;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TaskGroup>
 */
class TaskGroupFactory extends Factory
{
    protected $model = TaskGroup::class;

    public function definition(): array
    {
        return [
            'user_id' => 1,
            'name' => $this->faker->sentences(rand(1, 4), true),
            'status' => rand(0, 1),
        ];
    }
}
