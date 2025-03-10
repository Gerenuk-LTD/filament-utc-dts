<?php

namespace Gerenuk\FilamentUtcDts;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Gerenuk\FilamentUtcDts\Livewire\UtcBadge;
use Livewire\Livewire;

class FilamentUtcDtsPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-utc-dts';
    }

    public function register(Panel $panel): void
    {
        Livewire::component('filament-utc-dts::utc-badge', UtcBadge::class);

        $panel->renderHook('panels::global-search.before', function () {
            return Livewire::mount('filament-utc-dts::utc-badge');
        });
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }
}
