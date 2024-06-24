<img src="https://banners.beyondco.de/Filament%20UTC%20DTS.png?theme=light&packageManager=composer+require&packageName=gerenuk%2Ffilament-utc-dts&pattern=brickWall&style=style_1&description=See+UTC+time+in+your+Filament+panel&md=1&showWatermark=0&fontSize=100px&images=clock" alt="Project banner">

# Filament UTC DTS

[![Latest Version on Packagist](https://img.shields.io/packagist/v/gerenuk/filament-utc-dts.svg?style=flat-square)](https://packagist.org/packages/gerenuk/filament-utc-dts)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/gerenuk-ltd/filament-utc-dts/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/gerenuk-ltd/filament-utc-dts/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/gerenuk-ltd/filament-utc-dts/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/gerenuk-ltd/filament-utc-dts/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/gerenuk/filament-utc-dts.svg?style=flat-square)](https://packagist.org/packages/gerenuk/filament-utc-dts)

This package adds a UTC indicator badge to your Filament panel.

## Table of Contents
1. [Introduction](#filament-utc-dts)
2. [Version Compatibility](#version-compatibility)
3. [Installation](#installation)
4. [Usage](#usage)
    - [Registering the Plugin](#usage)
5. [Testing](#testing)
6. [Screenshots](#screenshots)
    - [UTC Indicator](#utc-indicator)
7. [Changelog](#changelog)
8. [Contributing](#contributing)
9. [Security Vulnerabilities](#security-vulnerabilities)
10. [Credits](#credits)
11. [License](#license)

## Version Compatibility

| Plugin | Filament | Laravel | PHP      |
|--------|----------|---------|----------|
| 1.x    | 3.x      | 10.x    | 8.x      |
| 1.x    | 3.x      | 11.x    | 8.2\|8.3 |

## Installation

You can install the package via composer:

```bash
composer require gerenuk/filament-utc-dts
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
    /*
     * The Carbon format which should be used to display the UTC timestamp.
     */
    'format' => 'd M Hi\Z',
];
```

## Usage

You first need to register the plugin with Filament. This can be done inside of your `PanelProvider`, e.g. `AdminPanelProvider`.

```php
<?php

namespace App\Providers\Filament;

use Filament\Panel;
use Filament\PanelProvider;
use Gerenuk\FilamentUtcDts\FilamentUtcDtsPlugin;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            // ...
            ->plugin(FilamentUtcDtsPlugin::make());
    }
}
```

## Testing

```bash
composer test
```

## Screenshots

### UTC Indicator

![UTC Indicator](https://raw.githubusercontent.com/Gerenuk-LTD/filament-utc-dts/main/.github/resources/utc-indicator-light.png)
![UTC Indicator](https://raw.githubusercontent.com/Gerenuk-LTD/filament-utc-dts/main/.github/resources/utc-indicator-dark.png)

### UTC Indicator & Date

![UTC Indicator & Date](https://raw.githubusercontent.com/Gerenuk-LTD/filament-utc-dts/main/.github/resources/utc-indicator-date-light.png)
![UTC Indicator & Date](https://raw.githubusercontent.com/Gerenuk-LTD/filament-utc-dts/main/.github/resources/utc-indicator-date-dark.png)

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
