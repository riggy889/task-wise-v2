<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\TaskGroupSeeder;
use Database\Seeders\TaskSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            TaskGroupSeeder::class,
            TaskSeeder::class
        ]);
    }
}
