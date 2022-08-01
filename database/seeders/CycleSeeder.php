<?php

namespace ElaborateCode\AlgerianEducationSystem\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CycleSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $cycles = require __DIR__.'/../../arrays/cycles.php';

        DB::table(config('algerian-education-system.cycles_table_name') ?? 'cycles')->insert($cycles);
    }
}
