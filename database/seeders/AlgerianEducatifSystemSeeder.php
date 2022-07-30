<?php

namespace ElaborateCode\AlgerianEducationSystem\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlgerianEducatifSystemSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $cycles = require __DIR__ . './../../arrays/cycles.php';
        $class_types = require __DIR__ . './../../arrays/class_types.php';

        DB::table('cycles')->insert($cycles);
        DB::table('class_types')->insert($class_types);
    }
}
