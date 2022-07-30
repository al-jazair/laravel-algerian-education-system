<?php

use ElaborateCode\AlgerianEducationSystem\Models\ClassType;
use ElaborateCode\AlgerianEducationSystem\Models\Cycle;

it('can test', function () {
    dump(ClassType::all()->toArray());
    dump(Cycle::all()->toArray());
    expect(true)->toBeTrue();
});
