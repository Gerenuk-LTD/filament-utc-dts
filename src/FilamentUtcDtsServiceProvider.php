<?php

namespace Gerenuk\FilamentUtcDts;

use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentUtcDtsServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-utc-dts';

    public static string $viewNamespace = 'filament-utc-dts';

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name(static::$name)
            ->hasViews()
            ->hasConfigFile()
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishConfigFile()
                    ->askToStarRepoOnGitHub('Gerenuk-LTD/filament-utc-dts');
            });
    }
}
