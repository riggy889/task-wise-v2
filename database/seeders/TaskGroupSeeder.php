<?php

namespace Database\Seeders;

use App\Models\TaskGroup;
use Illuminate\Database\Seeder;

class TaskGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TaskGroup::factory()->count(3)->create();
    }
}
