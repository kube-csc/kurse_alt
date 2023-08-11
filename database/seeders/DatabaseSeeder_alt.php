<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder_alt extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(TeamSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(SportSectionSeeder::class);
        $this->call(TrainertypSeeder::class);
        $this->call(TrainertableSeeder::class);
        $this->call(CoursedateSeeder::class);
        $this->call(InstructionSeeder::class);
    }
}
