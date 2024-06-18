<?php

namespace Gerenuk\FilamentUtcDts;

use Filament\Support\Assets\AlpineComponent;
use Filament\Support\Assets\Asset;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Facades\FilamentIcon;
use Illuminate\Filesystem\Filesystem;
use Livewire\Features\SupportTesting\Testable;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Gerenuk\FilamentUtcDts\Commands\FilamentUtcDtsCommand;
use Gerenuk\FilamentUtcDts\Testing\TestsFilamentUtcDts;

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
