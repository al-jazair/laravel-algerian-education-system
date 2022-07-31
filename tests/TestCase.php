<?php

namespace ElaborateCode\AlgerianEducationSystem\Tests;

use ElaborateCode\AlgerianEducationSystem\AlgerianEducationSystemServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations/create_cycles_table.php');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations/create_class_types_table.php');
    }

    protected function getPackageProviders($app)
    {
        return [
            AlgerianEducationSystemServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
    }
}
