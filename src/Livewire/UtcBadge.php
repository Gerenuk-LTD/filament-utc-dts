<?php

namespace Gerenuk\FilamentUtcDts\Livewire;

use Illuminate\Support\Carbon;
use Livewire\Component;

class UtcBadge extends Component
{
    public string $datestamp;

    public function mount(): void
    {
        $this->updateTime();
    }

    public function updateTime(): void
    {
        $this->datestamp = Carbon::now()->utc()->format(config('filament-utc-dts.format', 'd M Hi\Z'));
    }

    public function render()
    {
        return view('filament-utc-dts::utc-badge');
    }
}
