<?php

namespace ElaborateCode\AlgerianEducationSystem\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MergePrescolaireIntoPrimaireCycleSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        DB::table('class_types')
            ->where('cycle_id', 'pre-scolaire')
            ->update(['cycle_id' => 'primaire']);

        DB::table('cycles')->delete('pre-scolaire');
    }
}
