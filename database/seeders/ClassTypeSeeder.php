<?php

namespace ElaborateCode\AlgerianEducationSystem\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassTypeSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $class_types = require __DIR__.'/../../arrays/class_types.php';

        DB::table('class_types')->insert($class_types);
    }
}
