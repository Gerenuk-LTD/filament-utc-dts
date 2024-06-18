<?php

namespace Gerenuk\FilamentUtcDts;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\View;

class FilamentUtcDtsPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-utc-dts';
    }

    public function register(Panel $panel): void
    {
        $panel->renderHook('panels::global-search.before', function () {
            $timestamp = Carbon::now()->utc();
            $formattedTimestamp = config('filament-utc-dts.show_date') ? $timestamp->toDateTimeString() : $timestamp;

            return View::make('filament-utc-dts::badge', [
                'showBorder' => config('filament-utc-dts.show_border'),
                'datestamp' => $formattedTimestamp,
            ]);
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
