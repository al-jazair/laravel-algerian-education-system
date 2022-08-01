<?php

use ElaborateCode\AlgerianEducationSystem\Database\Seeders\AlgerianEducationSystemSeeder;
use ElaborateCode\AlgerianEducationSystem\Database\Seeders\MergePrescolaireIntoPrimaireCycleSeeder;

it('has 4 cycles by default', function () {
    $this->seed(AlgerianEducationSystemSeeder::class);

    $this->assertDatabaseCount('cycles', 4);
});

it('has 24 classTypes by default', function () {
    $this->seed(AlgerianEducationSystemSeeder::class);

    $this->assertDatabaseCount('class_types', 24);
});

it('merges prescolaire into primaire', function () {
    $this->seed(AlgerianEducationSystemSeeder::class);
    $this->seed(MergePrescolaireIntoPrimaireCycleSeeder::class);

    $this->assertDatabaseCount('cycles', 3);

    $this->assertDatabaseHas('class_types', [
        'cycle_id' => 'primaire',
        'alias' => 'pre',
    ]);

    $this->assertDatabaseMissing('class_types', [
        'cycles_id' => 'pre-scolaire',
    ]);
});
