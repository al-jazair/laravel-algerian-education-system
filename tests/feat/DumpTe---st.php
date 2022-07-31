<?php

use ElaborateCode\AlgerianEducationSystem\Database\Seeders\AlgerianEducatifSystemSeeder;
use ElaborateCode\AlgerianEducationSystem\Models\ClassType;
use ElaborateCode\AlgerianEducationSystem\Models\Cycle;

it('dump', function () {
    $this->seed(AlgerianEducatifSystemSeeder::class);

    dump(ClassType::all()->toArray());
    dump(Cycle::all()->toArray());

    expect(true)->toBeTrue();
});
