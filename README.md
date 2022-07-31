# Laravel algerian education system structure

[![Packagist Version](https://img.shields.io/packagist/v/elaborate-code/laravel-algerian-education-system?style=for-the-badge)](https://packagist.org/packages/elaborate-code/laravel-algerian-education-system)
[![Packagist Downloads (custom server)](https://img.shields.io/packagist/dt/elaborate-code/laravel-algerian-education-system?style=for-the-badge)](https://packagist.org/packages/elaborate-code/laravel-algerian-education-system)
[![GitHub Workflow Status](https://img.shields.io/github/workflow/status/elaborate-code/laravel-algerian-education-system/run-tests?label=Tests&style=for-the-badge)](https://github.com/elaborate-code/laravel-algerian-education-system/actions/workflows/run-tests.yml)
[![GitHub Workflow Status](https://img.shields.io/github/workflow/status/elaborate-code/laravel-algerian-education-system/Fix%20PHP%20code%20style%20issues?label=Code%20Style&style=for-the-badge)](https://github.com/elaborate-code/laravel-algerian-education-system/actions/workflows/fix-php-code-style-issues.yml)

![banner](https://banners.beyondco.de/Algerian%20education%20system%20structure.png?theme=dark&packageManager=composer+require&packageName=elaborate-code%2Flaravel-algerian-education-system&pattern=architect&style=style_1&description=Tables+migrations+seeded+with+the+structure+of+the+algerian+education+system+for+Laravel+apps&md=1&showWatermark=0&fontSize=100px&images=database)

Tables migrations seeded with the structure of the algerian education system for Laravel apps

## Installation

You can install the package via composer:

```bash
composer require elaborate-code/laravel-algerian-education-system
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="algerian-education-system-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="algerian-education-system-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
```

## References

All the data is gathered exclusively from https://www.education.gov.dz/fr/systeme-educatif-algerien/

Also check https://www.education.gov.dz/%d8%a7%d9%84%d9%86%d8%b8%d8%a7%d9%85-%d8%a7%d9%84%d8%aa%d8%b1%d8%a8%d9%88%d9%8a-%d8%a7%d9%84%d8%ac%d8%b2%d8%a7%d8%a6%d8%b1%d9%8a/

![Structuration-du-système-éducatif](https://education.gov.dz/wp-content/uploads/2014/12/Structuration-du-syst%C3%A8me-%C3%A9ducatif.jpg)

![RESTRUCTURATION-DU-POST-OBLIGATOIRE](https://education.gov.dz/wp-content/uploads/2015/01/RESTRUCTURATION-DU-POST-OBLIGATOIRE.jpg)

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
