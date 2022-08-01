<?php

namespace ElaborateCode\AlgerianEducationSystem\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlgerianEducationSystemSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $this->call([
            CycleSeeder::class,
            ClassTypeSeeder::class,
        ]);
    }
}
