<?php

namespace YavuzCv\FilamentCharCounter;

use Filament\Forms\Components\Textarea as FilamentTextarea;
use YavuzCv\FilamentCharCounter\Concerns\HasCharacterLimit;

class Textarea extends FilamentTextarea
{
    use HasCharacterLimit;

    protected string $view = 'yavuzcv-filament-char-counter::textarea';
}
