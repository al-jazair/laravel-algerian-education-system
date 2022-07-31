<?php

use ElaborateCode\AlgerianEducationSystem\Database\Seeders\AlgerianEducatifSystemSeeder;
use ElaborateCode\AlgerianEducationSystem\Models\ClassType;

beforeEach(function () {
    $this->seed(AlgerianEducatifSystemSeeder::class);
});

it('has 4am as previous class to 1as-st', function () {
    $first_science = ClassType::with('previousClassType')->where('alias', '1as-st')->first();

    // dump($first_science->toArray());

    // dump($first_science->previousClassType->toArray());

    $this->assertEquals($first_science->previousClassType->alias, '4am');
});

it('has many classes as next classes to 1as-st', function () {
    $first_science = ClassType::with('nextClassTypes')->where('alias', '1as-st')->first();

    // dump($first_science->toArray());

    // dump($first_science->nextClassTypes->toArray());

    $this->assertCount(4, $first_science->nextClassTypes->toArray());
    $this->assertTrue($first_science->nextClassTypes->contains('alias', '2as-s'));
    $this->assertTrue($first_science->nextClassTypes->contains('alias', '2as-ge'));
    $this->assertTrue($first_science->nextClassTypes->contains('alias', '2as-m'));
    $this->assertTrue($first_science->nextClassTypes->contains('alias', '2as-tm'));
});
