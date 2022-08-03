# Laravel algerian education system structure

[![Packagist Version](https://img.shields.io/packagist/v/elaborate-code/laravel-algerian-education-system?style=for-the-badge)](https://packagist.org/packages/elaborate-code/laravel-algerian-education-system)
[![Packagist Downloads (custom server)](https://img.shields.io/packagist/dt/elaborate-code/laravel-algerian-education-system?style=for-the-badge)](https://packagist.org/packages/elaborate-code/laravel-algerian-education-system)
[![GitHub Workflow Status](https://img.shields.io/github/workflow/status/elaborate-code/laravel-algerian-education-system/run-tests?label=Tests&style=for-the-badge)](https://github.com/elaborate-code/laravel-algerian-education-system/actions/workflows/run-tests.yml)
[![GitHub Workflow Status](https://img.shields.io/github/workflow/status/elaborate-code/laravel-algerian-education-system/Fix%20PHP%20code%20style%20issues?label=Code%20Style&style=for-the-badge)](https://github.com/elaborate-code/laravel-algerian-education-system/actions/workflows/fix-php-code-style-issues.yml)

![banner](https://banners.beyondco.de/Algerian%20education%20system%20structure.png?theme=dark&packageManager=composer+require&packageName=elaborate-code%2Flaravel-algerian-education-system&pattern=architect&style=style_1&description=Tables+migrations+seeded+with+the+structure+of+the+algerian+education+system+for+Laravel+apps&md=1&showWatermark=0&fontSize=100px&images=database)

If you are building a **Learning Management System** or a **School Management System** and targeting the Algerian market, this package is perfect to kick start your project by providing migrations and seeders according to the **Algerian education system** structure. see [tables.md](tables.md)

## Installation

Install the package via composer:

```bash
composer require elaborate-code/laravel-algerian-education-system
```

Publish and run the migrations:

```bash
php artisan vendor:publish --tag="algerian-education-system-migrations"
php artisan migrate
```

You may need to rename the migration to something like `2014_10_12_200000_create_cycles_table.php`, `2014_10_12_200000_create_class_types_table.php` to make them run automatically with the first migrations.

### Publishing config file [Optional]

You can publish the config file with:

```bash
php artisan vendor:publish --tag="algerian-education-system-config"
```

This is the contents of the published config file:

```php
return [
    'cycles_table_name' => null, // defaults to cycles
    'class_types_table_name' => null, // defaults to class_types
];
```

That allows you to rename the `tables` names before running the migrations.

## Usage

### Seeders

After publishing and running the migrations, add the seeders to the called seeders list:

- `AlgerianEducationSystemSeeder` is the main seeder that calls:
  - `CycleSeeder`
  - `ClassTypeSeeder`
- `MergePrescolaireIntoPrimaireCycleSeeder` as the name states it deletes the `pre-scolaire` cycle row, and edits the `pre-scolaire` class type to belong to `primaire` cycle

```php
// Database\Seeders\DatabaseSeeder
public function run()
{
    $this->call([
        ElaborateCode\AlgerianEducationSystem\Database\Seeders\AlgerianEducationSystemSeeder::class,
        // ElaborateCode\AlgerianEducationSystem\Database\Seeders\MergePrescolaireIntoPrimaireCycleSeeder::class,
    ]);
}
```

Or call it directly from the command line:

```php
php .\artisan db:seed --class=ElaborateCode\AlgerianEducationSystem\Database\Seeders\AlgerianEducationSystemSeeder
```

### Models

The models `ElaborateCode\AlgerianEducationSystem\Models\Cycle` and `ElaborateCode\AlgerianEducationSystem\Models\ClassType` give you access to a set of relationships. so either use them or extend them.

- `Cycle::classTypes(): HasMany`
- `ClassType::cycle(): BelongsTo`
- `ClassType::previousClassType(): BelongsTo`
- `ClassType::nextClassTypes(): HasMany`
- `ClassType::previousLevelClassTypes(): HasMany`
- `ClassType::nextLevelClassTypes(): HasMany`

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/medilies/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [medilies](https://github.com/medilies)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
