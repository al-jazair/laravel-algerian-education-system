<?php

namespace ElaborateCode\AlgerianEducationSystem;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class AlgerianEducationSystemServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('algerian-education-system')
            ->hasConfigFile()
            ->hasMigration('create_algerian_education_system_table');
    }
}
