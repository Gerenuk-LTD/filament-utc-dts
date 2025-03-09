<span x-data="{ time: '{{ now()->utc()->format(config('filament-utc-dts.format')) }}' }"
      x-init="setInterval(() => time = new Date().toISOString().replace('T', ' ').substring(0, 19), 1000)"
      class="sm:flex hidden items-center rounded-lg bg-white dark:bg-white/5 px-3 h-9 text-sm font-medium text-gray-400 dark:text-gray-500 ring-1 ring-gray-950/10 dark:ring-white/20 shadow-sm">
    <span x-text="time"></span>
</span>
