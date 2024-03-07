<?php

namespace YavuzC\FilamentCharCounter;

use Filament\Contracts\Plugin;
use Filament\Panel;

class CharCounterPlugin implements Plugin
{
    public function getId(): string
    {
        return 'yavuzc-filament-char-counter';
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        return filament(app(static::class)->getId());
    }

    public function register(Panel $panel): void
    {
    }

    public function boot(Panel $panel): void
    {
    }
}