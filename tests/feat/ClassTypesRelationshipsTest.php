<?php

use ElaborateCode\AlgerianEducationSystem\Database\Seeders\AlgerianEducationSystemSeeder;
use ElaborateCode\AlgerianEducationSystem\Models\ClassType;

beforeEach(function () {
    $this->seed(AlgerianEducationSystemSeeder::class);
});

it('has 4am as previous class to 1as-st', function () {
    $first_science = ClassType::with('previousClassType')->where('alias', '1as-st')->first();

    $this->assertEquals($first_science->previousClassType->alias, '4am');
});

it('has many classes as next classes to 1as-st', function () {
    $first_science = ClassType::with('nextClassTypes')->where('alias', '1as-st')->first();

    $this->assertCount(4, $first_science->nextClassTypes->toArray());
    $this->assertTrue($first_science->nextClassTypes->contains('alias', '2as-s'));
    $this->assertTrue($first_science->nextClassTypes->contains('alias', '2as-ge'));
    $this->assertTrue($first_science->nextClassTypes->contains('alias', '2as-m'));
    $this->assertTrue($first_science->nextClassTypes->contains('alias', '2as-tm'));
});

it('has many classes as previous level classes to 2as-*', function () {
    $second_science = ClassType::with('previousLevelClassTypes')->where('level', '12')->first();

    $this->assertCount(2, $second_science->previousLevelClassTypes->toArray());
    $this->assertTrue($second_science->previousLevelClassTypes->contains('alias', '1as-st'));
    $this->assertTrue($second_science->previousLevelClassTypes->contains('alias', '1as-l'));
});

it('has many classes as next level classes to 2as-*', function () {
    $second_science = ClassType::with('nextLevelClassTypes')->where('level', '12')->first();

    $this->assertCount(6, $second_science->nextLevelClassTypes->toArray());
    $this->assertTrue($second_science->nextLevelClassTypes->contains('alias', '3as-s'));
    $this->assertTrue($second_science->nextLevelClassTypes->contains('alias', '3as-ge'));
    $this->assertTrue($second_science->nextLevelClassTypes->contains('alias', '3as-m'));
    $this->assertTrue($second_science->nextLevelClassTypes->contains('alias', '3as-tm'));
    $this->assertTrue($second_science->nextLevelClassTypes->contains('alias', '3as-le'));
    $this->assertTrue($second_science->nextLevelClassTypes->contains('alias', '3as-lp'));
});
