<?php

namespace YavuzCv\FilamentCharCounter;

use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CharCounterServiceProvider extends PackageServiceProvider
{

    public function configurePackage(Package $package): void
    {
        $package
            ->hasAssets()
            ->name('yavuzcv-filament-char-counter')
            ->hasViews();
    }

    public function packageBooted()
    {
        parent::packageBooted();

        FilamentAsset::register([
            Css::make('yavuzcv-filament-char-counter', __DIR__ . '/../resources/dist/css/char-counter.css')
        ]);
    }

}
