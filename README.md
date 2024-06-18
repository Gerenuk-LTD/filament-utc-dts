# This is my package filament-utc-dts

[![Latest Version on Packagist](https://img.shields.io/packagist/v/gerenuk/filament-utc-dts.svg?style=flat-square)](https://packagist.org/packages/gerenuk/filament-utc-dts)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/gerenuk/filament-utc-dts/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/gerenuk/filament-utc-dts/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/gerenuk/filament-utc-dts/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/gerenuk/filament-utc-dts/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/gerenuk/filament-utc-dts.svg?style=flat-square)](https://packagist.org/packages/gerenuk/filament-utc-dts)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require gerenuk/filament-utc-dts
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-utc-dts-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-utc-dts-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-utc-dts-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filamentUtcDts = new Gerenuk\FilamentUtcDts();
echo $filamentUtcDts->echoPhrase('Hello, Gerenuk!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Kieran Proctor](https://github.com/KieranLProctor)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
